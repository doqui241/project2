



<?php $__env->startSection('content'); ?>
    <div class="container-fluid m-3">
        <div class="duongdan " style="margin-top:24px;">
            <p>Cấp số > Danh sách cấp số > <b style="color: #FF7506">Cấp số mới</b></p>
        </div>
        <h4 style="color:#FF7506 " class=" mt-5">Quản lý cấp số</h4>
        <form action="" method="post" class="addtb-form">
            <div class="form-addtb">
                <h4 class="p-3  mb-4 pb-0 text-center" style="color: #FF7506">Cấp Số Mới</h4>
                <div class="row p-4 pt-0  pb-0">
                            <label for="madv" id="" class="form-label text-center" ><b> Dịch vụ khách hàng lựa chọn:*</b></label>
                            <select class="form-select mx-auto d-block" style="width:400px;">
                                <option>Tất Cả</option>
                                <option>Kiosk</option>
                                <option>Hệ thống</option>
                            </select>
                            <div class="buttoncs mt-5">
                                <div class="text-center mx-auto d-block mt-3">
                                    <button type="" class="btn btn-outline-warning button1 pt-3"  style="margin-right:24px;" ><a href="<?php echo e(route('capso.index')); ?>"  class="nav-link">Hủy bỏ</a></button>
                                    <button type="submit" class="btn btn-warning" style="background: #FF9138;">In số</button>
                                </div>                    
                            </div>
                </div>
            </div>
            
        </form>
    </div>
    
<?php $__env->stopSection(); ?>







<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Alta\quanly\resources\views/capso/addcs.blade.php ENDPATH**/ ?>