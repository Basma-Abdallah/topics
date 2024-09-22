@extends('public.layouts.master')
       

@section('content')
       @include('public.includes.navBarIndex')

       @include('public.includes.searchSection')

       @include('public.includes.featuredSection')
       
       @include('public.includes.BrowseTopicsSection')
       
       @include('public.includes.timelineSection')

       @include('public.includes.QuestionsSection')
       
       @include('public.includes.testimonials')

       @include('public.includes.GetInTouchSection')

@endsection

   

       