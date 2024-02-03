 <!-- Sidebar Navidation Menus-->
 <span class="heading">Main</span>
 <ul class="list-unstyled">
    <li ><a wire:navigate href="{{ route('home') }}"> <i class="icon-home"></i>Home </a></li>
    <li><a wire:navigate href="{{ url('postpage') }}"> <i class="icon-grid"></i>Add Post </a></li>
    <li><a wire:navigate href="{{ url('showpost') }}"> <i class="fa fa-bar-chart"></i>Show Post </a></li>

    {{-- <li><a href="{{ route('logout') }}"> <i class="icon-logout"></i>Log out </a></li> --}}
</ul>

</nav>
<!-- Sidebar Navigation end-->