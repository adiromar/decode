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
                                <strong>Update User</strong> Form
                            </div>
                            <div class="card-body card-block">

                            @include('errors.errors')

                            <form action="{{ route('update_user', $user->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="full_name" value="{{ $user->name }}" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="email" value="{{ $user->email }}" class="form-control">
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
                                    <div class="col-12 col-md-9"><input type="text" id="email-input" name="phone" value="{{ $user->phone }}" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                        <div class="col-12 col-md-9">
                                            
                                            <select class="form-control" name="gender">
                                                <option value="male" {{ $user->gender == 'male' ? 'selected' : ''}}>Male</option>
                                                <OPTION value="female" {{ $user->gender == 'female' ? 'selected' : ''}}>Female</OPTION>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">User Role</label></div>
                                        <div class="col-12 col-md-9">
                                            
                                            <select class="form-control" name="user_role">
                                                <option value="3" {{ $user->roles()->first()->role == 3 ? 'selected' : ''}}>User</option>
                                                <OPTION value="2" {{ $user->roles()->first()->role == 2 ? 'selected' : ''}}>Admin</OPTION>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    {{-- <div class="row"> --}}
                                        <button type="submit" class="btn btn-success">Update User</button>
                                    {{-- </div> --}}
                                </form>
                            </div>

                        </div>
                    
                    </div>
                </div>
            </div>
          </div>
@endsection

