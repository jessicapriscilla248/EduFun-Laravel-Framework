

<?php $__env->startSection('konten'); ?>


<h3><?php echo e($course->nama); ?></h3>

<div class="row">
  <?php $__currentLoopData = $course->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-md-12 mb-3">
    <div class="card">
      <div class="card-body">
        <h5><?php echo e($article->judul); ?></h5>
        <p class="small text-muted"><?php echo e($article->created_at->format('d M Y')); ?> — <?php echo e($article->writer->nama); ?></p>
        <p class="card-excerpt"><?php echo $article->rangkuman; ?></p>
        <a href="<?php echo e(route('article.show', urlencode($article->judul))); ?>" class="btn btn-sm btn-primary">Read more…</a>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Jessica\Semester 5\Web Programming\Quiz 1\EduFun_Quiz1\resources\views/course/show.blade.php ENDPATH**/ ?>