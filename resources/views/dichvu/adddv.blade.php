
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Dịch Vụ > Danh Sách Dịch Vụ ><b style="color: #FF7506">Thêm Dịch Vụ</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý Dịch Vụ</h4>
        <form action="{{route('dichvu.store')}}" method="post" class="addtb-form">
            @csrf
            <div class="form-addtb">
                <h4 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin dịch vụ</h4>
                <div class="row p-4 pt-0  pb-0">
                    <div class="col-md-6 p-3 pb-0">
                        <div class="mb-3">
                            <label for="madv" class="form-label" >Mã dịch vu:*</label>
                            <input type="madv" class="form-control" id="madv" placeholder="Mã dịch vụ" name="ma_service">
                        </div>
                        <div class="mb-3">
                            <label for="tendv" class="form-label" >Tên dịch vu:*</label>
                            <input type="tendv" class="form-control" id="tendv" placeholder="Tên dịch vụ" name="name_service">
                        </div>
                  
                    </div>
                    <div class="col-md-6 p-3  pb-0">
                        <div class="mb-3">
                            <label for="mota" class="form-label" >Mô tả:*</label>
                            <input type="mota" class="form-control" id="mota" placeholder="Mô tả" name="mota">
                        </div>
                    </div>
                    <h4 class="p-3 pt-0  mb-0 pb-0" style="color: #FF7506">Quy tắc cấp số</h4>
                    <div class="row">
                    <div class="col-md-12 checkbox">
                        <input type="hidden" value="0" name="check_auto">
                       <input type="checkbox" name="check_auto" value="1" id="checkbox">
                       <label for=""><b>Tăng tự động từ: </b>
                        <input type="text" name="start" value="0001" style="width: 61px;" class="mx-2 p-2 rounded-3 text-center">
                        đến:
                        <input type="text" name="end" value="9999" style="width: 61px;" class="mx-2 p-2 rounded-3 text-center">
                       </label>
                    </div>
                    <div class="col-md-12 checkbox">
                        <input type="hidden" value="0" name="check_prefix">
                       <input type="checkbox" value="1" name="check_prefix" id="checkbox">
                       <label class="form-check-label" for="flexCheckDefault1">
                      <b>  Prefix:</b>
                    </label><input type="text" name="prefix" value="0001" style="width: 61px; margin-left: 90px" class="p-2 rounded-3 text-center">
                    </div>
                    <div class="col-md-12 checkbox">
                        <input type="hidden" value="0" name="check_surfix">
                       <input type="checkbox" value="1" name="check_surfix" id="checkbox">
                       <label for=""><b>Surfix: </b>                       
                       </label>
                       <input type="text" name="surfix" value="0001" style="width: 61px; margin-left: 85px" class="p-2 rounded-3 text-center">
                    </div>
                    <div class="col-md-12 checkbox">
                        <input type="hidden" value="0" name="check_reset">
                       <input type="checkbox" value="1" name="check_reset" id="checkbox">
                       <label for=""><b>Reset mỗi ngày</b>
                       </label>
                    </div>
                    
                </div>
                </div>
            </div>
            <div class="button">
                <div class="text-center mt-3">
                    <button type="" class="btn btn-outline-warning button1 pt-3"  style="margin-right:24px;" ><a href="{{route('dichvu.index')}}"  class="nav-link">Hủy</a></button>
                    <button type="submit" class="btn btn-warning" style="background: #FF9138;">Thêm dịch vụ</button>
                </div>                    
            </div>
        </form>
        @if ($errors->any())  @foreach ($errors->all() as $error)
                      {{ $error }}
                    @endforeach   @endif
    </div>
    
@endsection






