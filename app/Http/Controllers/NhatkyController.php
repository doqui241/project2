<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Thietbi;
use App\Models\Diary;
use Illuminate\Http\Request;
use App\Http\Requests\StoreThietbiRequest;
use App\Http\Requests\UpdateThietbiRequest;

class NhatkyController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $diary = Diary::paginate(8);

        return view('user.nhatky', compact('diary'));
    }

    public function create() 
    {
        return view('register');
    }

    public function store(Request $request) 
    {
       
        Thietbi::create($request->all());
        return redirect()->route('Thietbi.index');

    }

    public function show(Thietbi $thietbi) 
    {
        return view('thietbi.chitiettb', compact('thietbi'));
        // return view('thietbi.chitiettb');
    }


    public function edit(Thietbi $thietbi) 
    {
        return view('thietbi.edittb', compact('thietbi'));
    }

    public function update(Thietbi $thietbi, Request $request) 
    {
        $thietbi->update($request->all());

        return redirect()->route('thietbi.index')
            ->withSuccess(__('Thietbi updated successfully.'));
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