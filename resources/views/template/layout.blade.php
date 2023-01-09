<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- AJOUT DU CSS -->
    @include('template.css')
    @livewireStyles

</head>

<body>

    @include('template.topSlide')

    @include('template.nav')

    @include('template.bottomSlide')



     @yield('content')
    <!-- News With Sidebar End -->


      @include('template.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>
    @livewireScripts
    @include('template.js')
    
</body>

</html>