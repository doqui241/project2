<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Device;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;

class DeviceController extends Controller
{
    /**
     * Display all users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $device = Device::latest()->paginate(5);

        return view('thietbi.thietbi', compact('device'))->with('i',(request()->input('page',1 )-1)*5);
    }

    public function create() 
    {
        return view('thietbi.addtb');
    }

    public function store(Request $request) 
    {
       
        Device::create($request->all());
        return redirect()->route('Thietbi.index');

    }

    public function show(Device $device) 
    {
        return view('thietbi.chitiettb', compact('device'));
        // return view('thietbi.chitiettb');
    }


    public function edit(Device $thietbi) 
    {
        return view('thietbi.edittb', compact('device'));
    }

    public function update(Device $device, Request $request) 
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