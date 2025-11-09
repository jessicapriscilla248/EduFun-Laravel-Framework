<div class="row">
    
    <div class="col-2 ">
        <img height="50" width="75" src="<?php echo e(asset('img/kucing.webp')); ?>" alt="">
    </div>
</div>
<div class="row">
    
    <div class="col-12 ">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            
                            <a class="nav-link <?php echo $__env->yieldContent('menuMahasiswa'); ?>" aria-current="page" href="<?php echo e(route('admin.mahasiswa', $b=65)); ?>">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            
                            <a class="nav-link <?php echo $__env->yieldContent('menuDosen'); ?>" href="<?php echo e(route('admin.dosen')); ?>">Dosen</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div><?php /**PATH D:\Jessica\Semester 5\Web Programming\sesi4\resources\views/layout/header.blade.php ENDPATH**/ ?>