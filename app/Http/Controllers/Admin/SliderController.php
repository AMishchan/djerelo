<?php

namespace Djerelo\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Djerelo\Http\Controllers\Controller;
use Djerelo\Slider;
use Illuminate\Support\Facades\DB;


class SliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = $request->get('id');
            $data['sliderImages'] = DB::table('sliderImages')->select('*')
                ->get()
                ->toArray();

            return view('admin/sliderImages', $data);
        }
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = $request->file('image')->getClientOriginalName();
            $newImageName = time() . $imageName;
            $request->file('image')->move(public_path('uploads'), $newImageName);
        }

        $data = $request->all();
        $data['image'] = $newImageName;
        if (isset($data['_token'])) {
            unset($data['_token']);
        }

       

        return redirect()->route('rooms');

    }

    public function delete($image)
    {
        $image_tmp = \Djerelo\Slider::where('id', $image)->first();
        $image_tmp->delete();
        return redirect()->back();

    }
}
