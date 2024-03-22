<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\SliderTranslation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator ;
use Illuminate\Support\Facades\DB;


class SliderController extends Controller
{

    public function index(Request $request )
    {
        $data =  Slider::whereHas('SliderTranslation', function ($q) use ($request) {
                     $q->where('title','LIKE','%'.$request->search .'%')
                       ->orWhere('description','LIKE','%'.$request->search .'%')
                       ->orWhere('link','LIKE','%'.$request->search .'%');
                        })->paginate(10);

        return view('admin.slider.index',[
        'data'  => $data
       ]);



    //     $data =  Slider::when($request->search, function ($q) use ($request) {
    //                     return $q->where('title','LIKE','%'.$request->search .'%');
    //                     })->paginate(5);

    //     return view('admin.slider.index',[
    //     'data'  => $data
    //    ]);
    }

    public function create()
    {
        $data =  Slider::all();
        return view('admin.slider.create',[
            'data'  => $data
           ]);
    }

    public function store(Request $request)
    {
        $data =  Slider::create($request->except('image', '_token'));

        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
        }
        $data->save();
        toastr()->success(__('words.success') );
        return redirect('dashboard/slider');
    }


    public function edit(Slider $slider,$id)
    {
       $data =  Slider::find($id);
       $datalist =  Slider::all();
        return view('admin.slider.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }

    public function show(Slider $slider,$id)
    {
      $data =  Slider::find($id);
      return view('admin.slider.show',[
      'data'  => $data
     ]);

    }



    public function update(Request $request, Slider $slider , $id)
    {
         $data = Slider::find($id);
         $data->update($request->except('image', '_token'));


        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
            $data->update();

        }
        // if($data->image && Storage::disk('public')->exists($data->image)){
        //     Storage::update($data->image);
        // }
        // $data->update();
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/slider');
    }


    public function destroy(Slider $slider , $id)
    {
        $data = Slider::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/slider');
    }



    public function deleteAll(Slider $slider ,Request $request)
    {
        $ids = $request->ids;
        Slider::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
        //return redirect('dashboard');

    }



}
