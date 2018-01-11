<?php

namespace Djerelo\Http\Controllers;

use Illuminate\Http\Request;
use Djerelo\Feetback;

class FeettbackController extends Controller
{
    public function index()
    {
        $data['feedbacks'] = Feetback::get()->toArray();

        return view('feetback', $data);
    }

    public function addFeedback(Request $request)
    {

        $data = $request->all();
        Feetback::create($data);


        return redirect()->route('feetback');
    }
}
