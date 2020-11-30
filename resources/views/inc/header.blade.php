        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{ asset('pdf_assets/main_logo.png') }}" height="40" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="{{ url('/admin') }}"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
                    {{-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> --}}
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        {{-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> --}}

                        
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('images/user.png') }}" alt="User Avatar">
                            <span class="user-info ml-2 mr-2"><small>Welcome, </small>{{ Auth::user()->name }}</span>
                        </a>

                        <div class="user-menu dropdown-menu">
                        {{-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile </a> --}}

                            {{-- <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a> --}}

                            {{-- <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> --}}

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->