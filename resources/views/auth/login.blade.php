<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'topics website') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin/css//dataTables.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css//main.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css//styles.css')}}">
</head>
<body class="registeration-wrapper" style="background-image: linear-gradient(rgba(255, 255, 255, 0.735), rgba(0, 0, 0, 0.5));overflow-y: hidden;">
<div class="container my-5 bg-white rounded-3">
    <div class="row">
        <div class="col-md-5 d-none d-md-block img-wrapper">
            <img src="{{asset('assets/admin/images/rear-view-young-college-student.jpg')}}" alt="">
        </div>
        <div class="col-md-7">
            <form method="POST" action="{{ route('login') }}" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
            @csrf
                <h3 class="fw-semibold mb-5">LOGIN FORM</h3>
                <div class="input-group mb-3">
                    <input type="text" placeholder="Username" class="form-control" name="UserName" value="{{ old('UserName') }}" >
                    <img src="{{asset('assets/admin/images/user-svgrepo-com.svg')}}" alt="" class="input-group-text">
                </div>
                @error('UserName')
						<div class="alert alert-warning">{{$message}}</div>
				@enderror
                <div class="input-group mb-3">
                    <input type="password" placeholder="Password" class="form-control " name="password">
                    <img src="{{asset('assets/admin/images/password-svgrepo-com.svg')}}" alt="" class="input-group-text">
                </div>
                  @error('password')
                        <div class="alert alert-warning">{{$message}}</div>
                  @enderror
                <button  type="submit" class="btn btn-dark px-5 mb-2">
                    LOGIN
                    <img src="{{asset('assets/admin/images/arrow-sm-right-svgrepo-com.svg')}}" alt="">
                </button>
                <a href="{{route('register')}}" class="fw-semibold fs-6 text-decoration-none text-dark">New User?</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
