
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Thiết Bị > <b style="color: #FF7506">Danh Sách Thiết Bị</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Danh Sách Thiết Bị</h4>
        <div class="thietbi">
            <div class="trangthaihd" >
                <p>Trạng thái hoạt động</p>
                <select class="form-select">
                    <option>Tất Cả</option>
                    <option>Hoạt động</option>
                    <option>Ngưng hoạt động</option>
                </select>
            </div>
            <div class="trangthaikn" style="margin-right:148px ">
                <p>Trạng thái kết nối</p>
                <select class="form-select">
                    <option>Tất Cả</option>
                    <option>Kết Nối</option>
                    <option>Mất kết nối</option>
                </select>
            </div>
            <div class="tukhoa">
                <p>Từ Khóa</p>
                <input type="text" class="tk" placeholder="nhập từ khóa" name="" id="">
            </div>
        </div>
        <form action="" method="post">
            <table class="table table-bordered" >
                <thead>
                  <tr style="background-color: #FF9138;">
  
                    <th>Mã thiết bị</th>
                    <th>Tên thiết bị</th>
                    <th>Địa chỉ IP</th>
                    <th>Trang thái hoạt động</th>
                    <th>Trang thái kết nối</th>
                    <th>Dịch vụ sử dụng</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($device as $item)
                    <tr>
        
                        <td>{{$item->ma_device}}</td>
                        <td>{{$item->name_device}}</td>
                        <td>{{$item->adress}}</td>
                        <td>{{$item->status_hd}}</td>
                        <td>{{$item->status_kn}}</td>
                        <td>{{$item->dichvusd}}</td>
                        
                     
                        <td> <a href="{{route('thietbi.show',$item->id)}}" class="">Chi tiết</a></td>
                        <td>
                            <a href="{{route('thietbi.edit',$item->id)}}" class="">Cập nhật</a>
                        </td>
                    </tr>
                @endforeach            
                </tbody>
               
              </table>
            
        </form>
        <div class="addtb">
            <a href="{{route('thietbi.create')}}"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.8884 2.33301H9.11171C4.86504 2.33301 2.33337 4.86467 2.33337 9.11134V18.8763C2.33337 23.1347 4.86504 25.6663 9.11171 25.6663H18.8767C23.1234 25.6663 25.655 23.1347 25.655 18.888V9.11134C25.6667 4.86467 23.135 2.33301 18.8884 2.33301ZM18.6667 14.8747H14.875V18.6663C14.875 19.1447 14.4784 19.5413 14 19.5413C13.5217 19.5413 13.125 19.1447 13.125 18.6663V14.8747H9.33337C8.85504 14.8747 8.45837 14.478 8.45837 13.9997C8.45837 13.5213 8.85504 13.1247 9.33337 13.1247H13.125V9.33301C13.125 8.85467 13.5217 8.45801 14 8.45801C14.4784 8.45801 14.875 8.85467 14.875 9.33301V13.1247H18.6667C19.145 13.1247 19.5417 13.5213 19.5417 13.9997C19.5417 14.478 19.145 14.8747 18.6667 14.8747Z" fill="#FF9138"/>
                </svg><br>
                Thêm thiết bị</a>
        </div>
        <ul class="pagination justify-content-end" style="margin-right: 185px">
            {{-- {{ $device->links() }} --}}
            <li class="page-item"><a class="page-link" href="javascript:void(0);"><</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">></a></li>
          </ul>
    </div>
@endsection






