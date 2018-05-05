<!doctype html>
<html lang="en">
<head>
    @include('backEnd.includes.head')
    @yield('headLinks')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('backEnd.includes.headerNavBar')
        @include('backEnd.includes.sideNavBar')

        @yield('content')

        @include('backEnd.includes.footer')
        @include('backEnd.includes.controlSideBar')
    </div>
    @include('backEnd.includes.script')
    @yield('extendScripts')
</body>
</html>