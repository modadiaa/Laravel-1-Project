<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator ;
use App\Models\UnderSlider;
use App\Models\UnderSliderTranslation;


class UnderSliderController extends Controller
{

    public function index(Request $request )
    {
        $data =  Underslider::whereHas('Underslidertranslation', function ($q) use ($request) {
                     $q->where('title','LIKE','%'.$request->search .'%')
                       ->orWhere('description','LIKE','%'.$request->search .'%');
                        })->paginate(2);

        return view('admin.underslider.index',[
        'data'  => $data
       ]);
    }

    // public function index(){
    //     $data =  Underslider::all();
    //     return view('admin.underslider.index',[
    //     'data'  => $data
    //    ]);
    // }

     // $data =  User::all();
        // return view('admin.user.index',[
        //     'data'  => $data
        //    ]);


    public function create()
    {
        $data =  Underslider::all();
        return view('admin.underslider.create',[
            'data'  => $data
           ]);
    }

    public function store(Request $request)
    {
        $data =  UnderSlider::create($request->except('image', '_token'));
        $data->save();
        toastr()->success(__('words.success') );
        return redirect('dashboard/underslider');
    }

    public function edit(Underslider $underslider,$id)
    {
       $data =  Underslider::find($id);
       $datalist =  Underslider::all();
        return view('admin.underslider.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }

    public function show(Underslider $underslider,$id)
    {
      $data =  Underslider::find($id);
      return view('admin.underslider.show',[
      'data'  => $data
     ]);

    }

    public function update(Request $request, Underslider $underslider , $id)
    {
         $data = Underslider::find($id);
         $data->update($request->except('image', '_token'));


        if($request->file('image')){
            $data->image = $request->file('image')->store('images') ;
            $data->update();

        }

        toastr()->success(__('words.update-success') );
        return redirect('dashboard/underslider');
    }

    public function destroy(Underslider $underslider , $id)
    {
        $data = Underslider::find($id);
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/underslider');
    }

    public function deleteAll(Underslider $underslider ,Request $request)
    {
        $ids = $request->ids;
        Underslider::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
        //return redirect('dashboard');

    }




}
