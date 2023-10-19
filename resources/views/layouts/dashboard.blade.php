<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        {{ config('app.name') }} - @yield('title')
    </title>
    <!-- my-dashboard -->
    <!-- fontawesome -->
    <!-- icon flag -->
</head>

<body>
    <!-- begin:navbar -->
    @include('layouts._dashboard.navbar')
    <!-- end:navbar -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <!-- begin:sidebar -->
            @include('layouts._dashboard.sidebar')

            <!-- end:sidebar -->
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2 class="mt-2">
                        <!-- title -->
                        @yield('title')
                    </h2>
                    <!-- begin:breadcrumbs -->
                    @yield('breadcrumbs')
                    <!-- end:breadcrumbs -->

                    <!-- begin:content -->
                    @yield('content')
                    <!-- end:content -->
                </div>
            </main>
            <!-- begin:footer -->
            @include('layouts._dashboard.footer')

            <!-- end:footer -->
        </div>
    </div>
    <!-- scripts -->
    <!-- jquery -->
    <!-- bootstrap bundle -->
    <!-- my-dashboard -->
</body>

</html>
