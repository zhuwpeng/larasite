<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
  <a class="navbar-brand" href="/">{{config('app.name', 'LaraSite')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    
    <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-link" href="/posts/create">Create Post</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>-->




<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!--<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>-->
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/videos">Videos</a>
                </li>
          <!--      <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>-->
          <!--      <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>-->
              </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
<!--                    <li class="nav-item">
                        
                    </li>-->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!--<svg width="10%" height="200" viewBox="0 0 100 100" preserveAspectRatio="none" style="
    height: 200px;
    position: absolute;
    width: 10%;
    display: inline-block;
    overflow: hidden;
    background: #343a40;
    z-index: -2;
    margin: 0;
"><circle cx="100" cy="100" r="90" fill="#f8fafc"></circle></svg>
<svg style="height: 200px;position: absolute;left:10%;width: 80%;overflow: hidden;background: #343a40;display: inline-block;z-index: -2;" width="80%" height="100" viewBox="0 0 100 100">
    <path d="M-350 10 l0 0 l850 0 l0 90 l-850 90 z " style="
    width: 100%;
    /* color: #f8fafc; */
" fill="#f8fafc"></path>
</svg>
<svg width="10%" height="200" viewBox="100 0 100 100" preserveAspectRatio="none" style="height: 200px;position: absolute;width: 10%;overflow: hidden;background: #343a40;z-index: -2;left: 90%;">
    <circle cx="100" cy="100" r="90" fill="#f8fafc"></circle>
</svg>-->