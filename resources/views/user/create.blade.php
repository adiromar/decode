@extends('inc.app')

{{-- @section('head')
    @include('layouts.head')
@endsection --}}

@section('content')
          <!-- Content -->
          <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Create New User</strong> Form
                            </div>
                            <div class="card-body card-block">

                            @include('errors.errors')

                            <form action="{{ route('create_user') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="full_name" placeholder="Full Name" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="email" placeholder="E-mail" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="email-input" name="password" placeholder="Password" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Confirm Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password" id="email-input" name="password_confirmation" placeholder="Confirm Password" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Phone</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="phone" placeholder="" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                        <div class="col-12 col-md-9">
                                            
                                            <select class="form-control" name="gender">
                                                <option value="male" >Male</option>
                                                <OPTION value="female" >Female</OPTION>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">User Role</label></div>
                                        <div class="col-12 col-md-9">
                                            
                                            <select class="form-control" name="user_role">
                                                <option value="3" >User</option>
                                                <OPTION value="2" >Admin</OPTION>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    {{-- <div class="row"> --}}
                                        <button type="submit" class="btn btn-success">Create User</button>
                                    {{-- </div> --}}
                                </form>
                            </div>

                        </div>
                    
                    </div>
                </div>
            </div>
          </div>
@endsection

