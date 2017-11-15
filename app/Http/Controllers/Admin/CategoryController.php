<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
class CategoryController extends Controller
{
   public function index()
   {
    $data['categories'] = Categories::get()->toArray();
    
           return view('Admin/showCategories', $data);
}
    public function AddCategory(Request $request)
    {
        if($request->isMethod('get') ) {
            return view('admin/addCategory');
        }
        else
        {
        if($request->hasFile('img') && $request->file('img')->isValid()) {
            $imageName = $request->file('img')->getClientOriginalName();
            $newImageName = time() .$imageName;
            $request->file('img')->move(public_path('/img/rooms-img/'), $newImageName);
        }

        $data = $request->all();
        $data['img'] = $newImageName;

        Categories::create($data);

        return redirect()->route('admin/showcategories');
    }
    }
    public function EditCategory(Request $request)
    {
        $id = $request->get('id');
        $data['categoryData'] = Categories::where('id', $id)->get()->toArray();

        if($request->isMethod('get') && !empty($id)) {
            return view('admin/editCategory', $data);
        }

        $oldImgName = $data['categoryData'][0]['img'];

        if($request->isMethod('post')) {
            $data = $request->all();

            if(isset($data['_token'])) {
                unset($data['_token']);
            }

            if($request->hasFile('img') && $request->file('img')->isValid()) {
                unlink(public_path('/img/rooms-img/') . $oldImgName);
                $imageName = $request->file('img')->getClientOriginalName();
                $newImageName = time() .$imageName;
                $request->file('img')->move(public_path('/img/rooms-img/'), $newImageName);
                $data['img'] = $newImageName;
            }

            Categories::where('id', $id)->update($data);

            return redirect()->route('admin/showcategories');
        }

   }
    }


