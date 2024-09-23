@extends('admin.layouts.master')
@section('content')

    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Topics</h2>
                <a href="{{route ('addTopicForm')}}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new topic</a>
            </div>
            @if(session('sucess'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('sucess') }}
                </div>
            @endif
            @if(session('del'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('del') }}
                </div>
            @endif
            @if(session('edited'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('edited') }}
                </div>
            @endif

            @include('admin.includes.messageScript')
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col" >Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Content</th>
                            <th scope="col">No. of views</th>
                            <th scope="col">Published</th>
                            <th scope="col">Trending</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody  class="text-center" >
                        @foreach($topics as $topic)
                        <tr >
                            <th scope="row">{{  \Carbon\Carbon::parse($topic->created_at)->format('d M Y') }}</th>
                            <td ><a class="text-decoration-none text-dark" href="{{route('topicDetails' , $topic->id )}}">{{$topic->Title}}</a></td>
                            <td >{{$topic->CategoryName}}</td>
                            <td >{{ \Illuminate\Support\Str::limit($topic->Content, 10, $end='.....')}}</td>
                            <td  class="text-center">{{$topic->NumberOfViews}}</td>
                            <td>{{$topic->Published == 1 ? 'Yes':'No'}}</td>
                            <td>{{$topic->Trending  == 1 ? 'Yes':'No'}}</td>
                            <td >
                                <a class="text-decoration-none text-dark" href="{{route('editTopic' , $topic->id)}}">
                                    <img src="{{asset('assets/admin/images/edit-svgrepo-com.svg')}}">
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="text-decoration-none text-dark" href="{{route('TopicDelete' , $topic->id)}}" onclick=" return confirm('Are you sure you want to delete?')" >
                                    <img src="{{asset('assets/admin/images/trash-can-svgrepo-com.svg')}}" >
                                </a>
                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

 @endsection
