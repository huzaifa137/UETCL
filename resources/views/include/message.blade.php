@if (count($errors)>0)
    @foreach ($errors as $error)
            <div class="alert alert-danger">
                {{$errors}}
            </div>
    @endforeach
@endif


@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif


@if (session('error'))
    <div class="alert alert-danger">
        {{success('error')}}
    </div>
@endif