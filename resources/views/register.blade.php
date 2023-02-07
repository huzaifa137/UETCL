<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>..:: UETCL ::..</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="{{route('admin.add')}}" class="mt-5 border p-4 bg-light shadow" method="POST">
                        @csrf
                        <h4 class="mb-5 text-secondary">Create a new Administrator Account</h4>
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Admin Name<span class="text-danger">*</span></label>
                                <input type="text" name="Admin_name" class="form-control" placeholder="Enter Admin Name" value="{{old('Admin_name')}}">
                                <span class="text-danger">@error('Admin_name'){{$message}}@enderror</span>
                            </div>
    
                            <div class="mb-3 col-md-12">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
    
                            <div class="mb-3 col-md-12">
                                <label>Phone number<span class="text-danger">*</span></label>
                                <input type="number" name="phonenumber" class="form-control" placeholder="Enter phone number" value="{{old('phonenumber')}}">
                                <span class="text-danger">@error('phonenumber'){{$message}}@enderror</span>
                            </div>
    
                            <div class="mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Enter Password again">
                                <span class="text-danger">@error('confirm_password'){{$message}}@enderror</span>
                            </div>

                            <div class="col-md-12">
                               <button class="btn btn-primary float-end">Signup Now</button>
                            </div>
                        </div>
                    </form>
                 
                    <p class="text-center mt-3 text-secondary">Return back to, <a href="{{route('dashboard')}}">Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>