
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Thiết Bị > <b style="color: #FF7506">Danh Sách Thiết Bị</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý thiết bị</h4>
        <div class="form-thietbi">
            @csrf
            <h5 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin thiết bị</h5>
            <div class="row p-4 pt-2  pb-0">
                <div class="col-md-6 p-3 pb-0">
                    <div class="mb-3 t">
                        <b > Mã thiết bị:</b><p>{{$thietbi->matb}}</p>             
                    </div>
                    <div class="mb-3 t">
                        <b > Tên thiết bị:</b> <p>{{$thietbi->tentb}}</p>                   
                    </div>
                    <div class="mb-3 t">
                        <b > Địa Chỉ IP:</b> <p>{{$thietbi->diachiip}}</p>    
                    </div>
                    
                </div>
                <div class="col-md-6 p-3  pb-0">
                    <div class="mb-3 t">
                        <b >Loại thiết bị:</b> <p>{{$thietbi->loaitb}}</p>    
                       
                    </div>
                    <div class="mb-3 t">
                        <b > Tên đăng nhập:</b><p>{{$thietbi->username}}</p>    
                        
                    </div>
                    <div class="mb-3 t">
                        <b > Mật khẩu:</b> <p>{{$thietbi->password}}</p>    
                       
                    </div>
                </div>
                <div class="col-md-12 mt-0 pt">
                    <b > Dịch vụ sử dụng:</b>
                    <p>{{$thietbi->dichvusd}}</p>    
        
                </div>
            </div>
        </div>                
        </div>
        
    </div>
    
@endsection






