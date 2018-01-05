<?php

namespace Djerelo\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Djerelo\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function images(Request $request)
    {
        if ($request->isMethod('get')) {
            $id = $request->get('id');
            $data['sliderImages'] = Slider::where('id', $id)
                ->get()
                ->toArray();

            return view('admin/slider', $data);
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

        Slider::create($data);

        return redirect()->route('rooms');

    }

    public function delete($image)
    {
        $image_tmp = \Djerelo\Slider::where('id', $image)->first();
        $image_tmp->delete();
        return redirect()->back();

    }
}
