<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
<!-- Fav Icon -->
<link rel="icon" href="frontend/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="frontend/assets/css/font-awesome-all.css" rel="stylesheet">
<link href="frontend/assets/css/flaticon.css" rel="stylesheet">
<link href="frontend/assets/css/owl.css" rel="stylesheet">
<link href="frontend/assets/css/bootstrap.css" rel="stylesheet">
<link href="frontend/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="frontend/assets/css/animate.css" rel="stylesheet">
<link href="frontend/assets/css/jquery-ui.css" rel="stylesheet">
<link href="frontend/assets/css/nice-select.css" rel="stylesheet">
<link href="frontend/assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
<link href="frontend/assets/css/switcher-style.css" rel="stylesheet">
<link href="frontend/assets/css/style.css" rel="stylesheet">
<link href="frontend/assets/css/responsive.css" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
         <!-- jequery plugins -->
    <script src="frontend/assets/js/jquery.js"></script>
    <script src="frontend/assets/js/popper.min.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <script src="frontend/assets/js/owl.js"></script>
    <script src="frontend/assets/js/wow.js"></script>
    <script src="frontend/assets/js/validation.js"></script>
    <script src="frontend/assets/js/jquery.fancybox.js"></script>
    <script src="frontend/assets/js/appear.js"></script>
    <script src="frontend/assets/js/scrollbar.js"></script>
    <script src="frontend/assets/js/isotope.js"></script>
    <script src="frontend/assets/js/jquery.nice-select.min.js"></script>
    <script src="frontend/assets/js/jQuery.style.switcher.min.js"></script>
    <script src="frontend/assets/js/jquery-ui.js"></script>
    <script src="frontend/assets/js/nav-tool.js"></script>

    <!-- main-js -->
    <script src="frontend/assets/js/script.js"></script>
    </body>
</html>
