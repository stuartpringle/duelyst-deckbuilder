<!doctype html>
<html>
    <head>
       @include('includes.head')
    </head>
    <body>
        <div class="container">
           <header class="w-full">
               @include('includes.header')
           </header>
           <div class="w-full flex flex-col sm:flex-row flex-grow overflow-hidden">
                   @yield('content')
           </div>
           <footer class="mt-auto">
               @include('includes.footer')
           </footer>
        </div>
        <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>