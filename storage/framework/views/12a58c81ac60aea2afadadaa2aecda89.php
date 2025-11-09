<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap5.2/css/bootstrap.min.css')); ?>">
</head>
<body>
    <p>Ini adalah view dari Dosen</p>

    <a href="<?php echo e(route('admin.mahasiswa', $n=90)); ?>">Link Mahasiswa</a>

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

</body>
</html>


<?php /**PATH D:\Jessica\Semester 5\Web Programming\sesi3\resources\views/universitas/dosen.blade.php ENDPATH**/ ?>