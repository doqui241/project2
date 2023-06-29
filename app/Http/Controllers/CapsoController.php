<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dichvu;
use App\Models\Capso;
use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Auth;
use Illuminate\Support\Str;
use Validator;
use Carbon\Carbon;

class CapsoController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $capso = Capso::paginate(8);
        if($key = request()->key){
            $capso = Capso::where('stt','like', '%'.$key.'%')->paginate(8);
        }
        return view('capso.capso', compact('capso'));
    }

    public function create() 
    {
        $service = Dichvu::all();
        return view('capso.addcs',compact('service'));
    }

    public function store(Request $request) 
    {   
       
        $request->validate([
            'id_service'=>'required|exists:services,id',
        ]);

        $service= Dichvu::find($request->id_service);
    

        $rule = $service->rule_progression;
       
        $last_progression= Capso::latest('id')->first();

        if($rule->check_prefix == 1){
           
            $nextId = $last_progression ? $last_progression->id +1 : $rule->start;

            $nextCode=$service->ma_service.Str::padLeft($nextId, 4, '0');
            
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $day = Carbon::now();
        $end_time  = $day->copy()->addHours(24);
        $progression=Capso::create([
        'id_service' => $service->id,
        'stt' => $nextCode,
        'time_start'=> $day,
        'hsd'=> $end_time,
    ]);
        $service = Dichvu::all();
        return view('capso.addcs',compact('service'))->with(['progression' => $progression]);

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