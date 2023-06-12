
@extends('dashboard')
<style>
    span{
        width: 20px;
        height:20px ;
        background: red;
    }
</style>

@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Cấp Số > <b style="color: #FF7506">Danh Sách Cấp Số</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản Lý Cấp Số</h4>
        <div class="capso">
            <div class="tendv">
                <p>Tên dịch vụ</p>
                <select class="form-select">
                    <option>Tất Cả</option>
                    <option>Khám sản - phụ khoa</option>
                    <option>Khám răng hàm mặt</option>
                    <option>Khám tai mũi họng</option>
                </select>
            </div>
            <div class="tinhtrang">
                <p>Tình trạng</p>
                <select class="form-select">
                    <option>Tất Cả</option>
                    <option>Đăng chờ</option>
                    <option>Đã sử dụng</option>
                    <option>Bỏ qua</option>
                </select>
            </div>
            <div class="nguoncap">
                <p>Nguồn cấp</p>
                <select class="form-select">
                    <option>Tất Cả</option>
                    <option>Kiosk</option>
                    <option>Hệ thống</option>
                </select>
            </div>
            <div class="thoigiancs">
                <p>Chọn thời gian</p>
               <input type="date" name="" id="" style="margin-right: 15px">
               <input type="date" name="" id="">
            </div>
            <div class="tukhoa">
                <p>Từ Khóa</p>
                <input type="text" class="tk" style="width:245px" placeholder="Nhập từ khóa" name="" id="">
            </div>
        </div>
        <form action="" method="post">
            <table class="table table-bordered" >
                <thead>
                  <tr style="background-color: #FF9138;">
                    <th>STT</th>
                    <th>Tên khách hàng</th>
                    <th>Tên dịch vụ</th>
                    <th>thời gian cấp</th>
                    <th>Hạn sử dụng</th>
                    <th>Trang thái</th>
                    <th>Nguồn cấp</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>k1</td>
                        <td>k1</td>
                        <td>kiok</td>
                        <td>111.222.333</td>
                        <td>hoạt động</td>
                        <td>Đang chờ</td>
                        <td>khám tim mạch</td>
                        <td> <a href="" class="">Chi tiết</a></td>
                    </tr>              
                    <tr>
                        <td>k1</td>
                        <td>k1</td>
                        <td>kiok</td>
                        <td>111.222.333</td>
                        <td>hoạt động</td>
                        <td>Đang chờ</td>
                        <td>khám tim mạch</td>
                        <td> <a href="" class="">Chi tiết</a></td>
                    </tr>              
                    <tr>
                        <td>k1</td>
                        <td>k1</td>
                        <td>kiok</td>
                        <td>111.222.333</td>
                        <td>hoạt động</td>
                        <td>Đang chờ</td>
                        <td>khám tim mạch</td>
                        <td> <a href="" class="">Chi tiết</a></td>
                    </tr>              
                    <tr>
                        <td>k1</td>
                        <td>k1</td>
                        <td>kiok</td>
                        <td>111.222.333</td>
                        <td>hoạt động</td>
                        <td>Đang chờ</td>
                        <td>khám tim mạch</td>
                        <td> <a href="" class="">Chi tiết</a></td>
                    </tr>              
                </tbody>
              </table>
        </form>
        <div class="addtb">
            <a href="{{route('capso.create')}}"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.8884 2.33301H9.11171C4.86504 2.33301 2.33337 4.86467 2.33337 9.11134V18.8763C2.33337 23.1347 4.86504 25.6663 9.11171 25.6663H18.8767C23.1234 25.6663 25.655 23.1347 25.655 18.888V9.11134C25.6667 4.86467 23.135 2.33301 18.8884 2.33301ZM18.6667 14.8747H14.875V18.6663C14.875 19.1447 14.4784 19.5413 14 19.5413C13.5217 19.5413 13.125 19.1447 13.125 18.6663V14.8747H9.33337C8.85504 14.8747 8.45837 14.478 8.45837 13.9997C8.45837 13.5213 8.85504 13.1247 9.33337 13.1247H13.125V9.33301C13.125 8.85467 13.5217 8.45801 14 8.45801C14.4784 8.45801 14.875 8.85467 14.875 9.33301V13.1247H18.6667C19.145 13.1247 19.5417 13.5213 19.5417 13.9997C19.5417 14.478 19.145 14.8747 18.6667 14.8747Z" fill="#FF9138"/>
                </svg><br>
                Cấp<br>  Số mới</a>
        </div>
    </div>
    
@endsection






