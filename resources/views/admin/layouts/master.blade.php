
<!doctype html>
<html lang="en">

<head>
@include('admin.layouts.head')
</head>
<body class="theme-cyan">

    
<!-- Overlay For Sidebars -->

<div id="wrapper">

    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')

    @yield('content')

</div>

@include('admin.layouts.footer')

</body>
</html>
