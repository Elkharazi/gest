<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Amping/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 18:18:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>@yield('title')</title>

    <!-- Fav Icon -->
    <link rel="icon" href={{ asset('assets/images/favicon.ico') }} type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href={{ asset('assets/css/font-awesome-all.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/flaticon.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/owl.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/bootstrap.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/jquery.fancybox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/animate.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/color.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/responsive.css') }} rel="stylesheet">

</head>


<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">
        @include('layouts.preload')
        @include('layouts.header')
        @yield('index')
        @yield('home_Page_One')
        @yield('home_Page_Two')
        @yield('home_One_Page')
        @yield('about')
        @yield('about_element_1')
        @yield('about_element_2')
        @yield('about_element_3')
        @yield('activities_element_1')
        @yield('activities_element_2')
        @yield('activities')
        @yield('adventure')
        @yield('blog_details')
        @yield('blog')
        @yield('camping')
        @yield('clients_element')
        @yield('climbing')
        @yield('contact')
        @yield('cta_element')
        @yield('diving')
        @yield('error')
        @yield('feature_element_1')
        @yield('feature_element_2')
        @yield('gallery_element')
        @yield('index_rtl')
        @yield('team_element_1')
        @yield('team_element_2')
        @yield('team')
        @yield('testimonial_element')
        @yield('parachute')
        @yield('throwing')
        @yield('video_element')
        @include('layouts.footer')

    </div>

    @include('layouts.scripts')
</body>

</html>
