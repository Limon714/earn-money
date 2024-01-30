<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.homecss')
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
      </head>
   <body>
    @include('home.header')
      <!-- post section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Trending Post </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="images/img-1.png" class="services_img">
                     
                        <h3 class="mt-2">This is a first blog post image.This is a first blog post image.This is a first blog post image.This is a first blog post image.</h3>
                     <img src="assets/2.png" alt="profile" class="w-12 h-12 bg-blue-900 rounded-3xl">
                        <p>Author</p>
                     </div>
                     <div class="btn_main"><a href="#">Read More</a></div>
                  </div>
                  
                  {{-- <div class="col-md-4">
                     <div><img src="images/img-2.png" class="services_img"></div>
                     <div class="btn_main active"><a href="#">Hiking</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="images/img-3.png" class="services_img"></div>
                     <div class="btn_main"><a href="#">Camping</a></div>
                  </div> --}}
               </div>
            </div>
            
         </div>
      </div>
      <!-- post section end -->
      @include('home.footer')
      
      @include('home.js')
      </body>
</htm