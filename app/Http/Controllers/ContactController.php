<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUsJob;
use App\Models\Message as ModelsMessage;
use App\Mail\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'messageContent' => 'required|min:3'
        ]);

        //dd('ok');
        //Mail::to('emmaongia46@gmail.com')->send(new Enquiry($data));


        ModelsMessage::create($data);

        //dd('mail sent!'); 
        $job = (new ContactUsJob($data));
        dispatch($job);
        return redirect()->back()->with('success','message sent successfully!');
    }
}
