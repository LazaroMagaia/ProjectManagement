<?php

namespace App\Http\Controllers;

use App\Models\friends;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class FriendsController extends Controller
{
    private $friends;
    public function __construct(friends $friends)
    {
        $this->friends = $friends;
    }
    public function index()
    {
        $authuser = User::find(Auth::user()->id);
        $userAuth = $authuser->id;
        $friends = DB::table('friends')->where("IdTo",$userAuth)->get();
        $usersFriends = DB::table('users')->where("id",2)->get();
        return view('admin.pages.friends.index',[
            'friends'=>$usersFriends 
        ]);
    }
    public function news()
    {
        $user = User::all();
        $authuser = User::find(Auth::user()->id);
        $userAuth = $authuser->id;
        return view('admin.pages.friends.newsfriend',[
        "users" => $user,
        "userAuth" =>$userAuth,
    ]);
    }
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $authuser = User::find(Auth::user()->id);
        $userAuth = $authuser->id;
        if(!User::find($id))
        {
            return redirect()->back();
        }
        if(!$this->friends->where("IdFrom",$userAuth,"IdTo",$id))
        {
            return  redirect()->back();
        }
        else
        {
            $data['IdFrom'] = $userAuth;
            $data['IdTo'] = $id;
            $data['status'] = true;
            $data['remove'] = false;
            $this->friends->create($data);
            return redirect()->route("friends.home");
        }

        
    }
}
