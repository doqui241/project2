<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dichvu;
use App\Models\Capso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Validator;
use Barryvdh\DomPDF\Facade\Pdf;

class BaocaoController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {

        $baocao = Capso::paginate(8);

        return view('baocao.baocao', compact('baocao'));

    }
    public function export() 
    {
        // $baocao = Capso::all();
        $baocao = Capso::get();
        $pdf = Pdf::loadView('baocao.export', ['baocao' => $baocao]);
        // dd($pdf);
        return $pdf->download('report.pdf');

    }


    public function create() 
    {
        $service = Dichvu::all();
        return view('capso.addcs',compact('service'));
    }

    public function store(Request $request) 
    {
       
        Capso::create($request->all());
        return ;
        // return redirect()->route('sinhvien.index');

    }

    public function show($id) 
    {
        $capso = Capso::find($id);
        return view('capso.chitietcs', compact('capso'));
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