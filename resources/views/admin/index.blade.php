@include('admin.link')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin.nav')
       @include('admin.sidebar')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <section class="content">
            </section>
        </div>
        @include('admin.footer')
   @include('admin.script')
</body>


