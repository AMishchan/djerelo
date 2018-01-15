<?php

namespace Djerelo\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Djerelo\Http\Controllers\Controller;
use Djerelo\Bookings;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {

        //$data['rooms'] = Room::get()->toArray();
        $data['orders'] = Bookings::select('*')->where('visible', '=', 1)->orderBy('order_date', 'DESC')->get()->toArray();
//dd($data['orders']);
        for ($i = 0; $i < count($data['orders']); ++$i) {

            if ($data['orders'][$i]['order_status'] == 0) {
                $data['orders'][$i]['button_class'] = 'unchecked';
                $data['orders'][$i]['button_text'] = 'В очікуванні';
            } else {
                $data['orders'][$i]['button_class'] = 'checked';
                $data['orders'][$i]['button_text'] = 'Оброблено';

            }
        }
//dump($data);
        return view('admin/showOrders', $data);
    }


    public function orderCheck(Request $request)
    {
        $id = $request->get('id');

        $checkStatus = Bookings::where('id', $id)->get()->toArray();
//dump($checkStatus);
        if ($checkStatus[0]['order_status'] == 1) {
            $insertStatus = 0;
        } else {
            $insertStatus = 1;
        }
        DB::table('bookings')->where('id', '=', $id)->update(['order_status' => $insertStatus]);
        return redirect('admin/showorders');

    }

    public function delete(Request $request)
    {
        $id = $request->get('id');
        DB::table('bookings')->where('id', '=' , $id)->update(['visible' => 0]);
        return redirect()->back();

    }
}
