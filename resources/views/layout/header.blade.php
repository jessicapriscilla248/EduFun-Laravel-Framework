

<div class="row">
    {{-- baris 2 menu--}}
    <div class="col-12 ">
        <!-- baru -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img height="50" width="75" src="{{ asset('img/LogoEduFun.JPG') }}" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('course.show', 1) }}">Data Science</a></li>
                        <li><a class="dropdown-item" href="{{ route('course.show', 2) }}">Network Security</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link @yield('writers')" href="{{ route('writers.index') }}">Writers</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link @yield('aboutUs')" href="{{ route('aboutUs') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link @yield('popular')" href="{{ route('popular.index')}}">Popular</a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>

        
    </div>
</div>