
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Dịch Vụ > <b style="color: #FF7506">Danh Sách dịch vụ</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lí dịch vụ</h4>
        <div class="trangthai">
            <div class="thoigian">
                <p>Chọn thời gian</p>
               <input type="date" name="" id="" style="margin-right: 15px">
               <input type="date" name="" id="">
            </div>
            <div class="tukhoadv" style="margin-left: 410px">
                <p>Từ Khóa</p>
                <input type="text" class="tk" placeholder="Nhập từ khóa" name="" id="">
            </div>
        </div>
        <form action="" method="post" >
            <table class="table table-bordered" style="width:1200px;">
                <thead>
                  <tr style="background-color: #FF9138;">
                    <th>Tên đăng nhập</th>
                    <th>Thời gian tác động</th>
                    <th>IP thực hiện</th>
                    <th>Thao tác thực hiện</th>
                  </tr>
                </thead>
                <tbody> 
                    @foreach ($diary as $item)
                    <tr>
                        <td>{{$item->username}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->id_adress}}</td>
                        <td>{{$item->action}}</td>
                    </tr>
                @endforeach                                                
                </tbody>
              </table>
        </form>
        <ul class="pagination justify-content-end" style="margin-right: 100px">
            {{$diary->links()}}
            {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);"><</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">></a></li> --}}
          </ul>
    </div>
    
@endsection






