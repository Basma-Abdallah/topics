@extends('public.layouts.mainPages')


@section('mainpages-content')

        <section class="section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h3 class="mb-4 pb-2">We'd love to hear from you</h3>
                        </div>

                        <div class="col-lg-6 col-12">
                        @if(session('Success'))
                            <div class="alert alert-success" id="successMessage">
                                {{ session('Success') }}
                            </div>
                        @endif

                        <script>
                            // Hide the success message after 5 seconds
                            setTimeout(function() {
                                var successMessage = document.getElementById('successMessage');
                                if (successMessage) {
                                    successMessage.style.display = 'none';
                                }
                            }, 5000); // 5000 milliseconds = 5 seconds
                        </script>
                            <form action="{{route('contactUs')}}" method="post" class="custom-form contact-form" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="Name" id="name" class="form-control" placeholder="Name" value="{{old('Name')}}" required >
                                            <label for="floatingInput">Name</label>
                                        </div>
                                        @error('Name')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="email" name="Email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" value="{{old('Email')}}" required>
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        @error('Email')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="Subject" id="subject" class="form-control" placeholder="Subject"  value="{{old('Subject')}}" required >
                                            <label for="floatingInput">Subject</label>
                                            @error('Subject')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="content" name="Content" placeholder="Tell me about the project">{{old('Content')}}</textarea>
                                            <label for="floatingTextarea">Tell me about the project</label>
                                            @error('Content')
                                        <div class="alert alert-warning">{{$message}}</div>
                                        @enderror
                                        </div>

                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto">
                                        <button type="submit" class="form-control">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        @include('public.includes.googleMap')

                    </div>
                </div>
            </section>

@endsection








