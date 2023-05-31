
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <h5 style="color:#FF9138 " class="mt-4">Thông tin cá nhân</h5>
        <form action="" method="post" class="ttuser-form">
            <div class="form-ttuser">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ URL('img/avata.jpg')}}"  alt="">
                        <h3 class="mt-3">{{ Auth::User()->name }}</h3>
                    </div>
                    <div class="col-md-9">
                        <div class="col-md-6">
                            <div class="mb-3 mt-5">
                                <label for="matb" class="form-label" >Tên người dùng</label>
                                <input type="matb" class="form-control" id="" placeholder=" {{ Auth::User()->name }}"  name="matb">
                            </div>
                            <div class="mb-3">
                                <label for="matb" class="form-label" >Số điện thoại</label>
                                <input type="matb" class="form-control" id=""  placeholder=" {{ Auth::User()->sdt }}" name="matb">
                            </div>
                            <div class="mb-3">
                                <label for="matb" class="form-label" >Email</label>
                                <input type="matb" class="form-control" id="" placeholder=" {{ Auth::User()->email }}" name="matb">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 mt-5">
                                <label for="matb" class="form-label" >Tên đăng nhập</label>
                                <input type="matb" class="form-control" id="" placeholder=" {{ Auth::User()->username }}" name="matb">
                            </div>
                            <div class="mb-3">
                                <label for="matb" class="form-label" >Mật Khẩu</label>
                                <input type="matb" class="form-control" id="" placeholder=" {{ Auth::User()->password }}" name="matb">
                            </div>
                            <div class="mb-3">
                                <label for="matb" class="form-label" >Vai trò</label>
                                <input type="matb" class="form-control" id="" placeholder=" {{ Auth::User()->vaitro }}" name="matb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
    
@endsection






