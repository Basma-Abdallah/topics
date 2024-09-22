@extends('admin.layouts.master')
@section('content')

    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">Unread Messages</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Message</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                            @foreach($messages as $message)
                            @if($message->ReadCondition == 0)
                            <tr>
                            <th scope="row">{{\Carbon\Carbon::parse($message->created_at)->format('d M Y')}}</th>
                            <td><a href="{{route('messDetails' , $message->id)}} " class="text-decoration-none text-dark">{{$message->Content}}</a></td>
                            <td>{{$message->Name}}</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="{{route ('DelMess', $message->id )}}" onclick=" return confirm('Are you sure you want to delete?')"><img src="{{asset('assets/admin/images/trash-can-svgrepo-com.svg')}}"></a></td>
                            </tr>
                            @endif
                            @endforeach




                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">Read Messages</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless display" id="_table2">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Message</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                           @foreach($messages as $message)
                            @if($message->ReadCondition == 1)
                            <tr>
                            <th scope="row">{{\Carbon\Carbon::parse($message->created_at)->format('d M Y')}}</th>
                            <td><a href="{{route('messDetails' , $message->id)}}" class="text-decoration-none text-dark">{{$message->Content}}</a></td>
                            <td>{{$message->Name}}</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="{{route ('DelMess', $message->id )}}" onclick=" return confirm('Are you sure you want to delete?')" ><img src="{{asset('assets/admin/images/trash-can-svgrepo-com.svg')}}"></a></td>
                            </tr>
                            @endif
                            @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
