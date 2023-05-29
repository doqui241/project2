<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Validator;

class CapsoController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $capso = User::latest()->paginate(5);

        return view('capso.capso', compact('capso'))->with('i',(request()->input('page',1 )-1)*5);
    }

    public function create() 
    {
        return view('capso.addcs');
    }

    public function store(Request $request) 
    {
       
        Sinhvien::create($request->all());
        return redirect()->route('sinhvien.index');

    }

    public function show() 
    {
        return view('thietbi.chitiettb');
    }


    public function edit(User $users) 
    {
        return view('thietbi.edittb', compact('thỉebi'));
    }

    public function update(User $users, UpdateUserRequest $request) 
    {
        $users->update($request->all());

        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
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