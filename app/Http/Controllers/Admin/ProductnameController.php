<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prodname;
use App\Models\Prodnametranslation;

class ProductnameController extends Controller
{
    public function index()
    {
        $data =  Prodname::all();
        return view('admin.productname.index',[
        'data'  => $data
       ]);
    }

    public function create()
    {
        $data =  Prodname::all();
        return view('admin.productname.create',[
            'data'  => $data
           ]);
    }

    public function store(Request $request)
    {
        $data =  Prodname::create($request->except('image', '_token'));
        $data->save();
        toastr()->success(__('words.success') );
        return redirect('dashboard/productname');

    }

    public function edit(Prodname $productname,$id)
    {
       $data =  Prodname::find($id);
       $datalist =  Prodname::all();
        return view('admin.productname.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }

    public function show(Prodname $productname,$id)
    {
      $data =  Prodname::find($id);
      return view('admin.productname.show',[
      'data'  => $data
     ]);

    }


    public function update(Request $request, Prodname $productname , $id)
    {
        $data = Prodname::find($id);
        $data->update($request->except('image', '_token'));
        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['title'];
            Prodnametranslation::where('prodname_id',$data->id)->where('locale',$key)->update([
                'slug'=> $this->createSlug($slug)
            ]);

        }
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/productname');
    }


    public function destroy(Prodname $productname , $id)
    {
        $data = Prodname::find($id);
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/productname');
    }



    public function createSlug($text){
        return str_replace(' ','-',$text);
    }


}
