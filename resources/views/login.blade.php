<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/images">
    <title>Document</title>
</head>
<body>
    <div class="img-centre">
      <a href="{{route('login')}}"><img src="/assets/images/logo.jpg" alt="UETCL_logo" class="responsive"></a>  
    </div>
   
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="{{route('admin.login')}}" class="mt-5 border p-4 bg-light shadow" method="POST">
                        @csrf
                        <h4 class="mb-5 text-secondary">Login into UETCL SYSTEM</h4>
                        @if (Session::get('fail'))
                           <div class="alert alert-danger">
                            {{Session::get('fail')}}
                           </div>
                        @endif
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}" required>
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>
                           
                            <div class="col-md-12">
                               <button class="btn btn-primary float-end">Login</button>
                            </div>
                        </div>
                    </form>
                    {{-- <p class="text-center mt-3 text-secondary">If you don't have account, Please <a href="#">Signup Now</a></p> --}}
                </div>
            </div>
        </div>
    </div>
</body>
</html>