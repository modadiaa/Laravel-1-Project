<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;


class GalleryController extends Controller
{
    public function index()
    {
        $data =  Gallery::all();
        return view('admin.gallery.index',[
            'data'  => $data
           ]);
    }


    public function create()
    {
        $data =  Gallery::all();
        return view('admin.gallery.create',[
            'data'  => $data
           ]);
    }


    public function store(Request $request)
    {
        $data =  Gallery::create($request->except('image', '_token'));
        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->save();
        toastr()->success(__('words.success') );
        return redirect('dashboard/gallery');
    }


    public function edit(Gallery $gallery,$id)
    {
       $data =  Gallery::find($id);
       $datalist =  Gallery::all();
        return view('admin.gallery.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }

    public function show(Gallery $gallery,$id)
    {
      //  echo "show page id: " , $id ;
      $data =  Gallery::find($id);
      return view('admin.gallery.show',[
      'data'  => $data
     ]);

    }


    public function update(Request $request, Gallery $gallery , $id)
    {
        $data = Gallery::find($id);
        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->update($request->except('image', '_token'));
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/gallery');
    }


    public function destroy(Gallery $gallery , $id)
    {
        $data = Gallery::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/gallery');
    }

    public function deleteAll(Gallery $gallery ,Request $request)
    {
        $ids = $request->ids;
        Gallery::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
    }


}
