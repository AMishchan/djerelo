<?php

namespace Джерело\Http\Controllers;

use Illuminate\Http\Request;
use Джерело\Contacts;
//use Illuminate\Mail\Mailer;
use Mail;
class FrontContactsController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contacts::get()->toArray();
        
        return view ('contacts',$data);
    }
    public function sendMessage(Request $request)
    {
        $data = $request->all();
        Mail::raw('Новое сообщение от:'.'<br>'.' '.$data['gender'].$data['firstname'].'<br>'.$data['email'].'<br>'
        .$data['phone'].'<br>'.$data['message'], function($message)
        {
            $message->from('dzheradmin@ukrnafta.com', 'Новое сообщение');
        
            $message->to('dzheradmin@ukrnafta.com');
        });    
     return redirect()->route('contacts');
}
}
