<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Abouttranslation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function index()
    {
        $data =  About::all();
        return view('admin.about.index',[
            'data'  => $data
           ]);
    }

    public function create()
    {
        $data =  About::all();
        return view('admin.about.create',[
            'data'  => $data
           ]);
    }

    public function store(Request $request)
    {
        $data =  About::create($request->except('image', '_token'));
        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->save();
        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['title'];
            Abouttranslation::where('about_id',$data->id)->where('locale',$key)->update([
                'slug'=> str::slug($slug)
            ]);
        }
        toastr()->success(__('words.success') );
        return redirect('dashboard/about');
    }

    public function edit(About $about,$id)
    {
       $data =  About::find($id);
       $datalist =  About::all();
        return view('admin.about.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }

    public function show(About $about,$id)
    {
      //  echo "show page id: " , $id ;
      $data =  About::find($id);
      return view('admin.about.show',[
      'data'  => $data
     ]);

    }

    public function update(Request $request, About $about , $id)
    {
        $data = About::find($id);
        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->update($request->except('image', '_token'));
        // $data->update();
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/about');
    }


    public function destroy(About $product , $id)
    {
        $data = About::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/about');
    }

    public function deleteAll(About $product ,Request $request)
    {
        $ids = $request->ids;
        About::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
    }



}
