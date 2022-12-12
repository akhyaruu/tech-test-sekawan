<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Sistem Pemesanan Kendaraan</title>
    <link href="{{ asset('new_dashboard/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new_dashboard/css/datatable.css') }}" rel="stylesheet">
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <div class="fixed-top" style="z-index: 9">
            <!-- z-index aslinya 99999 -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin6">
                        <a class="navbar-brand" style="margin-left:10px" href="{{route('home')}}">

                            <!-- kosong -->

                        </a>
                        <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                            href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <ul class="navbar-nav d-none d-md-block d-lg-none">
                            <li class="nav-item">
                                <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                    href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto d-flex align-items-center">
                            <li class=" in">
                                <form role="search" class="app-search d-none d-md-block me-3">
                                    <input type="text" placeholder="Cari..." class="form-control mt-0">
                                    <a href="" class="active">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </form>
                            </li>
                            <li>
                                <a class="profile-pic" href="#">
                                    <span class="text-white font-medium">{{ Auth::user()->nama }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>

        <div class="fixed-top">
            <aside class="left-sidebar" data-sidebarbg="skin6">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            @include('components._sidebar')
                            <li class="text-center p-20 upgrade-btn">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn w-100 btn-danger text-white"
                                        onclick="return confirm('Apakah kamu yakin ingin keluar?')">
                                        <i class="fa fa-toggle-off"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        </div>

        <div class="page-wrapper" style="min-height: 250px;">
            <div class="page-breadcrumb bg-white" style="margin-top: 60px">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('page')</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                @yield('content')

            </div>

            <footer class="footer text-center">
                <script>
                    document.write(/\d{4}/.exec(Date())[0])
                </script> © Sistem Pemesanan Kendaraan
            </footer>
        </div>
    </div>

    <script src="{{ asset('new_dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('new_dashboard/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('new_dashboard') }}/js/sidebarmenu.js"></script> --}}
    <script src="{{ asset('new_dashboard/js/custom.js') }}"></script>
    <script src="{{ asset('new_dashboard/js/datatable.js') }}"></script>
    <script>
        $(function() {
        $('.data-table').DataTable();
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

    @yield('script')
</body>

</html>
