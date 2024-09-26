<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function list(Request $request){
        $user = User::all();

        return view('list',compact('user'));
    }

    public function edit(Request $request,$id){

        $user = User::findOrFail($id);

        return view('update',compact('user'));
    }


    public function editUser(Request $request,$id){

        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);

        $user->update($request->all());

        return redirect()->route('user.list')->with('success');
    }

    public function add(Request $request){

        return view('add');
        
    }

    public function addUser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|string',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required'
        ]);

        User::create($request->all());

        return redirect()->route('user.list')->with('success');
    }


    public function delete($id){

        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('user.list')->with('success');
    }


}
