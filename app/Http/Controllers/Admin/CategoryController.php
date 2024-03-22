<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category , $subtitle){
        if($category->parent == 0 ){
            return $subtitle ;
        }
        $parent = Category::find($category->parent);
        $subtitle = $parent->subtitle . '  >  ' . $subtitle ;
        return CategoryController::getParentsTree($parent,$subtitle);
    }

    public function index(Request $request )
    {
        $category =  Category::whereHas('CategoryTranslation', function ($q) use ($request) {
                     $q->where('title','LIKE','%'.$request->search .'%')
                       ->orWhere('description','LIKE','%'.$request->search .'%');
                        })->paginate(10);

        return view('admin.category.index',[
        'category'  => $category
       ]);
    }


    public function create()
    {
         $category =  Category::all();
        return view('admin.category.create',[
            'category'  => $category
           ]);
    }

    public function store(Request $request)
    {
        $category =  Category::create($request->except('image', '_token'));
        if($request->file('image')){
            $category->image = $request->file('image')->store('images') ;
        }
        if($request->file('image')){
            $category->banner = $request->file('banner')->store('images') ;
        }
        $category->save();

        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['slug'];
            CategoryTranslation::where('category_id',$category->id)->where('locale',$key)->update([
                'slug'=> $this->createSlug($slug),
            ]);
        }
        toastr()->success(__('words.success') );

        return redirect('dashboard/category');
    }


    public function show(Category $category,$id)
    {
      //  echo "show page id: " , $id ;
      $category =  Category::find($id);
      return view('admin.category.show',[
      'category'  => $category
     ]);

    }

    public function edit(Category $category,$id)
    {
       // echo "Edit page id: " , $id ;
       $data =  Category::find($id);
       $datalist =  Category::all();
        return view('admin.category.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }


    public function update(Request $request, Category $category , $id)
    {
        $category = Category::find($id);

        if($request->file('image')){
            $category->image = $request->file('image')->store('images') ;
           // $category->banner = $request->file('banner')->store('images') ;
        }

        if($request->file('banner')){
            $category->banner = $request->file('banner')->store('images') ;
        }

        $category->update($request->except('image','banner', '_token'));

        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['subtitle'];
            CategoryTranslation::where('category_id',$category->id)->where('locale',$key)->update([
                'slug'=> $this->createSlug($slug)
                //str::slug($data->translate(app()->getlocale())->title)
            ]);
            // $data->update([
            //     'slug'=>str::slug($data->translate(app()->getlocale())->title)
            // ]);
        }
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/category');
    }


    public function destroy(Category $category , $id)
    {
        $category = Category::find($id);
        if($category->image && Storage::disk('public')->exists($category->image)){
            Storage::delete($category->image);
        }
        $category->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/category');
    }

    public function deleteAll(Category $category ,Request $request)
    {
        $ids = $request->ids;
        Category::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
    }

    public function createSlug($text){
        return str_replace(' ','-',$text);
    }





}
