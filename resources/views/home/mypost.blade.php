@extends('home.layout')
@section('content')
<div class="container">

    <h1 class="services_taital">My Post </h1>
    <p class="services_text">Post can be customize easily.</p>
    @include('sweetalert::alert')
    <div class="services_section_2">
       <div class="p-2 shadow row">
          @foreach ($post as $p)
             
      
          <div class="p-4 mx-3 shadow col-md-4">
             <div><img src="postImage/{{ $p->image }}" class="w-[410px] h-[300px] services_img mb-3 rounded">
             
                <h1 class="mt-1 text-xl">{{ $p->title }}</h1>
                <h3 class="mt-1">{{ $p->description }}</h3>
                <div class="flex flex-row justify-between mx-4 font-semibold text-gray-400 bottom lg:gap-80">
                    <div class="flex flex-col image">
                        <img src="assets/2.png" alt="profile" class="w-24 h-12 bg-blue-900 rounded-3xl">
                        <p>{{ $p->name }}</p>
                    </div>
                    <div class="flex flex-row ml-[-48px]">                 
                        <a href="{{ url('my_post_edit',$p->id) }}"><box-icon name='edit'></box-icon></a>
                        <a href="{{ url('my_post_delete',$p->id) }}"><box-icon type='solid' name='trash'></box-icon></a>
                    </div>
                </div>
            
             </div>
            
             <div class="btn_main"><a  href="{{ url('post_details',$p->id) }}" wire:navigate>Read More</a></div>
          </div>
          @endforeach
         
       </div>
    </div>
    
 </div>
@endsection