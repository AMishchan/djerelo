<?php

namespace Джерело\Http\Controllers;

use Illuminate\Http\Request;
use Джерело\Room;
use Джерело\Categories;
use Джерело\RoomImages;
class RoomController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->get('id');
        $data['rooms'] = Room::where('rooms.category_id', $id)
        
        ->get()
        ->toArray();
       
        $data['categories'] = Categories::where('id', $id)
       
        ->get()
        ->toArray();
       
       return view('roomlist',$data);
        // return redirect()->back()->with('alert', 'Deleted!');
        
}
    public function roomDetails(Request $request)
    {
        $id = $request->get('id');
        $data['rooms'] = Room::where('rooms.ID', $id)
        
        ->get()
        ->toArray();
        
        $data['images'] = RoomImages::where('room_images.room_id', $id)
        
        ->get()
        ->toArray();
    return view('roomdetails',$data);
    }
}
