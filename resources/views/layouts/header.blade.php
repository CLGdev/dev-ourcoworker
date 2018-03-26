  <div class="bg transition">
        <div class="container-fluid fixed">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">OurCoworker</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-menu"></span>
          </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                              <ul class="navbar-nav">
                                  
                                @if (Route::has('login'))
                                        @auth
                                            <li class="nav-item">
                                                <a href="{{ url('/home') }}" class="nav-link" >Home</a>
                                            </li>
                                        @else                                        
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}" class="nav-link" >Login</a>
                                            </li>                                        
                                            <li class="nav-item">
                                                <a href="{{ route('register') }}" class="nav-link" >Register</a>
                                            </li>
                                        @endauth
                                @endif
{{--                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Explore
                 <span class="icon-arrow-down"></span>
               </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Listing
                <span class="icon-arrow-down"></span>
              </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages
                <span class="icon-arrow-down"></span>
              </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>  --}}
                                <li><a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> New Coworker</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>