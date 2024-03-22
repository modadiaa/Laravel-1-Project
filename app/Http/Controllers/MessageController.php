<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request){
        $mes = new Message;
        $mes->name =  $request->input('name');
        $mes->email =  $request->input('email');
        $mes->subject =  $request->input('subject');
        $mes->message =  $request->input('message');
        $mes->save();
        toastr()->success(__('words.message') );
        return redirect()->back();
      }
}
