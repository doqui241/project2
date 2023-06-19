<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreThietbiRequest;
use App\Http\Requests\UpdateThietbiRequest;

class QuanlyuserController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {   
        $role = User::with('roles')->get();
        // $user = User::all();
        return view('user.quanlyuser', compact('role'));
    }

    public function create() 
    {   
        $role = Role::all();
        return view('user.register',compact('role'));
    }

    public function store(Request $request) 
    {     
        $role = Role::all();
        User::create($request->all());
        return redirect()->route('quanlyuser.index');

    }

    // public function show(Thietbi $thietbi) 
    // {
    //     return view('thietbi.chitiettb', compact('thietbi'));
    //     // return view('thietbi.chitiettb');
    // }


    public function edit($id) 
    {
        $role = Role::all();
        $user = User::find($id);
        return view('user.edituser', compact('user'),compact('role'));
    }

    public function update($id,User $user, Request $request) 
    {
        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('quanlyuser.index');
         
    }

    /**
     * Delete user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users) 
    {
        $users ->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
}