@extends('admin.layouts.master')
@section('content')

<div class="container my-5">
     <div class="mx-2">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Add USER</h2>
        <form action="{{route('users.store')}}" method="post" class="px-md-5">
            @csrf
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                <div class="col-md-5">
                    <input type="text" placeholder="First Name" class="form-control py-2" name="FirstName"  value="{{old('FirstName')}}"/>
                    @error('FirstName')
                        <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-md-5">
                    <input type="text" placeholder="Last Name" class="form-control py-2" name="LastName" value="{{old('LastName')}}" />
                    @error('LastName')
                        <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="e.g. Jhon33" class="form-control py-2"  name="UserName" value="{{old('UserName')}}"/>
                    @error('UserName')
                        <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
                <div class="col-md-10">
                    <input type="email" placeholder="e.g. Jhon@example.com" class="form-control py-2" name="email" value="{{old('email')}}" />
                    @error('email')
                        <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
                <div class="col-md-10">
                    <input type="password" placeholder="Password" class="form-control py-2" name="password" />
                    @error('password')
                        <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Confirm Password:</label>
                <div class="col-md-10">
                    <input type="password" placeholder="Confirm Password" class="form-control py-2" name="password_confirmation"  id="password_confirmation"  />
                    @error('password_confirmation')
                        <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="text-md-end">
                <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Add User
                </button>
            </div>
        </form>
    </div>
</div>
 @endsection
