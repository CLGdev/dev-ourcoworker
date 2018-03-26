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
                                            <li class="nav-item  dropdown">
                                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Login
                                                            <span class="icon-arrow-down"></span>
                                                          </a>
                                                {{--  <a href="{{ route('login') }}" class="nav-link" >Login</a>  --}}
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                                        {{ csrf_field() }}
                                
                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                                
                                                            <div class="col-md-12">
                                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                
                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                            <label for="password" class="col-md-12 control-label">Password</label>
                                
                                                            <div class="col-md-12">
                                                                <input id="password" type="password" class="form-control" name="password" required>
                                
                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                
{{--                                                          <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>  --}}
                                
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Login
                                                                </button>
                                                                
                                                                <a href="{{ route('register') }}" class="btn btn-link " >Register</a>
                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    Forgot Your Password?
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <p style="text-align:center;">- OR -</p>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                              <a href="{{url('/redirect')}}" class="btn btn-primary">Login with Facebook</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
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