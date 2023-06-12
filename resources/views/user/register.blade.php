
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Cài đặt hẹ thống > Quản lý tài khoản > <b style="color: #FF7506">Thêm tài khoản</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý tài khoản</h4>
        <form action="{{route('quanlyuser.store')}}" method="POST" class="addtb-form">
            @csrf
            <div class="form-register">
                <h4 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin tài khoản</h4>
                <div class="row p-4 pt-0  pb-0">
                    <div class="col-md-6 p-3 pb-0">
                        <div class="mb-3">
                            <label for="name" class="form-label" >Họ Tên:*</label>
                            <input type="name" class="form-control" id="" placeholder="Họ và tên" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="sdt" class="form-label" >Số điện thoại:*</label>
                            <input type="sdt" class="form-control" id="" placeholder="Số điện thoại" name="sdt">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" >Email:*</label>
                            <input type="email" class="form-control" id="" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="diachiip" class="form-label" >Vai trò:*</label>
                            <select class="form-select" value="chọn vai trò" name="id_role" style="width:580px">
                                {{-- <option value="">Kế toán </option>
                                <option value="">nhân viên</option> --}}
                                @foreach ($role as $item)
                                <option value="{{$item->id}}">{{$item->name_role}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-md-6 p-3  pb-0">
                        <div class="mb-3">
                            <label for="username" class="form-label" >Tên đăng nhập:*</label>
                            <input type="username" class="form-control" id="" placeholder="Tên đăng nhập" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" >Mật khẩu:*</label>
                            <input type="password" class="form-control" id="" placeholder="Tên đăng nhập" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label" >Nhập lại mật khẩu:*</label>
                            <input type="password" class="form-control" id="" placeholder="Nhập lại mật khẩu" name="password_confirmation">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label" >Trang thái:*</label>
                            <select class="form-select" value="tất cả" name="status_hd" style="width:580px">
                                <option name="status_hd">Hoạt động</option>
                                <option name="status_hd">Ngưng hoạt động</option>
                            </select>
                        </div>
                    </div>
                    <p>* Là trường thông tin bắt buộc</p>
                </div>
            </div>
            <div class="button">
                <div class="text-center mt-3">
                    <button type="" class="btn btn-outline-warning button1 pt-3"  style="margin-right:24px;" ><a href="{{route('quanlyuser.index')}}"  class="nav-link">Hủy</a></button>
                    <button type="submit" class="btn btn-warning" style="background: #FF9138;">Thêm</button>
                </div>                    
            </div>
        </form>
    </div>
    
@endsection






