@extends('public.layouts.master')


@section('content')

        @include('public.includes.navbar')
        @include('public.includes.header')
        @yield('mainpages-content')    

@endsection
