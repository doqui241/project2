
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Báo cáo > <b style="color: #FF7506">Lập báo cáo</b></p>
        </div>
        <div class="trangthai mt-5">  
            <div class="thoigian">
                <p>Chọn thời gian</p>
               <input type="date" name="" id="" style="margin-right: 15px">
               <input type="date" name="" id="">
            </div>
        </div>
        <form action="" method="post">
            <table class="table table-bordered" >
                <thead>
                  <tr style="background-color: #FF9138;">
                    <th>Số thứ tự</th>
                    <th>Tên dịch vụ</th>
                    <th>Thời gian cấp</th>
                    <th>Tình trạng</th>
                    <th>Nguồn cấp</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($baocao as $item)
                    <tr>
                        <td>{{$item->stt}}</td>
                        <td>{{$item->dichvu->name_service}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->thietbi->name_device}}</td>
                    </tr>   
                    @endforeach     
                </tbody>
              </table>
        </form>
        <div class="addbc">
            <a href="{{route('dichvu.create')}}"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.9166 11.888H20.545C17.78 11.888 15.5283 9.63634 15.5283 6.87134V3.49967C15.5283 2.85801 15.0033 2.33301 14.3616 2.33301H9.41496C5.82163 2.33301 2.91663 4.66634 2.91663 8.83134V19.168C2.91663 23.333 5.82163 25.6663 9.41496 25.6663H18.585C22.1783 25.6663 25.0833 23.333 25.0833 19.168V13.0547C25.0833 12.413 24.5583 11.888 23.9166 11.888ZM14.3266 18.4097L11.9933 20.743C11.9116 20.8247 11.8066 20.8947 11.7016 20.9297C11.5966 20.9763 11.4916 20.9997 11.375 20.9997C11.2583 20.9997 11.1533 20.9763 11.0483 20.9297C10.955 20.8947 10.8616 20.8247 10.7916 20.7547C10.78 20.743 10.7683 20.743 10.7683 20.7313L8.43496 18.398C8.09663 18.0597 8.09663 17.4997 8.43496 17.1613C8.77329 16.823 9.33329 16.823 9.67163 17.1613L10.5 18.013V13.1247C10.5 12.6463 10.8966 12.2497 11.375 12.2497C11.8533 12.2497 12.25 12.6463 12.25 13.1247V18.013L13.09 17.173C13.4283 16.8347 13.9883 16.8347 14.3266 17.173C14.665 17.5113 14.665 18.0713 14.3266 18.4097Z" fill="#FF7506"/>
                <path d="M20.335 10.2779C21.4434 10.2896 22.9834 10.2896 24.3017 10.2896C24.9667 10.2896 25.3167 9.50792 24.85 9.04125C23.17 7.34958 20.16 4.30458 18.4334 2.57792C17.955 2.09958 17.1267 2.42625 17.1267 3.09125V7.16292C17.1267 8.86625 18.5734 10.2779 20.335 10.2779Z" fill="#FF7506"/>
                </svg>
                <br>
                Tải về</a>
        </div>
        <ul class="pagination justify-content-end" style="margin-right: 185px">
            {{ $baocao->links() }}
            {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);"><</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0);">></a></li> --}}
          </ul>
    </div>
    
@endsection






