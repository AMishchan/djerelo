<?php

namespace Djerelo\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Djerelo\Http\Controllers\Controller;
use Djerelo\Bookings;

class OrderController extends Controller
{
    public function index()
    {

        //$data['rooms'] = Room::get()->toArray();
        $data['orders'] = Bookings::select('*')->get()->toArray();

        for($i = 0; $i =count($data['orders'])-1; $i++) {
            if ($data[$i]['order_status'] == 0)
            {
                $data[$i]['button_class'] = 'unchecked';
                $data[$i]['button_text'] = 'В очікуванні';
            } else {
                $data[$i]['button_class'] = 'checked';
                $data[$i]['button_text'] = 'Оброблено';

            }
        }
dd($data);
        return view('admin/showOrders', $data);
    }


    /**
     * @param array $middleware
     */
    public function orderCheck()
    {

    }
}
