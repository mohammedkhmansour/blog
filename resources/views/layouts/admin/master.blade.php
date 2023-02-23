@include('layouts.admin.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('layouts.admin.header')

  <!-- Main Sidebar Container -->
@include('layouts.admin.sidebar')

@yield('content')


  <!-- /.content-wrapper -->
{{-- @include('layouts.admin.footer') --}}

@include('layouts.admin.scripts')
