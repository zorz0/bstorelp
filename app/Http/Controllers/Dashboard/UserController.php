<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
     public function index()
    {
        $users=User::paginate(5);
        return view('admin.Users.allUsers',['users'=>$users]);
    }

     public function create()
    {

        return view('admin.Users.addUser');
    }
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request['password']),

        ]);
        return redirect(route('users.index'));
    }
    public function edit(User $id)
    {
        return view('admin.Users.editUser',['user'=>$id]);
    }
    public function update(Request $request,User $id)
    {
        User::where('id',$id->id)->update(

[
    'name'=>$request->name,
    'email'=>$request->email,

]
        );
        return redirect(route('users.index'));
    }

    public function destroy(User $id){

        User::where('id',$id->id)->delete();

        return back();

    }
}
