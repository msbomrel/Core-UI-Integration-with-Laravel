<!doctype html>
<html lang="en">
@include('backend.includes.head')
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
@include('backend.includes.header')
<div class="app-body">
    @include('backend.includes.sidebar')
    <main class="main">
        @include('backend.includes.breadcrumb')
        @yield('content')
    </main>
</div>
@include('backend.includes.footer')
</body>
</html>
