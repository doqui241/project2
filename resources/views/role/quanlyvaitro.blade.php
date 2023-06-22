
@extends('dashboard')
<style>
    form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
border-radius: 10px;
  width: 300px;
  background: white;
  z-index: 1;
  border: 1px gray solid;
  /* position: absolute; */

}

form.example button {
    position: absolute;
    background: white;
    border: 0px;
  padding: 10px;
  color: black;
  font-size: 17px;
    right: 190px;
  z-index: 2;
}


form.example{
    /* position: absolute; */
    padding: 0px;
    margin: 0;

}
</style>

@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Cài đặt hệ thống > <b style="color: #FF7506">Quản lý vai trò</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Danh sách vai trò</h4>
        <div class="quanlyvaitro">
            <div class="tukhoa">
                <p>Từ Khóa</p>
                <form action="" method="get" class="example" style="width:300px;height:44px">
                    <input type="text" class="tk" placeholder="Search.." name="key">
                    <button type="submit" class="mt-1"><i class="fa fa-search"></i></button>
                </form>           
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

                  </tr>
                </thead>
                <tbody>
                    @foreach ($role as $item)
                    <tr>
                        <td>{{$item->name_role}}</td>
                        <td>7</td>
                        <td>{{$item->mota_role}}</td>
                        <td>
                            <a href="{{route('role.edit',$item->id)}}" class="">Cập nhật</a>
                        </td>
                    </tr>
                    @endforeach  
                                 
                </tbody>
              </table>
        </form>
        <div class="addtb">
            <a href="{{route('role.create')}}"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.8884 2.33301H9.11171C4.86504 2.33301 2.33337 4.86467 2.33337 9.11134V18.8763C2.33337 23.1347 4.86504 25.6663 9.11171 25.6663H18.8767C23.1234 25.6663 25.655 23.1347 25.655 18.888V9.11134C25.6667 4.86467 23.135 2.33301 18.8884 2.33301ZM18.6667 14.8747H14.875V18.6663C14.875 19.1447 14.4784 19.5413 14 19.5413C13.5217 19.5413 13.125 19.1447 13.125 18.6663V14.8747H9.33337C8.85504 14.8747 8.45837 14.478 8.45837 13.9997C8.45837 13.5213 8.85504 13.1247 9.33337 13.1247H13.125V9.33301C13.125 8.85467 13.5217 8.45801 14 8.45801C14.4784 8.45801 14.875 8.85467 14.875 9.33301V13.1247H18.6667C19.145 13.1247 19.5417 13.5213 19.5417 13.9997C19.5417 14.478 19.145 14.8747 18.6667 14.8747Z" fill="#FF9138"/>
                </svg><br>
                Thêm Vai trò</a>
        </div>
        <ul class="pagination justify-content-end" style="margin-right: 185px">
             {{ $role->links() }}
            {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);"><</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">></a></li> --}}
          </ul>
    </div>
    
@endsection






