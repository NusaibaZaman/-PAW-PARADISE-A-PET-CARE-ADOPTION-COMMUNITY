<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

class AdminController extends Controller
{
    public function view_category(){
        $data=catagory:: all();
        return view('admin.category', compact('data'));
    }

    public function add_catagory(Request $request){
        $data=new catagory;
        $data->Catagory_name=$request->catagory;
        $data->save();
        return redirect()->back()->with('message','Product Added');
    }

    public function delete_catagory($id){
        $data=catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Removed');;

    }
    public function view_adoption(){
        return view('admin.adoption');
    }
}
