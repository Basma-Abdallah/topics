@extends('public.layouts.master')

@section('content')
@include('public.includes.navbar')
@foreach($topic as $All)

    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 mb-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $All->CategoryName }}</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">{{ $All->Title }}</h2>
                        <div class="d-flex align-items-center mt-5">
                            <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>
                            <form action="{{ route('topics.mark', $All->id) }}" method="POST">
                                @csrf
                                @if (session()->has('marked_' . $All->id))
                                    <button type="submit" class="custom-icon bi-bookmark-fill smoothscroll" style="border:0px;background: transparent;"></button>
                                @else
                                    <button type="submit" class="custom-icon bi-bookmark smoothscroll" style="border:0px;background: transparent;"></button>
                                @endif
                            </form>
                                    <!-- <p>Number of Views: {{ $All->NumberOfViews }}</p> -->
                        </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="topics-detail-block bg-white shadow-lg">
                        <img src="{{asset('assets/admin/images/topics/'.$All->image)}}" class="topics-detail-block-image img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </header>


    <section class="topics-detail-section section-padding" id="topics-detail">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 m-auto">
                    <h3 class="mb-4">{{ $All->Title }}</h3>

                    <p>{{ $All->Content }}</p>
                </div>

            </div>
        </div>
    </section>

@endforeach
@include('public.includes.newsletterTopicsDetail')
@endsection
