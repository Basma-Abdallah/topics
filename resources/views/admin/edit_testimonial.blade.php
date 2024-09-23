@extends('admin.layouts.master')
@section('content')

<div class="container my-5">
    <div class="mx-2">
        <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Testimonial</h2>
        <form action="{{route ('updateTes' , $testimonial->id)}}" method="post" class="px-md-5" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
                <div class="col-md-10">
                    <input type="text" placeholder="e.g. Jhon Doe" class="form-control py-2"name="Name" value="{{old('Name' ,  $testimonial['Name'])}}" />
                </div>
                @error('Name')
                        <div class="alert alert-warning">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                <div class="col-md-10">
                    <textarea  id="" rows="5" class="form-control" name="Content" >{{old('Content' , $testimonial['Content'])}}</textarea>
                </div>
                @error('Content')
                        <div class="alert alert-warning">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
                <div class="col-md-10">
                    <input type="hidden" name="Published" value="0">
                    <input type="checkbox" class="form-check-input" style="padding: 0.7rem;"   name="Published" value="1" @checked(old('Published', $testimonial->Published)) />
                </div>
            </div>
            <hr>
            <div class="form-group mb-3 row">
                <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                <div class="col-md-10">
                    <input type="file" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;"  name="Image" id="Image"/>
                    <img src="{{asset('assets/admin/images/testimonials/'. $testimonial->Image)}}" alt="" style="width: 10rem;"/>
                </div>
                @error('Image')
                        <div class="alert alert-warning">{{$message}}</div>
                @enderror
            </div>
            <div class="text-md-end">
                <button type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                    Edit Testimonial
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
