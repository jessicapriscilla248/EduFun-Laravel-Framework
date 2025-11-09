

<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="hero mb-4 position-relative">
        <div class="container-fluid p-0">
            <img src="<?php echo e(asset('img/background.jpeg')); ?>" 
                class="img-fluid w-100" 
                style="height: 300px; object-fit: cover;" 
                alt="EduFun Background">
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white"></div>
        </div>
    </div>

    <div class="col-md-12">
        <h2><?php echo e($article->course->nama); ?></h2>
        <p class="text-muted small"><?php echo e($article->created_at->format('d M Y')); ?> | by: <?php echo e($article->writer->nama); ?></p>

        <div class="content"><?php echo e($article->konten); ?></div>
    </div>

  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Jessica\Semester 5\Web Programming\Quiz 1\EduFun_Quiz1\resources\views/article/show.blade.php ENDPATH**/ ?>