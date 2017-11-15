<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rooms;
class RoomController extends Controller
{
    public function index(Request $request)
    {
       //return redirect()->back()->withInput();
    
       return view('roomlist');
        // return redirect()->back()->with('alert', 'Deleted!');
        
}
}
