@extends('admin.layout')
@section('content')
<div class="container">
    <h1 class="mx-5 font-bold" style="font-size: 34px"> Update Information</h1>
    <br>
    <form action="{{ url('update_post',$post->id) }}" class="mx-5" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-text text-dark" name="title" id="" value="{{ $post->title }}" style="width:525px" >
        <br>
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-text text-dark" id="" cols="60" rows="10">{{ $post->description }}</textarea>
       <br>
        <label for="title" class="form-label">Update Image</label>
        <br>
        <div>
            <img src="/postImage/{{ $post->image }}" alt="image" width="200px" height="200px">
           <br>
        </div>
        <input type="file" name="image" id="">
        <br>
        <br>
        <input type="submit" value="Update" class="btn btn-primary">
        <br>
        <br>
    </form>
</div>
@endsection