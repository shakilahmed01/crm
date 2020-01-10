<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>CRM Management</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

  @include('Dashboard.include.css.include_css')


</head>

<body class="theme-blush">

<!-- Page Loader -->
@include('Dashboard.include.preloader.preloader')
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
      <input type="search" value="" placeholder="Search..." />
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->
@include('Dashboard.include.right_icon_menu.right_icon_menu')

<!-- Left Sidebar -->
@include('Dashboard.include.lts.include_lts')

<!-- Right Sidebar -->
@include('Dashboard.include.rts.include_rts')

@yield('content')
@include('Dashboard.include.js.include_js')
</body>
</html>
