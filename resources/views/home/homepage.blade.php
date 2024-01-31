<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.homecss')

      </head>
   <body>
    @include('home.header')
      <!-- post section start -->
      <div class="services_section layout_padding">
         @if (session()->has('message'))
         <div class="mx-5 alert alert-danger" style="width:925px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{ session()->get('message') }}
        </div>
    
         @endif
         <div class="container">
            <h1 class="flex items-center justify-center services_taital">Trending Post </h1>
            <p class="flex items-center justify-center services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2 h-100">
               <div class="flex items-center justify-center p-2 shadow flex-between row">
                  @foreach ($post as $p)
                     
              
                  <div class="p-4 m-2 shadow col-md-4">
                     <div><img src="postImage/{{ $p->image }}" class="w-[400px] h-[300px] services_img mb-3 rounded">
                        <h1 class="mt-1 text-xl">{{ $p->title }}</h1>
                        <h3 class="mt-1">{{ $p->description }}</h3>
                     <img src="assets/2.png" alt="profile" class="w-12 h-12 bg-blue-900 rounded-3xl">
                        <p>{{ $p->name }}</p>
                     </div>
                     <div class="btn_main"><a  href="{{ url('post_details',$p->id) }}" wire:navigate>Read More</a></div>
                  </div>
                  @endforeach
                 
               </div>
            </div>
            
         </div>
      </div>
      <!-- post section end -->
      @include('home.footer')
      
      @include('home.js')
      </body>
</html>