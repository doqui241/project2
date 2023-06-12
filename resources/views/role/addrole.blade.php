
@extends('dashboard')


@section('content')
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Cài đặt hẹ thống > Quản lý vai trò > <b style="color: #FF7506">Thêm vai trò</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý vai trò</h4>
        <form action="{{route('role.store')}}" method="POST" class="addtb-form">
            @csrf
            <div class="form-addvaitro">
                <h4 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin vai trò</h4>
                <div class="row p-4 pt-0  pb-0">
                    <div class="col-md-6 p-3 pb-0">
                        <div class="mb-3">
                            <label for="vaitro" class="form-label" >Tên vai trò:*</label>
                            <input type="vaitro" class="form-control" id="" placeholder="Nhập tên vai trò" name="name_role">
                        </div>
                        <div class="mb-3">
                            <label for="mota" class="form-label" >Mô tả:*</label>
                            <input type="mota" class="form-control" style="height: 150px" id="" placeholder="Nhập mô tả" name="mota_role">
                        </div>
                        <p>* Là trường thông tin bắt buộc</p>
                    </div>
                    <div class="col-md-6 p-3  pb-0">
                        <div class="mb-3">
                            <label for="vaitro" class="form-label" >Phân quyển chức năng:*</label>
                            <div class="chucnang">
                                <h5 class="p-3  mb-0 pb-0" style="color: #FF7506">Nhóm chức năng A</h5>
                                <input type="checkbox" class="" name="" id="checkbox"><label for="">Tất cả</label>
                                <input type="checkbox" class="mt-1" name="" id="checkbox"><label for="">Chức năng x</label>
                                <input type="checkbox" class="mt-1" name="" id="checkbox"><label for="">Chức năng y</label>
                                <input type="checkbox" class="mt-1" name="" id="checkbox"><label for="">Chức năng z</label>
                                <h5 class="p-3  mb-0 pb-0" style="color: #FF7506">Nhóm chức năng B</h5>
                                <input type="checkbox" class="" name="" id="checkbox"><label for="">Tất cả</label>
                                <input type="checkbox" class="mt-1" name="" id="checkbox"><label for="">Chức năng x</label>
                                <input type="checkbox" class="mt-1" name="" id="checkbox"><label for="">Chức năng y</label>
                                <input type="checkbox" class="mt-1" name="" id="checkbox"><label for="">Chức năng z</label>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="button">
                <div class="text-center mt-3">
                    <button type="" class="btn btn-outline-warning button1 pt-3"  style="margin-right:24px;" ><a href="{{route('role.index')}}"  class="nav-link">Hủy</a></button>
                    <button type="submit" class="btn btn-warning" style="background: #FF9138;">Thêm</button>
                </div>                    
            </div>
        </form>
    </div>
    
@endsection






