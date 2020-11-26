
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                <a href="{{ url('/admin') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Menu</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>
                        Patient Information
                    </a>
                    <ul class="sub-menu children dropdown-menu">                            
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('patient.create') }}">Create New</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('pat_rec') }}">View Record</a></li>
                    </ul>
                </li>

            
                @if(Auth::user()->roles()->first()->role == 'Admin')
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>
                        User Management
                    </a>
                    <ul class="sub-menu children dropdown-menu">                            
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('user.create') }}">Create New</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('user.index') }}">View Users</a></li>
                    </ul>
                </li>
                @endif
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
