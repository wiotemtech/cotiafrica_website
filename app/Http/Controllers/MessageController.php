<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function index3(){
    $messages = Message::all();
    //dd($messages);
    return view('frontend.index2',compact('messages'));
  }  
    
    //
}
