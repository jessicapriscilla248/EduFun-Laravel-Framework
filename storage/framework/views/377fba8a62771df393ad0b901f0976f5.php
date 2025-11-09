
<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('home', 'disabled'); ?>

<?php $__env->startSection('konten'); ?>
<div class="hero mb-4 position-relative">
<div class="container-fluid p-0">
    <img src="<?php echo e(asset('img/background.jpeg')); ?>" 
        class="img-fluid w-100" 
        style="height: 300px; object-fit: cover;" 
        alt="EduFun Background">
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
    <h1 class="display-4 fw-bold">EduFun</h1>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <h3>Artikel Terbaru</h3>
        <div class="row">
        <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mb-4">
                <div class="col-md-3">
                    <img src="<?php echo e(asset('img/background.jpeg')); ?>" 
                        class="img-fluid rounded" 
                        alt="Article Image"
                        style="height: 150px; object-fit: cover;">
                </div>
            
                <div class="col-md-9">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($article->judul); ?></h5>
                            <p class="card-text text-muted small">
                                <?php echo e($article->created_at->format('d M Y')); ?> | by: 
                                <?php echo e($article->writer->nama); ?>

                            </p>
                            <p class="card-text card-rangkuman"><?php echo e($article->rangkuman); ?>..</p>
                            <a href="<?php echo e(route('article.show', $article->judul)); ?>" class="btn btn-sm btn-primary">Read more…</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Jessica\Semester 5\Web Programming\Quiz 1\EduFun_Quiz1\resources\views/home.blade.php ENDPATH**/ ?>