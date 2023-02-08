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
                    <h4>Edit Officer</h4>
                </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void()">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void()">Officer</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add  Officer</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    
                    <div class="card-body">
                        <form action="{{route('update.officer')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{$info->id}}">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Firstname</label>
                                        <input type="text" name="Firstname" class="form-control" value="{{$info->Firstname}}">
                                         <span style="color: red">@error('Firstname'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Lastname</label>
                                        <input type="text" name="Lastname" class="form-control" value="{{$info->Lastname}}">
                                        <span style="color: red"> @error('Lastname'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Department</label>
                                        <input type="text" name="Department" class="form-control" value="{{$info->Department}}">
                                        <span style="color: red"> @error('Department'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Role</label>
                                        <input type="text" name="Role" class="form-control" value="{{$info->Role}}">
                                        <span style="color: red"> @error('Role'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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