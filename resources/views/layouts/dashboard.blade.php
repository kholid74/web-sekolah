@include('layouts._dashboard.header')
<!-- Page Body Start-->
<div class="page-body-wrapper">
    @include('layouts._dashboard.sidebar')
    <div class="page-body">
        @include('layouts._dashboard.breadcrumb')
        @yield('content')
    </div>
    @include('layouts._dashboard.footer')
