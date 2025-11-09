
<?php $__env->startSection('title', 'Menu Dosen'); ?>
<?php $__env->startSection('menuDosen', 'disabled'); ?>



<?php $__env->startSection('konten'); ?>
    <div class="row">
        
        <div class="col-8">
            <p>Ini adalah view dari Dosen</p>

            <a href="<?php echo e(route('admin.mahasiswa', $a=78)); ?>">Link Mahasiswa</a>

            <h1>Daftar Mahasiswa - Dosen</h1>
            <ol>

                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($mhs); ?> - <?php echo e($jurusan[$index]); ?> - <?php echo e($nilai[$index]); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <li><?php echo e($mahasiswa[0]); ?> - <?php echo e($jurusan[0]); ?> - <?php echo e($nilai[0]); ?></li>
                <li><?php echo e($mahasiswa[1]); ?> - <?php echo e($jurusan[1]); ?> - <?php echo e($nilai[1]); ?></li>
                <li><?php echo e($mahasiswa[2]); ?> - <?php echo e($jurusan[2]); ?> - <?php echo e($nilai[2]); ?></li>
                <li><?php echo e($mahasiswa[3]); ?> - <?php echo e($jurusan[3]); ?> - <?php echo e($nilai[3]); ?></li>
            </ol>

            <?php for($i=0 ; $i<=10 ; $i++): ?>
                <?php echo e($i); ?>

            <?php endfor; ?>
        </div>

        
        <div class="col-4">
            <h3>Belajar layout laravel</h3>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('list'); ?>
    <ul>
        <li>soto ayam</li>
        <li>es krim</li>
        <li>zuppa soup</li>
    </ul>
<?php $__env->stopSection(); ?>



    



    
        
        

        

        
        
    





<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Jessica\Semester 5\Web Programming\sesi4\resources\views/universitas/dosen.blade.php ENDPATH**/ ?>