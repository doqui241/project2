



<?php $__env->startSection('content'); ?>
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Dịch Vụ > Danh Sách Dịch Vụ ><b style="color: #FF7506">Thêm Dịch Vụ</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý Dịch Vụ</h4>
        <form action="" method="post" class="addtb-form">
            <div class="form-addtb">
                <h4 class="p-3  mb-0 pb-0" style="color: #FF7506">Thông tin dịch vụ</h4>
                <div class="row p-4 pt-0  pb-0">
                    <div class="col-md-6 p-3 pb-0">
                        <div class="mb-3">
                            <label for="madv" class="form-label" >Mã dịch vu:*</label>
                            <input type="madv" class="form-control" id="" placeholder="Mã dịch vụ" name="madv">
                        </div>
                        <div class="mb-3">
                            <label for="tendv" class="form-label" >Tên dịch vu:*</label>
                            <input type="tendv" class="form-control" id="" placeholder="Tên dịch vụ" name="tendv">
                        </div>
                  
                    </div>
                    <div class="col-md-6 p-3  pb-0">
                        <div class="mb-3">
                            <label for="mota" class="form-label" >Mô tả:*</label>
                            <input type="mota" class="form-control" id="mota" placeholder="Mô tả" name="mota">
                        </div>
                    </div>
                    <h4 class="p-3  mb-0 pb-0" style="color: #FF7506">Quy tắc cấp số</h4>
                    <div class="col-md-12">
                       <input type="checkbox" name="" id="">
                    </div>
                </div>
            </div>
            <div class="button">
                <div class="text-center mt-3">
                    <button type="" class="btn btn-outline-warning button1 pt-3"  style="margin-right:24px;" ><a href="<?php echo e(route('thietbi.index')); ?>"  class="nav-link">Hủy</a></button>
                    <button type="submit" class="btn btn-warning" style="background: #FF9138;">Thêm dịch vụ</button>
                </div>                    
            </div>
        </form>
    </div>
    
<?php $__env->stopSection(); ?>







<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Alta\quanly\resources\views/dichvu/editdv.blade.php ENDPATH**/ ?>