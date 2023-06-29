<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\Diary;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Validator;
use Carbon\Carbon;
class RoleController extends Controller
{

    public function index() 
    {

        
        $role = Role::withCount('users')->get();
        // dd($role);
        // $role = Role::paginate(8);
        if($key = request()->key){
            $role = Role::where('name_role','like', '%'.$key.'%');
        }
        return view('role.quanlyvaitro', compact('role'));
    }

    public function create() 
    {
        return view('role.addrole');
    }

    public function store(Request $request) 
    {
       
        $role = Role::create($request->all());
        $day = Carbon::now('Asia/Ho_Chi_Minh');
        Diary::create([
            'username' =>Auth::User()->username,
            'id_adress' => '123.22.33.77',
            'created_at' => $day,
            'action' => 'Thêm Role ID:'.$role->id,
        ]);
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
        $day = Carbon::now('Asia/Ho_Chi_Minh');
        Diary::create([
            'username' =>Auth::User()->username,
            'id_adress' => '123.22.33.78',
            'created_at' => $day,
            'action' => 'Update Role ID:'.$role->id,
        ]);
        return redirect()->route('role.index');
    }


    
    // public function destroy(User $users) 
    // {
    //     $users ->delete();

    //     return redirect()->route('users.index')
    //         ->withSuccess(__('User deleted successfully.'));
    // }
}
