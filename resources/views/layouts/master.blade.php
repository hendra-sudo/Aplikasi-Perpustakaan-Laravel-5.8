<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Library of Alexandria</title>
    <link href="{{ asset('assets/dist/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <h1 class="navbar-brand">Library of Alexandria</h1>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div style="color: white;">
                Date :
                <?php date_default_timezone_set('Asia/Jakarta');
                echo date('l, d-m-Y'); ?>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>{{ Auth::user()->name }}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/home">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                             Data Perpustakaan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/siswa">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                                    Data Anggota
                                </a>
                                <a class="nav-link" href="/pustakawan">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>
                                    Data Petugas
                                </a>
                                <a class="nav-link" href="/buku">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Daftar Buku
                                </a>
                                <a class="nav-link" href="/rak">
                                    <div class="sb-nav-link-icon"><i class="fas fa-swatchbook"></i></div>
                                    Daftar Rak
                                </a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Feedback</div>
                        <a class="nav-link" href="/peminjaman">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                            Peminjaman
                        </a><a class="nav-link" href="/pengembalian">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                            Pengembalian
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="/about">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                            Support
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">&copy; Framework_A</div>
                    Library of Alexandria
                </div>
            </nav>
        </div>
        @yield('content')
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Framework_A || Kelompok_3 ©2020</div>
                    <div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/dist/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/assets/demo/datatables-demo.js') }}"></script>
</body>

</html>
