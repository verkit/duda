<!DOCTYPE html>
<html>

@include('admin/layouts/partials/head')

<body class="layout-column">

    @include('admin/layouts/partials/header')

    <div id="main" class="layout-row flex">

        <!-- ############ LAYOUT START-->

        <!-- ############ Aside START-->
        @include('admin/layouts/partials/sidenav')
        <!-- ############ Aside END-->

        <!-- ############ Content START-->
        @yield('content')
        <!-- ############ Content END-->

        <!-- ############ LAYOUT END-->

    </div>
    <!-- build:js assets/js/site.min.js -->
    <!-- jQuery -->
    <script src="{{ asset('libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- ajax page -->
    <script src="{{ asset('libs/pace-progress/pace.min.js')}}"></script>
    <script src="{{ asset('libs/pjax/pjax.js')}}"></script>
    <script src="{{ asset('assets/js/ajax.js')}}"></script>
    <!-- lazyload plugin -->
    <script src="{{ asset('assets/js/lazyload.config.js')}}"></script>
    <script src="{{ asset('assets/js/lazyload.js')}}"></script>
    <script src="{{ asset('assets/js/plugin.js')}}"></script>
    <!-- theme -->
    <script src="{{ asset('assets/js/theme.js')}}"></script>
    <!-- endbuild -->
    @yield('js')
</body>

</html>
