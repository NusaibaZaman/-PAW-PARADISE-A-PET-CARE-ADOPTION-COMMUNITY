
<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('index')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('adoption')}}">Adoption</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('blog')}}">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('vethome')}}">Vet Information</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            @if (Route::has('login'))
                            @auth

                            <li class="navbar-nav" style="padding-right:15px;">
                                    <a class="nav-item"
									style="width:110%; color:#ffffff; background-color:#b08ead; border-color:#b08ead; border-style:outset; border-width:15px; border-radius: 25px;"
									href="{{url('vpet')}}">Your VPet</a>
                             </li>

                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input type="submit" value="Logout">

                            </form>
                            @else
                            <a id="login_001" href="{{ route('login') }}"><i class="btn btn-white"></i>Login</a>
                            <a id="login_001" href="{{ route('register') }}"><i class="btn btn-white"></i>Register</a>

                            @endauth

                            @endif
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
