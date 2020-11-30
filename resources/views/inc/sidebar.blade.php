
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="bdr-li">
                <a href="{{ url('/admin') }}"><i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-title bdr-li">Menu</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown bdr-li">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop mr-3"></i>
                        Patient Information
                    </a>
                    <ul class="sub-menu children dropdown-menu">                            
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('patient.create') }}">Create New</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('pat_rec') }}">View Record</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown bdr-li">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file mr-3"></i>
                        Patient's Report
                    </a>
                    <ul class="sub-menu children dropdown-menu">                            
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('report.index') }}">View Report</a></li>
                    </ul>
                </li>
                
                @if(Auth::user()->roles()->first()->role == 'Admin')
                <li class="menu-item-has-children dropdown bdr-li">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users mr-3"></i>
                        User Management
                    </a>
                    <ul class="sub-menu children dropdown-menu">                            
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('user.create') }}">Create New</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('user.index') }}">View Users</a></li>
                    </ul>
                </li>
                @endif

                <li class="menu-item bdr-li">
                    <a id="menuToggle" class="menutoggle"><i class="menu-icon fa fa-angle-double-right"></i></a>
                </li>
                
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
