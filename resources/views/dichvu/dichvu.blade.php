
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Dịch Vụ > <b style="color: #FF7506">Danh Sách dịch vụ</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lí dịch vụ</h4>
        <div class="trangthai">
            <div class="trangthaidv">
                <p>Trạng thái hoạt động</p>
                <select class="form-select">
                    <option>Tất Cả</option>
                    <option>Hoạt động</option>
                    <option>Ngưng hoạt động</option>
                </select>
            </div>
            <div class="thoigian">
                <p>Chọn thời gian</p>
               <input type="date" name="" id="" style="margin-right: 15px">
               <input type="date" name="" id="">
            </div>
            <div class="tukhoadv">
                <p>Từ Khóa</p>
                <input type="text" class="tk" name="" id="">
            </div>
        </div>
        <form action="" method="post">
            <table class="table table-bordered" >
                <thead>
                  <tr style="background-color: #FF9138;">
                    <th>Mã dịch vụ</th>
                    <th>Tên dịch vụ</th>
                    <th>Mô tả</th>
                    <th>Trang thái hoạt động</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($dichvu as $item)
                    <tr>
                        <td>{{$item->madv}}</td>
                        <td>{{$item->tendv}}</td>
                        <td>{{$item->mota}}</td>
                        <td>hoạt động</td>
                        <td> <a href="{{route('thietbi.show',$item->id)}}" class="">Chi tiết</a></td>
                        <td>
                            <a href="{{route('thietbi.edit',$item->id)}}" class="">Cập nhật</a>
                        </td>
                    </tr>
                @endforeach         
                    <tr>
                        <td>k1</td>
                        <td>kiok</td>
                        <td>111.222.333</td>
                        <td>hoạt động</td>
                        
                        <td> <a href="" class="">Chi tiết</a></td>
                        <td><a href="{{route('thietbi.create')}}" class="">Cập nhật</a></td>  
                    </tr>               
                    <tr>
                        <td>k1</td>
                        <td>kiok</td>
                        <td>111.222.333</td>
                        <td>hoạt động</td>
                        
                        <td> <a href="" class="">Chi tiết</a></td>
                        <td><a href="{{route('thietbi.create')}}" class="">Cập nhật</a></td>  
                    </tr>               
                    <tr>
                        <td>k1</td>
                        <td>kiok</td>
                        <td>111.222.333</td>
                        <td>hoạt động</td>
                        
                        <td> <a href="" class="">Chi tiết</a></td>
                        <td><a href="{{route('thietbi.create')}}" class="">Cập nhật</a></td>  
                    </tr>               
                </tbody>
              </table>
        </form>
        <div class="addtb">
            <a href="{{route('dichvu.create')}}"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.8884 2.33301H9.11171C4.86504 2.33301 2.33337 4.86467 2.33337 9.11134V18.8763C2.33337 23.1347 4.86504 25.6663 9.11171 25.6663H18.8767C23.1234 25.6663 25.655 23.1347 25.655 18.888V9.11134C25.6667 4.86467 23.135 2.33301 18.8884 2.33301ZM18.6667 14.8747H14.875V18.6663C14.875 19.1447 14.4784 19.5413 14 19.5413C13.5217 19.5413 13.125 19.1447 13.125 18.6663V14.8747H9.33337C8.85504 14.8747 8.45837 14.478 8.45837 13.9997C8.45837 13.5213 8.85504 13.1247 9.33337 13.1247H13.125V9.33301C13.125 8.85467 13.5217 8.45801 14 8.45801C14.4784 8.45801 14.875 8.85467 14.875 9.33301V13.1247H18.6667C19.145 13.1247 19.5417 13.5213 19.5417 13.9997C19.5417 14.478 19.145 14.8747 18.6667 14.8747Z" fill="#FF9138"/>
                </svg><br>
                Thêm dịch vụ</a>
        </div>
    </div>
    
@endsection






