@extends('admin.layouts.master')
@section('content')

  <div class="container my-5">
        <div class="mx-2">
            <h2 class="fw-bold fs-2 mb-5 pb-2">Edit Topic</h2>
            <form action="{{route('updateTopics', $topic['id'])}}" method="post" class="px-md-5" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-3 row">
                    <label for="Title" class="form-label col-md-2 fw-bold text-md-end">Topic Title:</label>
                    <div class="col-md-10">
                        <input type="text" placeholder="e.g. Design Patterns" class="form-control py-2"  name="Title" value="{{old('Title', $topic['Title'])}}"/>
                    </div>
                    @error('Title')
                            <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Category:</label>
                    <div class="col-md-10">
                    <select name="Category_id" id="" class="form-control py-1">
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                        <option value="{{$category['id']}}"   @selected(old('Category_id', $topic->Category_id) == $category->id )  >{{ $category['CategoryName']}}</option>
                        @endforeach
                        </select>
                    </div>
                    @error('category')
                            <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
                    <div class="col-md-10">
                        <textarea  id="" rows="5" class="form-control" name="Content" >{{old('Content', $topic['Content'])}}</textarea>
                    </div>
                    @error('Content')
                            <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end"   >Trending:</label>
                    <div class="col-md-10">
                        <input type="hidden" name="Trending" value="0">
                        <input type="checkbox" class="form-check-input" style="padding: 0.7rem;"  name="Trending"  value="1"  @checked(old('Trending', $topic->Trending )) />
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end" > Published:</label>
                    <div class="col-md-10">
                        <input type="hidden" name="Published" value="0">
                        <input type="checkbox" class="form-check-input" style="padding: 0.7rem;"  name="Published"  value="1"  @checked(old('Published' , $topic->Published  )) />
                    </div>
                </div>
                <hr>
                <div class="form-group mb-3 row">
                    <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control" style="padding: 0.7rem; margin-bottom: 10px;"  id="image" name="image"  />
                        @if($topic->image)
                        <img src="{{asset('assets/admin/images/topics/'. $topic->image)}}" alt="test" style="width: 10rem;" />
                    @else
                        <p>No image available</p>
                    @endif
                    </div>
                    @error('image')
                            <div class="alert alert-warning">{{$message}}</div>
                    @enderror
                </div>

                <div class="text-md-end">
                    <button  type="submit" class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
                        Edit Topic
                    </button>
                </div>
            </form>
        </div>
</div>
@endsection
