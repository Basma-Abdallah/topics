@extends('public.layouts.master')

@section('content')

@include('public.includes.navbar')
 <section class="hero-section d-flex justify-content-center align-items-center" style="height: 100vh;">
     <div class="container">
         <div class="row">

             <div class="col-lg-8 col-12 mx-auto">
                         <div class="container">
                             <h1>Oops, something went wrong!</h1>
                             <h4>We're working on it, please try again later.</h4>
                         </div>
             </div>
             <div class="col-12 text-center">
                 <a href="{{ route('login') }}" class="text-center fs-6 link mt-5">Back to Home Page ✈</a>
             </div>
         </div>
     </div>
 </section>


@endsection



