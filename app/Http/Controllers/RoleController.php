<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Validator;
class RoleController extends Controller
{

    public function index() 
    {
        $role = Role::paginate(8);
        if($key = request()->key){
            $role = Role::where('name_role','like', '%'.$key.'%')->paginate(8);
        }
        return view('role.quanlyvaitro', compact('role'));
    }

    public function create() 
    {
        return view('role.addrole');
    }

    public function store(Request $request) 
    {
       
        Role::create($request->all());
        return redirect()->route('role.index');

    }

    // public function show(Ro $dichvu) 
    // {
    //     return view('dichvu.chitietdv', compact('dichvu'));
        
    // }


    public function edit(Role $role) 
    {
        return view('role.editrole', compact('role'));
        
    }

    public function update(Role $role, Request $request) 
    {
        $role->update($request->all());

        return redirect()->route('role.index');
    }


    
    // public function destroy(User $users) 
    // {
    //     $users ->delete();

    //     return redirect()->route('users.index')
    //         ->withSuccess(__('User deleted successfully.'));
    // }
}
