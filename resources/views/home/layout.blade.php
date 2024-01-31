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
            {{-- <h1 class="services_taital">Trending Post </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2"> --}}
               <div class="row">
                @yield('content')
               </div>
            </div>
            
         </div>
      {{-- </div> --}}
      <!-- post section end -->
      @include('home.footer')
      
      @include('home.js')
      </body>
</html>