<?php

namespace Djerelo\Http\Controllers\Admin;

use Djerelo\Http\Controllers\Controller;
use Djerelo\Room;
use Djerelo\Categories;
use Illuminate\Http\Request;
use Djerelo\RoomImages;
class RoomController extends Controller
{
    public function index ()
    {
        //$data['rooms'] = Room::get()->toArray();
        $data['rooms'] = Room::join('categories', 'rooms.category_id', '=', 'categories.id')->get()->toArray();
        return view('admin/showRoom', $data);
    }
    public function addRoom(Request $request)
    {
        if($request->isMethod('get') ) {
            $data['categories'] = Categories::get()->toArray();

            return view('admin/addRoom', $data);
        }
        if($request->hasFile('main_img') && $request->file('main_img')->isValid()) {
            $imageName = $request->file('main_img')->getClientOriginalName();
            $newImageName = time() .$imageName;
            $request->file('main_img')->move(public_path('uploads'), $newImageName);
        }

        $data = $request->all();
        $data['main_img'] = $newImageName;

        Room::create($data);

        return redirect()->route('rooms');

    }
    public function editRoom(Request $request)
    {
        $id = $request->get('id');
        $data['roomData'] = Room::where('rooms.ID', $id)
            ->join('categories', 'rooms.category_id', '=', 'categories.id')
            ->get()
            ->toArray();
        $data['categories'] = Categories::get()->toArray();

        if($request->isMethod('get') && !empty($id)) {
            return view('admin/editRoom', $data);
        }

        //$oldImgName = $data['roomData'][0]['main_img'];

        if($request->isMethod('post')) {
            $data = $request->all();

            if(isset($data['_token'])) {
                unset($data['_token']);
            }

            if($request->hasFile('main_img') && $request->file('main_img')->isValid()) {
                $imageName = $request->file('main_img')->getClientOriginalName();
                $newImageName = time() .$imageName;
                $request->file('main_img')->move(public_path('uploads'), $newImageName);
                $data['main_img'] = $newImageName;

            }

            Room::where('id', $id)->update($data);

            return redirect()->route('rooms');
        }

    }

    

    public function images(Request $request)
    {
        if($request->isMethod('get') ) {
            $id = $request->get('id');
            $data['roomImages'] = RoomImages::where('room_id', $id)

                ->get()
                ->toArray();

            return view('admin/RoomImages',$data);
        }
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = $request->file('image')->getClientOriginalName();
            $newImageName = time() .$imageName;
            $request->file('image')->move(public_path('uploads'), $newImageName);
        }

        $data = $request->all();
        $data['image'] = $newImageName;
        if(isset($data['_token'])) {
            unset($data['_token']);
        }

        RoomImages::create($data);

        return redirect()->route('rooms');

    }

    public function delete($image)
    {
        $image_tmp = \Djerelo\RoomImages::where('id', $image)->first();
        $image_tmp->delete();
        return redirect()->back();

    }
}
