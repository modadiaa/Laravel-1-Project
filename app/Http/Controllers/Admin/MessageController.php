<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Pagination\Paginator ;


class MessageController extends Controller
{
    // public function index()
    // {
    //     $data =  Message::all();
    //     return view('admin.message.index',[
    //         'data'  => $data
    //        ]);
    // }

    public function index(Request $request )
    {
        $data = Message::when($request->search, function ($q) use ($request) {
            $q->where('name','LIKE','%'.$request->search .'%')
              ->orWhere('email','LIKE','%'.$request->search .'%');
               })->paginate(20);

               return view('admin.message.index',[
                'data'  => $data
               ]);
    }



    public function show(Message $message,$id)
    {
      //  echo "show page id: " , $id ;
      $data =  Message::find($id);
      return view('admin.message.show',[
      'data'  => $data
     ]);

    }


    public function destroy(Message $message , $id)
    {
        $data = Message::find($id);
        $data->delete();
        toastr()->success(__('words.delete-success') );
        return redirect('dashboard/messages');
    }

    public function deleteAll(Message $message ,Request $request)
    {
        $ids = $request->ids;
        Message::whereIn('id', $ids)->delete();
        toastr()->success(__('words.delete-row-success') );
    }


}
