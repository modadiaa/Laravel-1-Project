<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductTranslation;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $data =  Product::all();
    //     return view('admin.product.index',[
    //     'data'  => $data
    //    ]);
    // }


    public function index(Request $request )
    {
        $data =  Product::whereHas('ProductTranslation', function ($q) use ($request) {
                     $q->where('title','LIKE','%'.$request->search .'%')
                       ->orWhere('smalldesc','LIKE','%'.$request->search .'%');
                        })->paginate(5);

        return view('admin.product.index',[
        'data'  => $data
       ]);
    }

    public function create()
    {
        $data =  Category::all();
        return view('admin.product.create',[
            'data'  => $data
           ]);
    }


    public function store(Request $request)
    {
        $data =  Product::create($request->except('image', '_token'));

        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->save();

        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['title'];
            ProductTranslation::where('product_id',$data->id)->where('locale',$key)->update([
                'slug'=> str::slug($slug)
            ]);
        }
        toastr()->success(__('words.success') );


        return redirect('dashboard/product');
    }

    public function edit(Product $product,$id)
    {
       $data =  Product::find($id);
       $datalist =  Category::all();
        return view('admin.product.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }

    public function show(Product $product,$id)
    {
      //  echo "show page id: " , $id ;
      $data =  Product::find($id);
      return view('admin.product.show',[
      'data'  => $data
     ]);

    }


    // public function update(Request $request, Product $product , $id)
    // {
    //     $data = Product::find($id);
    //     $data->category_id = $request->category_id ;
    //     $data->title = $request->title ;
    //     $data->smalldesc = $request->smalldesc ;
    //     $data->description = $request->description ;
    //     if($request->file('image')){
    //         $data->image = $request->file('image')->store('images') ;
    //     }
    //     $data->save();
    //     return redirect('dashboard/product');
    // }


    public function update(Request $request, Product $product , $id)
    {
         $data = Product::find($id);

        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->update($request->except('image', '_token'));

        // $data->update();
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/product');
    }


    public function destroy(Product $product , $id)
    {
        $data = Product::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/product');
    }

    public function deleteAll(Product $product ,Request $request)
    {
        $ids = $request->ids;
        Product::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
    }

}
