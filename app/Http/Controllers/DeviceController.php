<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Device;
use App\Models\Dichvu;
use App\Models\Diary;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use Auth;
use Validator;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
class DeviceController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        
        $device = Device::with('dichvu_sd')->get();
        $device = Device::paginate(8);
        if($key = request()->key){
            $device = Device::where('name_device','like', '%'.$key.'%')->orWhere('adress','like', '%'.$key.'%')->orWhere('status_hd','like', '%'.$key.'%')->paginate(8);
        }
        if($hd = request()->hd){
            $device = Device::where('status_hd','like', '%'.$hd.'%')->paginate(8);
        }
        return view('thietbi.thietbi', compact('device'));
    }

    public function create() 
    {
        $device = Dichvu::all();
        return view('thietbi.addtb',compact('device'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name_device' => 'required',
            'ma_device' => 'required',
            'adress' => 'required',
            'username' => 'required',
            'password' => 'required',
            'dichvusd'=>'required',
            'loai_device'=>'required',

        ]);
        $device = Device::create($request->all());
        $day = Carbon::now('Asia/Ho_Chi_Minh');
        Diary::create([
            'username' =>Auth::User()->username,
            'id_adress' => '123.22.33.44',
            'created_at' => $day,
            'action' => 'Thêm Thiết bị ID:'.$device->id,
        ]);
        
        return redirect()->route('thietbi.index');

    }

    public function show($id) 
    {
        $device = Device::find($id);
        return view('thietbi.chitiettb', compact('device'));
        // return view('thietbi.chitiettb');
    }


    public function edit($id) 
    {
        $service = Dichvu::all();
        $device = Device::find($id);
        return view('thietbi.edittb', compact('device'),compact('service'));
    }

    public function update($id,Device $device, Request $request) 
    {
        $device = Device::find($id);
        $device->update($request->all());
        $day = Carbon::now('Asia/Ho_Chi_Minh');
        Diary::create([
            'username' =>Auth::User()->username,
            'id_adress' => '123.22.33.45',
            'created_at' => $day,
            'action' => 'Update Thiết bị ID:'.$device->id,
        ]);
        
        return redirect()->route('thietbi.index');
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