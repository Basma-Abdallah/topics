@extends('public.layouts.master')
@section('content')

<main>

@include('public.includes.navbar')

 <section class="hero-section d-flex justify-content-center align-items-center" style="height: 100vh;">
     <div class="container">
         <div class="row">

             <div class="col-lg-8 col-12 mx-auto">
                 <h1 class="text-white text-center"><i class="bi bi-exclamation-triangle"
                         style="font-size: 150px;"></i></h1>
                 <h6 class="text-center">500 error</h6>
                    <div class="container">
                             <h1>Oops, something went wrong!</h1>
                             <p>We're working on it, please try again later.</p>
                    </div>

             </div>
             <div class="col-12 text-center">
                 <a href="{{Route('login')}}" class="text-center fs-6 link mt-5">Back to Home Page ✈</a>
             </div>
         </div>
     </div>
 </section>
</main>

@endsection


@endsection

