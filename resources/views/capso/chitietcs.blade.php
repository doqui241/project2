
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Cấp số > Danh sách cấp số <b style="color: #FF7506">Chi tiết</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý cấp số</h4>
        <div class="form-thietbi" style="width:1180px">
            @csrf
            <h5 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin cấp số</h5>
            <div class="row p-4 pt-2  pb-0">
                <div class="col-md-6 p-3 pb-0">
                    <div class="mb-3 t" >
                        <b >Họ Tên:</b><p>{{$capso->user->name}}</p>             
                    </div>
                    <div class="mb-3 t">
                        <b >Tên dịch vụ:</b> <p>{{$capso->dichvu->name_service}}</p>                   
                    </div>
                    <div class="mb-3 t">
                        <b >Số thứ tự:</b> <p>{{$capso->stt}}</p>    
                    </div>
                    <div class="mb-3 t">
                        <b >Thời gian cấp:</b> <p>{{$capso->created_at}}</p>    
                    </div>
                    <div class="mb-3 t">
                        <b >Hạn sử dụng:</b> <p>{{$capso->hsd}}</p>    
                    </div>
                    
                </div>
                <div class="col-md-6 p-3  pb-0">
                    <div class="mb-3 t">
                        <b >Nguồn cấp:</b> <p>{{$capso->thietbi->name_device}}</p>    
                       
                    </div>
                    <div class="mb-3 t">
                        <b >Trạng thái:</b><p>{{$capso->status}}</p>    
                        
                    </div>
                    <div class="mb-3 t">
                        <b >Số điện thoại:</b> <p>{{$capso->user->sdt}}</p>    
                       
                    </div>
                    <div class="mb-3 t">
                        <b >Địa chỉ email:</b> <p>{{$capso->user->email}}</p>    
                       
                    </div>
                </div>
            </div>
        </div> 
        <div class="addtb" style="top: 160px">
            <a href="{{route('capso.index')}}"><svg  width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.8885 2.33301H9.11183C4.86516 2.33301 2.3335 4.86467 2.3335 9.11134V18.8763C2.3335 23.1347 4.86516 25.6663 9.11183 25.6663H18.8768C23.1235 25.6663 25.6552 23.1347 25.6552 18.888V9.11134C25.6668 4.86467 23.1352 2.33301 18.8885 2.33301ZM16.2402 18.818H10.5002C10.0218 18.818 9.62516 18.4213 9.62516 17.943C9.62516 17.4647 10.0218 17.068 10.5002 17.068H16.2402C17.7335 17.068 18.9585 15.8547 18.9585 14.3497C18.9585 12.8447 17.7452 11.6313 16.2402 11.6313H10.3252L10.6285 11.9347C10.9668 12.2847 10.9668 12.833 10.6168 13.183C10.4418 13.358 10.2202 13.4397 9.9985 13.4397C9.77683 13.4397 9.55516 13.358 9.38016 13.183L7.5485 11.3397C7.21016 11.0013 7.21016 10.4413 7.5485 10.103L9.38016 8.27134C9.7185 7.93301 10.2785 7.93301 10.6168 8.27134C10.9552 8.60967 10.9552 9.16967 10.6168 9.50801L10.2318 9.89301H16.2402C18.7018 9.89301 20.7085 11.8997 20.7085 14.3613C20.7085 16.823 18.7018 18.818 16.2402 18.818Z" fill="#FF9138"/>
                </svg>
                <br>
                Quay lại</a>
        </div>               
        </div>
        
    </div>
    
@endsection






