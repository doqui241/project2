<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Thietbi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Validator;

class DashboardController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $dashboard = User::latest()->paginate(5);

        return view('dashboard.maindb', compact('dashboard'))->with('i',(request()->input('page',1 )-1)*5);


    }

    /**
     * Show form for creating user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('thongtinuser');
    }

    /**
     * Store a newly created user
     * 
     * @param User $user
     * @param StoreUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        // $this->validate($request,[
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        
        $message = [
            'username.required' => 'Username không được để trống',
            'password.required' => 'password không được để trống',
        ];
        
        $validator = Validator::make($request->all(),$rules,$message)->validate();
        
        //  if($validator->fails()){
        //     return redirect()->back->withErrors($validator);
        //  } 

        $arr = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($arr)){
            return view('dashboard');
        }else{
            dd('đăng nhập thất bại');
        }
        
        //For demo purposes only. When creating user or inviting a user
        // you should create a generated random password and email it to the user
        // User::create($request->all());
        // return redirect()->route('users.index');


        // $user->create(array_merge($request->validated(), [
        //     'password' => 'test' 
        // ]));

        // return redirect()->route('users.index')
        //     ->withSuccess(__('User created successfully.'));
    }

    /**
     * Show user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(User $user) 
    {
        return view('thongtinuser', [
            'user' => $user
        ]);
    }

    /**
     * Edit user data
     * 
     * @param User $user
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users) 
    {
        return view('edit', compact('users'));
    }

    /**
     * Update user data
     * 
     * @param User $user
     * @param UpdateUserRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
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