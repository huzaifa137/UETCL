 @extends('layouts.header_footer_navbar')
 @section('content')
         <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">             
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="signup-form">
                            <form action="{{route('custom-search')}}" class="mt-5 border p-4 bg-light shadow" method="POST">
                                @csrf
                                <h4 class="mb-2 text-secondary">Search a Custom year</h4>
                                @if (Session::get('fail'))
                                   <div class="alert alert-danger">
                                    {{Session::get('fail')}}
                                   </div>
                                @endif
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <input type="date" name="year" class="form-control" placeholder="Enter Year" value="{{old('year')}}" required>
                                        <span class="text-danger">@error('year'){{$message}}@enderror</span>
                                    </div>
                                   
                                    <div class="col-md-12">
                                       <button class="btn btn-primary float-end">Search</button>
                                    </div>
                                </div>
                            </form>
                            {{-- <p class="text-center mt-3 text-secondary">If you don't have account, Please <a href="#">Signup Now</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
 @endsection
       