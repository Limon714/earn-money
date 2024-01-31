@extends('home.layout')
@section('content')
<form action="{{ url('my_post_update',$post->id) }}" class="p-8 bg-black rounded shadow mx-96" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title" class="text-2xl text-white form-label">Title</label>
    <input type="text" class="form-control" name="title" id="" value="{{ $post->title }}" style="width:525px" >
    <br>
    <label for="description" class="text-2xl text-white form-label">Description</label>
    <textarea name="description" class="form-text" id="" cols="60" rows="10">{{ $post->description }}</textarea>
   <br>
    <label for="title" class="text-2xl text-white form-label">Upload New Image</label>
    <br>
    <br>
        <div>
            <img src="/postImage/{{ $post->image }}" alt="image" width="200px" height="200px">
           <br>
        </div>
    <input type="file" name="image" id="">
    <br>
    <br>
    <input type="submit" value="Update" class="btn btn-dark">
    <br>
    <br>
</form>
@endsection