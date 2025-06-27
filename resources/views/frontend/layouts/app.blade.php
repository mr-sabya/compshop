<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rozer – Electronics eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon/favicon.png') }}" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />

    <!-- CSS
  ============================================ -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins/plugins.min.css') }}" />
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
</head>

<body>
    <!-- Header Section Start From Here -->
    <livewire:frontend.theme.desktop.header />
    <!-- Header Section End Here -->

    <!-- Mobile Header Section Start -->
    <livewire:frontend.theme.mobile.header />

    <!-- Search Category Start -->
    <livewire:frontend.theme.mobile.search />
    <!-- Search Category End -->


    <!-- Mobile Header Section End -->


    <!-- OffCanvas Wishlist Start -->
    <livwire:frontend.theme.wishlist.index />
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <livewire:frontend.theme.cart.index />
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas mobile menu -->
    <livewire:frontend.theme.mobile.menu />
    <!-- OffCanvas Menu End -->

    <div class="offcanvas-overlay"></div>

    @yield('content')


    <!-- Footer Area Start -->
    <livewire:frontend.theme.footer.index />
    <!-- Footer Area End -->

    <!-- JS
============================================ -->
    <script data-navigate-once src="{{ asset('assets/frontend/js/vendor/vendor.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/frontend/js/plugins/plugins.min.js') }}"></script>

    <!-- Main Activation JS -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>