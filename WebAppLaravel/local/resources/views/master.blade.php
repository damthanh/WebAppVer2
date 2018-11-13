<!DOCTYPE html>
<html>
    <head>
        @yield('title')
        @yield('head')
    </head>
    <body>
        @yield('header')
        <div class="body-wrapper">
            @yield('content')
        </div>
        @yield('footer')
    </body>
    @yield('script')
</html>