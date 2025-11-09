
<?php $__env->startSection('writers', 'disabled'); ?>
<?php $__env->startSection('konten'); ?>

<h1>Our Writers:</h1>
<div class="row">
<?php $__currentLoopData = $writers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $writer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 mb-3">
        <div class="card text-center">
        <div class="card-body">
            <img src="<?php echo e(asset('img/background.jpeg')); ?>" class="rounded-circle mb-2" width="200" alt="">
            <h5 class="card-title"><?php echo e($writer->nama); ?></h5>
            <p class="text-muted">Spesialis <?php echo e($writer->spesialis); ?></p>
            <a href="<?php echo e(route('writers.show', $writer->id)); ?>" class="btn btn-sm btn-primary">Lihat Materi</a>
        </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Jessica\Semester 5\Web Programming\Quiz 1\EduFun_Quiz1\resources\views/writers/index.blade.php ENDPATH**/ ?>