<!DOCTYPE html>
<html>
    <head>
        @yield('title')
        @include('head')
    </head>
    <body>
        @include('admin.adminheader')
        <div class="body-wrapper">
            @yield('content')
        </div>
        @include('footer')
    </body>
    @yield('script')
</html>