<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use Auth;
use Validator;
class DeviceController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $device = Device::all();

        return view('thietbi.thietbi', compact('device'));
    }

    public function create() 
    {
        return view('thietbi.addtb');
    }

    public function store(Request $request) 
    {
       
        Device::create($request->all());
        return redirect()->route('thietbi.index');

    }

    public function show(Device $device) 
    {
        return view('thietbi.chitiettb', compact('device'));
        // return view('thietbi.chitiettb');
    }


    public function edit(Device $device) 
    {
        return view('thietbi.edittb', compact('device'));
    }

    public function update(Device $device, Request $request) 
    {
        $device->update($request->all());

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