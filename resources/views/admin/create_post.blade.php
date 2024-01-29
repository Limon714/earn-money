@extends('admin.layout')
@section('content')
@if (session()->has('message'))
    <div class="alert alert-success mx-5" style="width:525px">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

        {{ session()->get('message') }}

    </div>
    
@endif
<form action="{{ url('add_post') }}" class="mx-5" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="" placeholder="Enter your title" style="width:525px" >
    <br>
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-text" id="" cols="60" rows="10"></textarea>
   <br>
    <label for="title" class="form-label">Upload Image</label>
    <br>
    <input type="file" name="image" id="">
    <br>
    <br>
    <input type="submit" value="submit" class="btn btn-primary">
    <br>
    <br>
</form>
@endsection