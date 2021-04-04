<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src=" {{asset('image/logo_HI.jpg')}} " alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex text-white">
        {{-- <div class="image">
            <img src="{{asset('image/images.jfif')}}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
            {{ Auth::user()->name }}
        </div>
    </div>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
