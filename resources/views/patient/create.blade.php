@extends('inc.app')

{{-- @section('head')
    @include('layouts.head')
@endsection --}}

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


          <!-- Content -->
          <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="main-content">
                    <h1>Patient Database Form</h1>

                    <div class="row pt-3">
                        <div class="col-md-12 col-12">
                            <div class="widget-box">
                                <div class="widget-header">
                                    <h4 class="widget-title lighter">{{ $title }}</h4>
                                </div>
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <form action="{{ route('patient.store') }}" method="post" enctype="multipart/form-data" class="">
                                            {{ csrf_field() }}

                                            <div class="form-horizontal">

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Lab Id</label>
                                                                <input type="text" name="lab_id" class="input-sm">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Patient Name <span class="req_red">*</span></label>
                                                                <input type="text" name="patient_name" class="input-sm" placeholder="Full Name" required>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Patient's Age<span class="req_red">*</span></label>
                                                                <input type="number" name="patient_age" class="input-sm" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Gender <span class="req_red">*</span></label>
                                                                <div class="form-check">
                                                                    <div class="radio">
                                                                        <label for="radio1" class="form-check-label ">
                                                                            <input type="radio" id="radio1" name="gender" value="male" class="form-check-input" required>Male
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
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Phone <span class="req_red">*</span></label>
                                                                <input type="text" name="phone" class="input-sm" required>
                                                            </div>

                                                            

                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                                <input type="text" name="email" class="input-sm" placeholder="E-mail">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Address <span class="req_red">*</span></label>
                                                                <input type="text" name="address" class="input-sm" required>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Refering Physician</label>
                                                                <input type="text" name="refering_physician" class="input-sm">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Specimen</label>
                                                                <input type="text" name="specimen" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Specimen Collection Site</label>
                                                                <input type="text" name="specimen_coll_site" class="input-sm">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>Specimen Collection Date</label>
                                                                <input type="date" name="specimen_coll_date" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Specimen Collection Time</label>
                                                                <input type="datetime-local" name="specimen_coll_time" class="input-sm">
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label>Reporting Date</label>
                                                                <input type="date" name="reporting_date" class="input-sm">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-10 col-12">
                                                        <input type="submit" class="btn btn-primary btn-sm ml-2" value="Submit">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                {{-- <div class="row">

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
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Patient Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="email-input" name="patient_name" placeholder="Full Name" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Age</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="password-input" name="patient_age" class="form-control">
                                            
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
                                            
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row form-group pt-3">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Refering Physician</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="refering_physician" placeholder="Refering Physician" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="specimen"  class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Site</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="specimen_coll_site"  class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="specimen_coll_date"  class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Specimen Collection Time</label></div>
                                        <div class="col-12 col-md-9"><input type="datetime-local" name="specimen_coll_time" class="form-control">
                                            
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Reporting Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" name="reporting_date" class="form-control">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="password-input" class=" form-control-label">Reporting Time</label></div>
                                        <div class="col-12 col-md-9"><input type="datetime-local" name="reporting_time" class="form-control">
                                            
                                        </div>
                                    </div>

                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                </form>
                            </div>

                        </div>
                    
                    </div>
                </div>  --}}

            </div>
          </div>
@endsection

