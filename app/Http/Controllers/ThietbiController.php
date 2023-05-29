<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Thietbi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class ThietbiController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $thietbi = User::latest()->paginate(5);

        return view('thietbi.thietbi', compact('thietbi'))->with('i',(request()->input('page',1 )-1)*5);
    }

    public function create() 
    {
        return view('thietbi.addtb');
    }

    public function store(Request $request) 
    {
       
        Sinhvien::create($request->all());
        return redirect()->route('thietbi.index');

    }

    public function show() 
    {
        return view('thietbi.chitiettb');
    }


    public function edit(Thietbi $thietbi) 
    {
        return view('thietbi.edittb');
    }

    public function update(User $users, UpdateUserRequest $request) 
    {
        // $users->update($request->all());

        // return redirect()->route('users.index')
        //     ->withSuccess(__('User updated successfully.'));
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