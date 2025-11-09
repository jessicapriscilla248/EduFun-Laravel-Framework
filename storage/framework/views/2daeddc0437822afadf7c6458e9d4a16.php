<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>

    
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')); ?>">
</head>
<body>
    <p>Ini adalah view mahasiswa</p>
    
    <a href="<?php echo e(route('admin.dosen')); ?>">Link Dosen</a>

    <h1>Daftar Mahasiswa</h1>
    <h2>Nilai : <?php echo e($nilai); ?></h2>
    
    <?php if($nilai > 65): ?>
        
        <div class="alert alert-success" role="alert">
            Selamat anda lulus
        </div>
    <?php else: ?>
        
        <div class="alert alert-danger" role="alert">
            Mohon maaf, anda tidak lulus
        </div>
    <?php endif; ?>
    
    <ol>
        <?php 
            foreach ($mahasiswa as $index => $mhs) {
                echo "<li> $mhs - $jurusan[$index] $nilai</li>";
            }
        ?>

        <li><?php echo $mahasiswa[0]." - ".$jurusan[0] ?></li>
        <li><?php echo $mahasiswa[1]." - ".$jurusan[1] ?></li>
        <li><?php echo $mahasiswa[2]." - ".$jurusan[2] ?></li>


    </ol>
    
</body>
</html><?php /**PATH D:\Jessica\Semester 5\Web Programming\sesi3\resources\views/universitas/mahasiswa.blade.php ENDPATH**/ ?>