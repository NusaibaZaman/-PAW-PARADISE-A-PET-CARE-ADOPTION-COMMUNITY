<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;
use App\Models\adopt;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Vet;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        $data=adopt:: all();
        $message = "SORRY, NO ANIMALS CURRENTLY AVAILABLE! :(";

        return view('admin.adoption', compact('data','message'));
    }
    public function add_adoption(Request $request)
    {
        $user =Auth::user();
        $id=$user->id;
        $adoption= new adopt;
        $adoption-> title=$request-> title;
        $adoption-> type=$request-> type;
        $adoption-> breed=$request->breed;
        $adoption-> color=$request->color;
        $adoption-> age=$request->age;
        $adoption-> gender=$request->gender;
        $adoption-> personality=$request->personality;
        $adoption-> number='01111111110';
        $adoption-> user='Admin';
        $adoption-> user_id=$id ;
        $adoption-> description=$request->description;
        $image=$request-> image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('adoptpic',$imagename);
        $adoption-> image=$imagename;

        $adoption->save();
        return redirect()-> back()->with('message','Adoption post Added');
    }

    public function delete_adoption($id){
        $data=adopt::find($id);
        $data->delete();
        return redirect()->back()->with('message','Adoption post removed');

    }

    public function post_page()
    {
        return view('admin.post_page');
    }
    public function add_post(Request $request)

    {
        $user = Auth()->user();
        $user_ID = $user -> id;
        $name = $user -> name;
        $user_type = $user -> usertype;

        $post = new Post;
        $post-> title = $request-> title;
        $post -> description = $request -> description;
        $post -> Post_status = 'active';
        $post -> user_ID = $user_ID;
        $post -> name = $name;
        $post -> user_type = $user_type;

        $image = $request-> image;


        #public
        if($image)
        {

        $imagename =time().'.'.$image -> getClientOriginalExtension();
        $request -> image ->move('postimage',$imagename);
        $post -> image = $imagename;


        }



        $post -> save();

        return redirect()->back()->with('message','Post Added Successfully');
    }
    public function show_post()
    {
        $post = Post::all();
        return view('admin.show_post',compact('post'));
    }

    public function delete_post($id)

    {
        $post= Post::find($id);
        $post -> delete();

        return redirect()->back();

    }

    public function add_vet()
    {
        return view('admin.add_vet');
    }

    public function add_vet_info(Request $request)
    {
        $user=Auth()->user();
        $user_ID=$user->id;
        $user_type=$user->user_type;
        $post=new Vet;
        $post-> name= $request->name;
        $post-> contact= $request->contact;
        $post-> locality= $request->locality;
        $post-> address= $request->address;
        $post-> Post_status= 'active';
        $post-> user_ID=$user_ID;
        $post-> user_type=$user_type;

        $image = $request-> image;

        if($image)
        {
        $imagename =time().'.'.$image -> getClientOriginalExtension();
        $request -> image ->move('vet_image',$imagename);
        $post-> image = $imagename;
        }

        $post->save();

        return redirect()-> back()->with('message','Vet Information Added');

    }

    public function view_vet()
    {
        $post=Vet::all();
        return view('admin.view_vet',compact('post'));
    }

    public function delete_vet($id)

    {
        $post= Vet::find($id);
        $post -> delete();

        return redirect()->back();

    }

        public function admin_search_adopt(Request $request)

    {
        $message="";

        $id=$request->id;
        if($id == "") {$id=0;}
        $type=$request->type;
        if($type == "Type of animal") {$type='nothing';}
        $breed=$request->breed;
        if($breed == "") {$breed='nothing';}
        $age=$request->age;
        if($age == "") {$age=0;}
        $gender=$request->gender;
        if($gender == "Select gender") {$gender='nothing';}


        if ($request->exact != "")
        {
           $data=DB::table('adopts');
            if($id != 0)
            {
                $data->where('id','=',$id);
                $message = $id;
            }

            if($type != 'nothing')
            {
                $data->where('type','=',$type);
            }

            if($breed != 'nothing')
            {
                $data->where('breed','=',$breed);
            }

            if($age != 0)
            {
                $data->where('age','<=',$age);
            }

            if($gender != 'nothing')
            {
                $data->where('gender','=',$gender);
                $message = $gender;
            }


           $data= $data->get();
        }

        else if ($request->all != "")
        {
            $data=adopt::where('id','=',$id)->orWhere(
            'type','=',$type)->orWhere(
            'breed','=',$breed)->orWhere(
            'age','<=',$age)->orWhere(
            'gender','=',$gender)->get();
        }

        else
        {
            $data=adopt:: all();
            $message = "NO ANIMALS CURRENTLY AVAILABLE! :(";

            return view('admin.adoption', compact('data','message'));
        }

        if (count($data) == 0)
        {
            $message = "NO MATCHES FOUND";
        }


        return view('admin.adoption', compact('data','message'));
    }

    // failures
    public function admin_search_breed($type)

    {
        $breed=DB::table('adopts')->where('type','=',$type)->distinct()->get();

        return response()->json($breed);
    }



}
