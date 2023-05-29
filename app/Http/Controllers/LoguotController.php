<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\Controller;

class LoguotController extends Controller
{
   
    public function destroy() 
    {
        Auth::login();
        return redirect('')->route('/');
    }


    // public function perform()
    // {
    //     Session::flush();

    //     Auth::logout();

    //     return redirect('login.login');
    // }
}