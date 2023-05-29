
<?php $__currentLoopData = $errors -> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $massage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="error-message" style="color:red";>   
        <ul>       
                <li><?php echo e($massage); ?></li>
        </ul>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\Alta\quanly\resources\views/alert.blade.php ENDPATH**/ ?>