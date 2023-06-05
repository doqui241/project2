<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dichvu;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Validator;

class DichvuController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $dichvu = Dichvu::latest()->paginate(5);

        return view('dichvu.dichvu', compact('dichvu'))->with('i',(request()->input('page',1 )-1)*5);
    }

    public function create() 
    {
        return view('dichvu.adddv');
    }

    public function store(Request $request) 
    {
       
        Dichvu::create($request->all());
        return redirect()->route('dichvu.index');

    }

    public function show() 
    {
        return view('dichvu.chitietdv');
    }


    public function edit(User $users) 
    {
        return view('dichvu.editdv', compact('dichvu'));
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