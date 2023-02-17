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
                    <h4>Case Status</h4>
                </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void()">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void()">Status</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Status</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                   
                    <div class="card-body">
                        <form action="{{route('update.status')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{$info->id}}">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">CRB</label>
                                        <input type="text" name="CRB" class="form-control" value="{{old('CRB')}}">
                                         <span style="color: red">@error('CRB'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Location of court</label>
                                        <input type="text" name="Location_of_court" class="form-control" value="{{old('Location_of_court')}}">
                                         <span style="color: red">@error('Location_of_court'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Police station case Ref </label>
                                        <input type="text" name="Police_station_case_Ref" class="form-control" value="{{$info->police_case_ref}}">
                                        <span style="color: red"> @error('Police_station_case_Ref'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Case parties UG vs</label>
                                        <input type="text" name="Case_parties_UG_vs" class="form-control" value="{{old('Case_parties_UG_vs')}}">
                                        <span style="color: red"> @error('Case_parties_UG_vs'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Due Date</label>
                                        <input type="date" name="Due_Date" class="form-control" value="{{old('Due_Date')}}">
                                         <span style="color: red">@error('Due_Date'){{$message}}@enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Police & I/Os</label>
                                        <input type="text" name="Police__IOs" class="form-control" value="{{old('Police__IOs')}}">
                                        <span style="color: red"> @error('Police__IOs'){{$message}} @enderror</span>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Witnesses</label>
                                        <textarea class="form-control" rows="5" name="Witnesses"></textarea>
                                        <span style="color: red"> @error('Witnesses'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Evidence on Record</label>
                                        <textarea class="form-control" rows="5" name="Evidence_on_Record"></textarea>
                                        <span style="color: red"> @error('Evidence_on_Record'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Case facilitation</label>
                                        <input type="text" name="Case_facilitation" class="form-control" value="{{old('Case_facilitation')}}">
                                        <span style="color: red"> @error('Case_facilitation'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" style="color:black;">Status</label>
                                        <select class="form-control" name="Status" value="{{old('Status')}}">
                                            <option value="Ongoing">Ongoing</option>
                                            <option value="partially completed">partially completed</option>
                                        </select>
                                        <span style="color: red"> @error('Status'){{$message}} @enderror</span>
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