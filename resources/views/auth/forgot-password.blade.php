<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ URL('css/login.css')}}">
    <style>
      
        </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 p-0  pt-5 bg-light dn ">
                <div class="row">
                    <div class="col-md-12 p-0 mt-5 center-block">
                        <img src="{{ URL('img/logo.png')}}" class="mx-auto d-block" width="170px"  alt="">
                    </div>
                </div>
                <div class="row p-5">
                    <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form action="{{ route('password.email') }}" method="POST" style="width:400px;"  class="p-0  mx-auto d-block">
                    @csrf
                    <div class="mb-3 mt-3 ">
                        <label for="email" class="form-label" >Vui lòng nhập email để đặt lại mật khẩu của bạn*</label>
                        <input type="email"  class="form-control mx-auto d-block"   id="email" placeholder="email" name="email">
                    </div>
                    <div class="row ">
                        <div class="text-center mt-3">
                            <button type="" class="btn btn-outline-warning" style="margin-right:24px;"><a href="{{route('login')}}"  class="nav-link">Hủy</a></button>
                            <button type="submit" class="btn btn-warning">Xác Nhận</button>
                        </div>                    
                    </div>
                    
                </form>
                </div>
            </div>
            <div class="col-md-7 p-0 img">
                <img src="{{ URL('img/banner.jpg')}}" class="w-100" alt="">
            </div>
        </div>
    </div>
</body>
</html>





{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
