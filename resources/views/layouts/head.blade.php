        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="" alt="Logo"></a>
                    {{-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> --}}
                    <a href="#" class="">Home</a>
                    
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        

                        
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
                            <i class="fa fa-power -off"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->