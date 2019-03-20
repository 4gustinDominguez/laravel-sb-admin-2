<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>

<body id="page-top">

<div id="wrapper">

    @include('layouts.partials.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
        @include('layouts.partials.nav')

        <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>

        @include('layouts.partials.footer')

    </div>

</div>




@include('layouts.partials.footer-scripts')

</body>

</html>