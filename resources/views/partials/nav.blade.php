<div class="cont-nav">

    <nav class="navbar navbar-expand-lg navbar-light">

        <a class="navbar-brand" href="{{route('home')}}"><img class="logoNav" src={{asset('img\netflix-logo.png')}} alt="" class="imgBrand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'home' || Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}" href="#">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == 'home' || Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('home')}}">MOVIES
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">SERIES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">VIDEOS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">NEWS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        INFO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>
</div>
