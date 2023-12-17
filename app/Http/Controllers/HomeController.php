<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\adopt;
use App\Models\Post;
use App\Models\Vet;
use App\Models\Catagory;
use App\Models\VPet;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller
{
    public function index(){
        return view('home.userpage');
    }

    public function logout(){
        return view('home.home');
    }
    public function register(){
        return view('auth.register');
    }

    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            return view('home.userpage');
        }
    }

    public function adoption(){
        $data=adopt:: all();
        $message = "NO ANIMALS CURRENTLY AVAILABLE! :(";

        return view('home.adoption', compact('data','message'));
    }

    public function description($id){
        $data=adopt::find($id);
        return view('home.description', compact('data'));
    }
    public function blog()
    {
        $post = Post::all();
        return view('home.blog',compact('post'));
    }
    public function vethome()
    {
        $post = Vet::all();
        return view('home.vethome',compact('post'));
    }
    public function post_details($id)
    {
        $post = Post::find($id);

        return view('home.post_details',compact('post'));
    }

    //new
    public function adoptpost(){
        $user =Auth::user();
        $id=$user->id;
        $data=adopt:: where('user_id','=',$id)->get();
        return view('home.adoptpost', compact('data'));
    }

    public function add_adoption2(Request $request)
    {
        $user =Auth::user();
        $id=$user->id;
        $name=$user->name;
        $number=$user->phone;
        $adoption= new adopt;
        $adoption-> title=$request-> title;
        $adoption-> type=$request-> type;
        $adoption-> breed=$request->breed;
        $adoption-> color=$request->color;
        $adoption-> age=$request->age;
        $adoption-> gender=$request->gender;
        $adoption-> personality=$request->personality;
        $adoption-> number=$number;
        $adoption-> user=$name ;
        $adoption-> user_id=$id ;
        $adoption-> description=$request->description;
        $image=$request-> image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('adoptpic',$imagename);
        $adoption-> image=$imagename;

        $adoption->save();
        return redirect()-> back()->with('message','Adoption post Added');
    }



    public function home_search_adopt(Request $request)
    {
        $message="";

        $type=$request->type;
        if($type == "") {$type='nothing';}
        $breed=$request->breed;
        if($breed == "") {$breed='nothing';}
        $age=$request->age;
        if($age == "") {$age=0;}
        $gender=$request->gender;
        if($gender == "") {$gender='nothing';}


        if ($request->exact != "")
        {
           $data=DB::table('adopts');

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
            }


           $data= $data->get();
        }

        else if ($request->all != "")
        {
            $data=adopt::where('type','=',$type)->orWhere(
            'breed','=',$breed)->orWhere(
            'age','<=',$age)->orWhere(
            'gender','=',$gender)->get();
        }

        else
        {
            $data=adopt:: all();
            $message = "NO ANIMALS CURRENTLY AVAILABLE! :(";

            return view('home.adoption', compact('data','message'));
        }

        if (count($data) == 0)
        {
            $message = "NO MATCHES FOUND";
        }


        return view('home.adoption', compact('data','message'));
    }

    // failures
    public function admin_search_breed($type)

    {
        $breed=DB::table('adopts')->where('type','=',$type)->distinct()->get();

        return response()->json($breed);
    }


    public function show_vpet()
    {
        $user=Auth::user()->id;
        $message= "";

        $data=vpet::where('user','=',$user)->distinct()->get();

        return view('home.vpet', compact('data','message'));
    }

    public function home_search_vpet()
    {
        $data=adopt:: all();
        $message = "NO ANIMALS CURRENTLY AVAILABLE! :(";

        return view('home.vpet', compact('data','message'));
    }

    public function create_vpet()
    {
        $message= 'create';
        $data="";
        return view('home.vpet', compact('data','message'));
    }

    public function add_vpet(Request $request)
    {
        $user=Auth::user()->id;
        $message="";

        $type=$request->type;
        if($type == "") {$type='nothing';}
        $breed=$request->breed;
        if($breed == "") {$breed='nothing';}
        $gender=$request->gender;
        if($gender == "") {$gender='nothing';}
        $name=$request->name;
        if($name == "") {$namer='nothing';}

        $imag=DB::table('preset_vpets');
        if($type != 'nothing')
        {
            $imag->where('type','=',$type);
        }
        if($breed != 'nothing')
        {
            $imag->where('breed','=',$breed);
        }
        $imag= $imag->get();


        $vpet= new vpet;
        $vpet-> title=$name;
        $vpet-> type=$type;
        $vpet-> breed=$breed;
        $vpet-> gender=$gender;
        $vpet-> user=$user;
        $vpet-> image=$imag[0]->image;

        $vpet->save();
        return redirect()-> back()->with('message','VPet Created');
    }

    public function del_vpet(Request $request){
        $userid=Auth::user()->id;
        $message="";
        $data=vpet::where('user','=',$userid);
        $data->delete();
        return redirect()->back()->with('message','Your VPet is looking for a new home now :(');

    }
}
