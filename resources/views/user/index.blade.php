@extends('inc.app')
@section('content')

        {{-- custom breadcrumb --}}
        <div class="custom-bread">
            <div class="">
                <div class="brd">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/admin') }}" class="adm-link"><i class="fa fa-home"></i> Home </a></li>
                        <li><span class="ml-2 mr-2"><i class="fa fa-angle-right"></i></span></li>
                        <li class="active"> {{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.breadcrumbs-->

       <!-- Content -->
       <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $title }}</strong>
                        </div>
                        <div class="card-body">
                <table id="bootstrap-data-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Role</th>
                            <th>Created</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                         $k = 1;   
                        @endphp
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $k }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles()->first()->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
                                {{-- <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                                <form action="{{route('user.destroy', $user->id)}}" onclick="event.preventDefault();
                                    var r=confirm('Are you sure you want to delete this item?');
                                    if(r== true){ this.submit(); }" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <input type="submit" class="btn btn-danger btn-sm mt-2" value="Delete">
                                    </form>
                            </td>
                        </tr>
                        @php
                            $k++;
                        @endphp
                        @endforeach
                        
                    </tbody>
                </table>
                        </div>
                    </div>
                </div>
            
                
                
                
            </div>

        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
    <div class="clearfix"></div>

@endsection