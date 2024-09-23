@extends('public.layouts.navbarCommon')

@section('OtherNavParts')

        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5 me-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('topicsList')}}">Topics Listing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactusForm')}}">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('testimonials')}}">Our Client Says</a>
                    </li>
                </ul>

                @include('public.includes.profile')
        </div>

@endsection

