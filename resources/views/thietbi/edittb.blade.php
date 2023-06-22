
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Thiết Bị > Danh Sách Thiết Bị > <b style="color: #FF7506">Cập nhật thiết bị</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý thiết bị</h4>
        <form action="{{route('thietbi.update', $device->id)}}" method="POST" class="edittb-form">
            @csrf
            @method('PUT')
            <div class="form-edittb">
                <h4 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin thiết bị</h4>
                <div class="row p-4 pt-0  pb-0">
                    <div class="col-md-6 p-3 pb-0">
                        <div class="mb-3">
                            <label for="matb" class="form-label" >Mã thiết bị:*</label>
                            <input type="matb" value="{{$device->ma_device}}" class="form-control" id="" placeholder="Mã thiết bị" name="ma_device">
                        </div>
                        <div class="mb-3">
                            <label for="tentb" class="form-label" >Tên thiết bị:*</label>
                            <input type="tentb" value="{{$device->name_device}}" class="form-control" id="" placeholder="Tên thiết bị" name="name_device">
                        </div>
                        <div class="mb-3">
                            <label for="diachiip" class="form-label" >Địa Chỉ IP:*</label>
                            <input type="diachiip" value="{{$device->adress}}" class="form-control" id="" placeholder="Địa Chỉ IP" name="adress">
                        </div>
                        
                    </div>
                    <div class="col-md-6 p-3  pb-0">
                        <div class="mb-3">
                            <label for="loaitb" class="form-label" >Loại thiết bị:*</label>
                            <select class="form-select" placeholder="Chonk loại thiết bị" value="{{$device->loai_device}}" name="loai_device" style="width:580px">>
                                <option>Kiosk</option>
                                <option>Display counter</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label" >Tên đăng nhập:*</label>
                            <input type="username" value="{{$device->username}}" class="form-control" id="" placeholder="Tên đăng nhập" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label" >Mật khẩu:*</label>
                            <input type="password" value="{{$device->password}}" class="form-control" id="" placeholder="Mật khẩu" name="password">
                        </div>
                    </div>
                    <div class="col-md-12 mt-0 pt">
                        <label for="dichvusd" class="form-label" >Dịch vụ sử dụng:*</label>
                        <select name="dichvusd" id="" class="form-control" style="width: 1200px;">
                            <option value="{{$device->id}}">{{$device->dichvu_sd->name_service}}</option>
                            @foreach ($service  as $item)
                                <option value="{{$item->id}}">{{$item->name_service}}</option>
                                @endforeach
                        </select>
                        {{-- <input type="text" value="{{$device->dichvu_sd->name_service}}" class="form-control" style="width: 1200px;" id="" placeholder="Dịch vụ sử dụng" name="dichvusd"> --}}
                    </div>
                </div>
            </div>
            <div class="button">
                <div class="text-center mt-3">
                    <button type="" class="btn btn-outline-warning button1 pt-3"  style="margin-right:24px;" ><a href="{{route('thietbi.index')}}"  class="nav-link">Hủy</a></button>
                    <button type="submit" class="btn btn-warning" style="background: #FF9138;">Cập nhật</button>
                </div>                    
            </div>
        </form>
    </div>
    
@endsection













