@extends('layouts.header_footer_navbar')
@section('content')
@include('include.message')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
    @if (Session::get('success'))
        <div class="alert alert-primary">
            {{Session::get('success')}}
        </div>
    @endif
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Case Record</h4>
                </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void()">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void()">Record</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit  Record</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.record')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{$info->id}}">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Police station</label>
                                        <input type="text" name="police_station" class="form-control" value="{{$info->police_station}}">
                                         <span style="color: red">@error('police_station'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Investigation officer</label>
                                        <select class="form-control" name="Investigation_officer" value="{{old('Investigation_officer')}}">
                                            <option value="">Select Officer</option>
                                            @foreach ($officers as $officer)
                                            <option value="{{$officer->Firstname}}">{{$data=$officer->Firstname}}</option>
                                            @endforeach
                                        </select>
                                        <span style="color: red"> @error('Investigation_officer'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Police Case Ref</label>
                                        <input type="text" name="Police_Case_Ref" class="form-control" value="{{$info->police_case_ref}}">
                                        <span style="color: red"> @error('Police_Case_Ref'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Inter Ref Number</label>
                                        <input type="text" name="Inter_Ref_Number" class="form-control" value="{{$info->Inter_ref_number}}">
                                        <span style="color: red"> @error('Inter_Ref_Number'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Transmission Line</label>
                                        <input type="text" name="Transmission_Line" class="form-control" value="{{$info->Transmission_Line}}">
                                        <span style="color: red"> @error('Transmission_Line'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <?php
                                            $data = $info->Case_Status
                                        ?>
                                        <label class="form-label" style="color:black;">Case Status</label>
                                        <select class="form-control" name="Case_Status">
                                            <option value="{{$data}}">{{$data}}</option>
                                            <option value="Open">Open</option>
                                            <option value="Close">Close</option>
                                            <option value="Court">Court</option>
                                        </select>
                                        <span style="color: red"> @error('Case_Status'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">particulars of the case</label>
                                        <textarea class="form-control" rows="5" name="particulars_of_the_case"></textarea>
                                        <span style="color: red"> @error('particulars_of_the_case'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Brief facts of the case</label>
                                        <textarea class="form-control" rows="5" name="Brief_facts_of_the_case"></textarea>
                                        <span style="color: red"> @error('Brief_facts_of_the_case'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Date</label>
                                        <input type="date" name="Date" class="form-control" value="{{$info->Date}}">
                                         <span style="color: red">@error('Date'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection