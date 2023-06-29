<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dichvu;
use App\Models\Rule;
use App\Models\Diary;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Validator;
use Carbon\Carbon;
class DichvuController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
        // dd(request()->key);
        
        $dichvu = Dichvu::paginate(8);
        if($key = request()->key){
            $dichvu = Dichvu::where('name_service','like', '%'.$key.'%')->paginate(8);
        }
        return view('dichvu.dichvu', compact('dichvu'));
    }

    public function create() 
    {
        $service = Dichvu::all();
        return view('dichvu.adddv',compact('service'));
    }

    public function store(Request $request) 
    {   
       $request-> validate([
        'ma_service' => 'required',
        'name_service' => 'required',
        'mota' => 'required',

       ]);

       $service = Dichvu::create($request->only('ma_service','name_service','mota'));

       $rule = new Rule;
       
       $rule->id_service = $service->id;

       $rule->fill($request->except('ma_service','name_service','mota'));
       $rule->save();
       $day = Carbon::now('Asia/Ho_Chi_Minh');
       Diary::create([
        'username' =>Auth::User()->username,
        'id_adress' => '123.22.33.55',
        'created_at' => $day,
        'action' => 'Thêm Dịch vụ ID:'.$service->id,
        ]);
        return redirect()->route('dichvu.index');

    }

    public function show($id) 
    {
       
        $dichvu = Dichvu::with('cap_so')->find($id);
        $rule = Rule::all();
        // $capso = Dichvu::;
        // dd($dichvu->cap_so->id);
        return view('dichvu.chitietdv', compact('dichvu'));
        
    }


    public function edit(Dichvu $dichvu) 
    {
        return view('dichvu.editdv', compact('dichvu'));
    }

    public function update(Dichvu $dichvu, Request $request) 
    {
        $dichvu->update($request->all());
        $day = Carbon::now('Asia/Ho_Chi_Minh');
        Diary::create([
            'username' =>Auth::User()->username,
            'id_adress' => '123.22.33.56',
            'created_at' => $day,
            'action' => 'Update Dich vụ ID:'.$dichvu->id,
        ]);
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