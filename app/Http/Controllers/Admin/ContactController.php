<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Contacttranslation;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        $data =  Contact::all();
        return view('admin.contact.index',[
        'data'  => $data
       ]);
    }

    public function create()
    {
         $data =  Contact::all();
        return view('admin.contact.create',[
            'data'  => $data
           ]);
    }

    public function store(Request $request)
    {
        $data =  Contact::create($request->except( '_token'));
        $data->save();

        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['title'];
            Contacttranslation::where('contact_id',$data->id)->where('locale',$key)->update([
                'slug'=> str::slug($slug)
            ]);
        }
        toastr()->success(__('words.success') );
        return redirect('dashboard/contact');
    }

    public function edit(Contact $contact,$id)
    {
       $data =  Contact::find($id);
       $datalist =  Contact::all();
        return view('admin.contact.edit',[
        'data'  => $data ,
        'datalist'  => $datalist
       ]);
    }

    public function show(Contact $contact,$id)
    {
      $data =  Contact::find($id);
      return view('admin.contact.show',[
      'data'  => $data
     ]);

    }


    public function update(Request $request, Contact $contact , $id)
    {
        $data = Contact::find($id);
        $data->update($request->except( '_token'));
        foreach (config('app.languages') as $key => $lang)
        {
            $slug=$request->$key['title'];
            Contacttranslation::where('contact_id',$data->id)->where('locale',$key)->update([
                'slug'=> str::slug($slug)
            ]);
        }
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/contact');
    }

    public function destroy(Contact $contact , $id)
    {
        $data = Contact::find($id);
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/contact');
    }



}
