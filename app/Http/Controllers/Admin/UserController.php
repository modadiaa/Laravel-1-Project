<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Pagination\Paginator ;



class UserController extends Controller
{
    public function index(Request $request )
    {
        $data = User::when($request->search, function ($q) use ($request) {
            $q->where('name','LIKE','%'.$request->search .'%')
              ->orWhere('email','LIKE','%'.$request->search .'%')
              ->orWhere('status','LIKE','%'.$request->search .'%');
               })->paginate(5);

            return view('admin.user.index',[
            'data'  => $data
            ]);

        // $data =  User::all();
        // return view('admin.user.index',[
        //     'data'  => $data
        //    ]);
    }


    // public function index(Request $request )
    // {
    //     $data =  Slider::whereHas('SliderTranslation', function ($q) use ($request) {
    //                  $q->where('title','LIKE','%'.$request->search .'%')
    //                    ->orWhere('content','LIKE','%'.$request->search .'%')
    //                    ->orWhere('link','LIKE','%'.$request->search .'%');
    //                     })->paginate(10);

    //     return view('admin.slider.index',[
    //     'data'  => $data
    //    ]);
    // }

    public function create()
    {
        $data =  User::all();
        return view('admin.user.create',[
            'data'  => $data
           ]);

    }

    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->password =  bcrypt($request->password) ;
        $data->status = $request->status ;

        // $data =  User::create($request->except('image', '_token'));
        toastr()->success(__('words.success') );

        $data->save();

        return redirect('dashboard/user');
    }


    public function edit(User $user , $id)
    {
        $data =  User::find($id);
        $datalist =  User::all();
        return view('admin.user.edit',[
            'data'  => $data ,
            'datalist'  => $datalist
           ]);
    }

    public function show(User $user,$id)
    {
      $data =  User::find($id);
      return view('admin.user.show',[
      'data'  => $data
     ]);

    }

    public function update(Request $request, User $user , $id)
    {
        $data = User::find($id);
        $data->name = $request->name ;
        $data->email = $request->email ;
        $data->password = bcrypt($request->password) ;
        $data->status = $request->status ;
        $data->save();
        toastr()->success(__('words.update-success') );
        return redirect('dashboard/user');
    }


    public function destroy(User $user , $id)
    {
        $data = User::find($id);
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/user');
    }

    public function deleteAll(User $user ,Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
    }

}
