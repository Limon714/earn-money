@extends('admin.layout')
@section('content')
       
        <div class="container">
            @if (session()->has('message'))
                     <div class="mx-5 alert alert-danger" style="width:925px">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        
                        {{ session()->get('message') }}
                    </div>
                
            @endif

            @include('sweetalert::alert')
            <table class="table">
              <thead>
               
                    
             
                <tr>
                  <th>Title</th>
                  
                  <th>User Name</th>
                  <th>Image</th>
                  <th>Post Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($post as $d)
                <tr>
                  <td>{{ $d->title }}</td>
                 
                  <td>{{ $d->name }}</td>
                  <td>
                    <img src="postImage/{{ $d->image }}" alt="post image" width="40px" height="40px">
                    </td>
                  <td>{{ $d->post_status }}</td>
                  <td>
                    
                    <a wire:navigate href="{{ url('edit_post', $d->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ url('delete_post', $d->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?')">Delete</a>
                    <a href="{{ url('active_post', $d->id) }}" class="btn btn-primary" onclick="return confirm('Are you sure to active this post?')">Active</a>
                    <a href="{{ url('inactive_post', $d->id) }}" class="btn btn-outline-danger" onclick="return confirm('Do you want to Inactive this post?')">Inactive</a>
                  </td>


                </tr>      
                @endforeach
              </tbody>
            </table>
          </div>
        
  @endsection    
