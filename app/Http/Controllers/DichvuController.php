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
        $dichvu = Dichvu::all();

        return view('dichvu.dichvu', compact('dichvu'));
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

    public function show(Dichvu $dichvu) 
    {
        return view('dichvu.chitietdv', compact('dichvu'));
        
    }


    public function edit(Dichvu $dichvu) 
    {
        return view('dichvu.editdv', compact('dichvu'));
    }

    public function update(Dichvu $dichvu, Request $request) 
    {
        $dichvu->update($request->all());

        return redirect()->route('dichvu.index');
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

        return redirect()->route('users.index');
    }
}