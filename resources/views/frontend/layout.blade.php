<!DOCTYPE html>
<html>
    <head>
        @yield('title')
        @yield('author')
        @yield('keywords')
        @yield('description')
        
        @include('frontend.partials.head')

    </head>

    <body data-spy="scroll" data-target=".fixed-top">
        @include('frontend.partials.navbar')

        @yield('content')

        <!--  FOOTER AREA START  -->
        @include('frontend.partials.footer')
        <!--  FOOTER AREA END  -->
        
        @include('frontend.partials.script')
    </body>
</html>
