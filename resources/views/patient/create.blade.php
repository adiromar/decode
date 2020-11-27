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
                                <strong>Patient Database</strong> Form
                            </div>
                            <div class="card-body card-block">
                            
                            @include('errors.errors')

                            <form action="{{ route('patient.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lab ID</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="lab_id" placeholder="Lab Id" class="form-control">
                                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Patient Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="patient_name" placeholder="Full Name" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter your email</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Age</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="password-input" name="patient_age" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="radio1" name="gender" value="male" class="form-check-input">Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Phone Number</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="phone" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="password-input" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group pb-3">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="password-input" name="address" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row form-group pt-3">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Refering Physician</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="refering_physician" placeholder="Refering Physician" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="specimen"  class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Site</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="specimen_coll_site"  class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="specimen_coll_date"  class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Time</label></div>
                                        <div class="col-12 col-md-9"><input type="datetime-local" name="specimen_coll_time" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Reporting Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="reporting_date" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Reporting Time</label></div>
                                        <div class="col-12 col-md-9"><input type="datetime-local" name="reporting_time" class="form-control">
                                            {{-- <small class="help-block form-text">Please enter a complex password</small> --}}
                                        </div>
                                    </div>

                                    
                                    {{-- <div class="row"> --}}
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    {{-- </div> --}}
                                </form>
                            </div>

                        </div>
                    
                    </div>
                </div>
            </div>
          </div>
@endsection

