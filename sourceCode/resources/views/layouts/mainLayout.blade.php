<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <!-- ======== sidebar-nav start =========== -->
    @include('partials.sidebar')
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        @include('partials.header')
        <!-- ========== header end ========== -->


        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
       @include('partials.footer')
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/main.js')}}"></script>
</body>
</html>


























{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        @include('admin.partials.head')
         <!-- Tiny MCE -->
        <script src="https://cdn.tiny.cloud/1/gg1e9n4g1buqmn8sl1h7l4l1q35tdtxjb9lv09mqfxwb7i7v/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    </head>
    <body class="sidebar-menu-collapsed">
        <div class="se-pre-con"></div>
        <section>
            @include('admin.partials.sidebar')
            @include('admin.partials.header')
            <!-- main content start -->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- main content end-->
        </section>
    @include('admin.partials.footer')
  @include('admin.partials.js_controller')
    </body>
</html>
--}}
