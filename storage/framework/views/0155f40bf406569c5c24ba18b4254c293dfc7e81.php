


<style>
    .dn{
height: 753px;
}
.img img{
height: 753px;
}

</style>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5 p-0  pt-5 bg-light dn ">
            <div class="row">
                <div class="col-md-12 p-0 mt-5 center-block">
                    <img src="<?php echo e(URL('img/logo.png')); ?>" class="mx-auto d-block" width="170px"  alt="">
                </div>
            </div>
            <div class="row p-5">
            <form action="<?php echo e(route('login.store')); ?>" class="p-0 mx-auto d-block" style="width:400px;" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3 mt-3">
                    <label for="username" class="form-label" >Tên Đăng Nhập*:</label>
                    <input type="username" class="form-control mx-auto d-block"   id="username" placeholder="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label" >Mật Khẩu*:</label>
                    <input type="password" class="form-control mx-auto d-block" id="pwd" placeholder="Password" name="password">
                </div>
                
                <div class=" mb-3"> 
                    <a href="<?php echo e(route('login.create')); ?>"  class="btn p-0" >Quên Mật Khẩu ?</a>
                </div>
                <button type="submit" class="btn btn-warning mx-auto d-block">Đăng Nhập</button>
            </form>
            </div>
        </div>
        <div class="col-md-7 p-0 img">
            <img src="<?php echo e(URL('img/banner.jpg')); ?>" class="w-100" alt="">
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layuot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Alta\quanly\resources\views/login/index.blade.php ENDPATH**/ ?>