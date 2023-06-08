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
      .form-control{
        height: 40px;
      }
        </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 p-0 bg-light dn ">
                <div class="row">
                    <div class="col-md-12 p-0  center-block">
                        <img src="{{ URL('img/logo.png')}}" class="mx-auto d-block" width="170px"  alt="">
                    </div>
                </div>
                <div class="row p-5">
                <form action="{{ route('register') }}" class="p-0 mx-auto d-block" style="width:400px;" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label" >Tên Người Dùng*:</label>
                        <input type="name" class="form-control mx-auto d-block"   id="name" placeholder="name" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="username" class="form-label" >Tên Đăng Nhập*:</label>
                        <input type="username" class="form-control mx-auto d-block"   id="username" placeholder="username" name="username">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label" >Email*:</label>
                        <input type="email" class="form-control mx-auto d-block"   id="email" placeholder="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label" >Số điện thoại*:</label>
                        <input type="sdt" class="form-control mx-auto d-block" id="pwd" placeholder="sdt" name="sdt">
                    </div>
                    <div class="mb-3">
                        <label for="vaitro" class="form-label" >Vai trò*:</label>
                        <input type="vaitro" class="form-control mx-auto d-block" id="pwd" placeholder="vaitro" name="vaitro">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label" >Mật Khẩu*:</label>
                        <input type="password" class="form-control mx-auto d-block" id="pwd" placeholder="Password" name="password">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label" >Nhập Lại Mật Khẩu*:</label>
                        <input type="password" class="form-control mx-auto d-block" id="pwd" placeholder="password_confirmation" name="password_confirmation">
                    </div>
                  
                    <div class=" mb-3"> 
                        <a href="{{ route('password.request') }}"  class="btn p-0" >Quên Mật Khẩu ?</a>
                    </div>
                    <button type="submit" class="btn btn-warning mx-auto d-block">Đăng Kí</button>
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


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div>
                <x-label for="username" :value="__('username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>
            <div>
                <x-label for="sdt" :value="__('sdt')" />

                <x-input id="sdt" class="block mt-1 w-full" type="text" name="sdt" :value="old('sdt')" required autofocus />
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            {{-- <div class="mt-4">
                <x-label for="vaitro" :value="__('vaitro')" />

                <x-input id="vaitro" class="block mt-1 w-full" type="vaitro" name="vaitro" :value="old('vaitro')" required />
            </div> --}}

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>


