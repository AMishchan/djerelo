<?php

namespace Джерело\Http\Controllers;

use Illuminate\Http\Request;
use Джерело\Categories;
use Джерело\Bookings;
class CatalogController extends Controller
{
   public function index()
   {
    $data['categories'] = Categories::get()->toArray();
    
    return view('catalog',$data);
}
    public function PreOrder(Request $request)
    {
        $data = $request->all();
        Bookings::create($data);
           return redirect()->back()->with('alert', 'Дякуемо за звернення! Ми Перетелефонуемо вам найближчим часом.');
      
    }
}
