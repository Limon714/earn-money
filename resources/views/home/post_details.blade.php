<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.homecss')
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
      </head>
   <body>
    @include('home.header')
      <!-- post section start -->
      
         <div class="container">
            <h1 class="flex items-center mt-4 ml-[215px] justify-left services_taital">{{ $post->title }} </h1>
          
               <div class="flex items-center justify-center row">
                
                <div class="align-middle col-md-8">
                    <div><img src="postImage/{{ $post->image }}" class="w-[850px] h-[650px] services_img mb-3 rounded">
                    </div>
                       <h2 class="mt-2">{{ $post->description }}</h2>
                    
                    </div>
                    </div>
          
            
         </div>
 
      <!-- post section end -->
      @include('home.footer')
      
      @include('home.js')
      </body>
</html>