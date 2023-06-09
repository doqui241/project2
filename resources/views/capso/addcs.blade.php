
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Cấp số > Danh sách cấp số > <b style="color: #FF7506">Cấp số mới</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý cấp số</h4>
        <form action="{{route('capso.store')}}" method="post" class="addtb-form">
            @csrf
            <div class="form-addtb">
                <h4 class="p-3  mb-4 pb-0 text-center" style="color: #FF7506">Cấp Số Mới</h4>
                <div class="row p-4 pt-0  pb-0">
                            <label for="madv" id="" class="form-label text-center" ><b> Dịch vụ khách hàng lựa chọn:*</b></label>
                            <select class="form-select mx-auto d-block" name="id_service" style="width:400px;">
                                <option>Tất Cả</option>
                                @foreach ($service as $item)
                                    <option value="{{$item->id}}">{{$item->name_service}}</option>
                                @endforeach
                            </select>
                            <div class="buttoncs mt-5">
                                <div class="text-center mx-auto d-block mt-3">
                                    <button type="" class="btn btn-outline-warning button1 pt-3"  style="margin-right:24px;" ><a href="{{route('capso.index')}}"  class="nav-link">Hủy bỏ</a></button>
                                    <button type="submit" class="btn btn-warning" style="background: #FF9138;">In số</button>
                                </div>                    
                            </div>
                </div>
            </div>
            
        </form>
        
    </div>
    @if(isset($progression))

    <div class="capso_inso modal" id="exampleModal" >
       
        <div class="so" role="document">
           
                <div class="stt mt-5">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>    
                    <h3>Số thứ tự được cấp </h3>
                    <span>{{ $progression->stt }}</span>
                    <p>DV: {{ $progression->dichvu->name_service }} <b>(tại quày số 1)</b></p>
                </div>
                <div class="tgcap">
                    <span class="">
                        <p>Thời gian cấp : {{ $progression->time_start }}</p>
                        <p>Hạn sử dụng   : {{ $progression->hsd }}</p>
                    </span>
                    
                </div>
     
               
        </div>
         <div class="inso">
            
        </div>
        <script>
            $('#exampleModal').modal()
        </script>
                      
                            @endif
@endsection


{{-- <div class="capso">
    <div class="inso">
        
    </div>
    <div class="so">
       
            <div class="stt mt-5">
                <a href="{{route('capso.index')}}">X</a>        
                <h3>Số thứ tự được cấp </h3>
                <span>2001201</span>
                <p>DV: Khám răng hàm mặt <b>(tại quày số 1)</b></p>
            </div>
            <div class="tgcap">
                <span class="">
                    <p>Thời gian cấp :</p>
                    <p>Hạn sử dụng   :</p>
                </span>
                
            </div>
 
           
    </div>
</div> --}}




