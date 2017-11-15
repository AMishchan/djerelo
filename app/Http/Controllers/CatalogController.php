<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Bookings;
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
