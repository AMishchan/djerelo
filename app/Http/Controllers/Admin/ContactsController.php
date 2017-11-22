<?php

namespace Djerelo\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Djerelo\Http\Controllers\Controller;
use Djerelo\Contacts;
class ContactsController extends Controller
{
    public function index ()
    {
        $data['contacts'] = Contacts::get()->toArray();
 
        return view('admin/showContacts', $data);
    }
    public function add(Request $request)
    {
        if($request->isMethod('get') ) {
            return view('admin/addContact');
        }
        else
        {
            $data = $request->all();
            Contacts::create($data);
            
           // return redirect()->action('admin/ContactsController@index');
            
             return redirect()->route('contacts.index');
        }
    }
    public function edit(Request $request)
    {
        $id = $request->get('id');
        $data['contactData'] = Contacts::where('id', $id)->get()->toArray();

        if($request->isMethod('get') && !empty($id)) {
            return view('admin/editcontacts', $data);
        }

      
        if($request->isMethod('post')) {
           
            $data = $request->all();

            if(isset($data['_token'])) {
                unset($data['_token']);
            }

      
            Contacts::where('id', $id)->update($data);
            
            return redirect()->route('contacts.index');
        }

    }
}
