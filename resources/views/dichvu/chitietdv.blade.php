
@extends('dashboard')

<style>
    .pagination{
        position: absolute;
        bottom: 0px;
        right: 15px;
    }
</style>
@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Dịch vụ > Danh sách dịch vụ > <b style="color: #FF7506">Chi tiết</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý dịch vụ</h4>
        <div class="form-showdv">
            @csrf
            <h5 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin dịch vụ</h5>
            <div class="row p-4 pt-2  pb-0">
                <div class="col-md-12 p-3 pb-0">
                    <div class="mb-1 t">
                        <b > Mã dịch vụ:</b><p>{{$dichvu->ma_service}}</p>             
                    </div>
                    <div class="mb-1 t">
                        <b > Tên dịch vụ:</b> <p>{{$dichvu->name_service}}</p>                   
                    </div>
                    <div class="mb-1 t">
                        <b >Mô tả:</b> <p>{{$dichvu->mota}}</p>    
                    </div>
                    
                </div>
                <h5 class="p-3  mb-0 pb-0" style="color: #FF7506">Quy tắc cấp số</h5>
                <div class="col-md-12 mt-0 pt">
                    <label for="" class="mb-2"><b>Tăng tự động: </b>
                        <input type="text" value="001" style="width: 61px;" class="mx-2 p-2 rounded-3 text-center">
                        đến:
                        <input type="text" value="999" style="width: 61px;" class="mx-2 p-2 rounded-3 text-center">
                       </label>

                       <label class="form-check-label" for="flexCheckDefault1">
                        <b>  Prefix:</b>
                      </label><input type="text" value="0001" style="width: 61px; margin-left: 70px" class="p-2 rounded-3 text-center"> <br>
                      <label for=""><b>Reset mỗi ngày</b>
                      </label> <br>
                      <p>Ví dụ : 201 - 2001</p>
                    </div>
            </div>
        </div> 
        <form action="" method="post" class="form-dv p-3">
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
                    <div class="input">
                    <input type="date" name="" id="" >
                   <input type="date" name="" id="" style="margin-left: 10px">
                    </div>
                  
                </div>
                <div class="tukhoadv">
                    <p>Từ Khóa</p>
                    <input type="text" class="tk" placeholder="nhập từ khóa" style="width:220px;"  name="" id="">
                </div>
            </div>
            <table class="table table-bordered mt-3" >
                <thead>
                  <tr style="background-color: #FF9138;">
                    <th>Mã dịch vụ</th>
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($dichvu->cap_so as $item)
                    <tr>
                        <td>{{$item->stt}}</td>
                        <td>{{$item->status}}</td>
                
                    </tr>
                    @endforeach         
                    
                          
                </tbody>
              </table>
              <ul class="pagination justify-content-end">
                {{-- {{ $dichvu->links() }} --}}
               {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);"><</a></li>
               <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
               <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
               <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
               <li class="page-item"><a class="page-link" href="javascript:void(0);">></a></li> --}}
             </ul>
        </form>               
        </div>
        <div class="editdv">
            <a href="{{route('dichvu.create')}}"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.443 2.34507C21.1213 2.24017 22.7762 2.8229 24.0233 3.96506C25.1655 5.2121 25.7482 6.86705 25.655 8.55697V19.4424C25.7599 21.1323 25.1655 22.7873 24.035 24.0343C22.7879 25.1764 21.1213 25.7592 19.443 25.6543H8.55751C6.86758 25.7592 5.21261 25.1764 3.96556 24.0343C2.8234 22.7873 2.24066 21.1323 2.34555 19.4424V8.55697C2.24066 6.86705 2.8234 5.2121 3.96556 3.96506C5.21261 2.8229 6.86758 2.24017 8.55751 2.34507H19.443ZM12.8115 19.6522L20.6551 11.7853C21.366 11.0627 21.366 9.89725 20.6551 9.18632L19.14 7.67122C18.4174 6.94864 17.2519 6.94864 16.5293 7.67122L15.7485 8.46374C15.6319 8.58028 15.6319 8.77841 15.7485 8.89496C15.7485 8.89496 17.6016 10.7364 17.6365 10.783C17.7647 10.9229 17.8463 11.1093 17.8463 11.3191C17.8463 11.7387 17.5083 12.0883 17.0771 12.0883C16.879 12.0883 16.6925 12.0067 16.5643 11.8785L14.618 9.94387C14.5247 9.85063 14.3616 9.85063 14.2683 9.94387L8.70902 15.5031C8.32442 15.8877 8.10298 16.4005 8.09132 16.9483L8.02139 19.7104C8.02139 19.8619 8.06801 20.0018 8.17291 20.1067C8.2778 20.2116 8.41765 20.2699 8.56917 20.2699H11.308C11.8674 20.2699 12.4036 20.0484 12.8115 19.6522Z" fill="#FF9138"/>
                </svg>
                <br>
                Cập nhật danh sách</a>
        </div>
        <div class="againdv">
            <a href="{{route('dichvu.index')}}"><svg width="28" height="29" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.8885 2.54004H9.1235C4.86516 2.54004 2.3335 5.07171 2.3335 9.31837V19.0834C2.3335 23.33 4.86516 25.8617 9.11183 25.8617H18.8768C23.1235 25.8617 25.6552 23.33 25.6552 19.0834V9.31837C25.6668 5.07171 23.1352 2.54004 18.8885 2.54004Z" fill="#FF7506"/>
                <path d="M16.2398 10.1H10.2315L10.6165 9.71503C10.9548 9.37669 10.9548 8.81669 10.6165 8.47836C10.2782 8.14003 9.71818 8.14003 9.37985 8.47836L7.54818 10.31C7.20985 10.6484 7.20985 11.2084 7.54818 11.5467L9.37985 13.3784C9.55485 13.5534 9.77652 13.635 9.99818 13.635C10.2198 13.635 10.4415 13.5534 10.6165 13.3784C10.9548 13.04 10.9548 12.48 10.6165 12.1417L10.3132 11.8384H16.2398C17.7332 11.8384 18.9582 13.0517 18.9582 14.5567C18.9582 16.0617 17.7448 17.275 16.2398 17.275H10.4998C10.0215 17.275 9.62485 17.6717 9.62485 18.15C9.62485 18.6284 10.0215 19.025 10.4998 19.025H16.2398C18.7015 19.025 20.7082 17.0184 20.7082 14.5567C20.7082 12.095 18.7015 10.1 16.2398 10.1Z" fill="#FFF2E7"/>
                </svg>
                <br>
                Quay lại</a>
        </div>
        
    </div>
    
@endsection






