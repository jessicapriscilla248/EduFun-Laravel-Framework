

<div class="row">
    
    <div class="col-12 ">
        <!-- baru -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img height="50" width="75" src="<?php echo e(asset('img/LogoEduFun.JPG')); ?>" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo e(route('course.show', 1)); ?>">Data Science</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('course.show', 2)); ?>">Network Security</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('writers'); ?>" href="<?php echo e(route('writers.index')); ?>">Writers</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('aboutUs'); ?>" href="<?php echo e(route('aboutUs')); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?php echo $__env->yieldContent('popular'); ?>" href="<?php echo e(route('popular.index')); ?>">Popular</a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>

        
    </div>
</div><?php /**PATH D:\Jessica\Semester 5\Web Programming\Quiz 1\EduFun_Quiz1\resources\views/layout/header.blade.php ENDPATH**/ ?>