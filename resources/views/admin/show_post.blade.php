@extends('admin.layout')
@section('content')
       
        <div class="container">
            @if (session()->has('message'))
                     <div class="mx-5 alert alert-danger" style="width:925px">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        
                        {{ session()->get('message') }}
                    </div>
                
            @endif
            <table class="table">
              <thead>
               
                    
             
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>User Name</th>
                  <th>Image</th>
                  <th>Post Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($post as $d)
                <tr>
                  <td>{{ $d->title }}</td>
                  <td>{{ $d->description }}</td>
                  <td>{{ $d->name }}</td>
                  <td>
                    <img src="postImage/{{ $d->image }}" alt="post image" width="40px" height="40px">
                    </td>
                  <td>{{ $d->post_status }}</td>
                  <td>
                    
                    <a wire:navigate href="{{ url('edit_post', $d->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ url('delete_post', $d->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?')">Delete</a>
                  </td>


                </tr>      
                @endforeach
              </tbody>
            </table>
          </div>
        
  @endsection    
