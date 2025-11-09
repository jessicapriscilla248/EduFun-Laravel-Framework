
<?php $__env->startSection('popular', 'disabled'); ?>
<?php $__env->startSection('konten'); ?>

    <h3>Popular</h3>    
    <div class="row">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <img src="<?php echo e(asset('img/background.jpeg')); ?>" 
                class="img-fluid rounded" 
                alt="Article Image"
                style="height: 150px; object-fit: cover;">
        </div>
        <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h5><?php echo e($article->judul); ?></h5>
                <p class="small text-muted"><?php echo e($article->created_at->format('d M Y')); ?> | by:<?php echo e($article->writer->nama); ?></p>
                <p class="card-excerpt"><?php echo $article->rangkuman; ?></p>
                <a href="<?php echo e(route('article.show', urlencode($article->judul))); ?>" class="btn btn-sm btn-primary">Read more…</a>
            </div>
        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <?php echo e($articles->links('pagination::bootstrap-5')); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Jessica\Semester 5\Web Programming\Quiz 1\EduFun_Quiz1\resources\views/popular/index.blade.php ENDPATH**/ ?>