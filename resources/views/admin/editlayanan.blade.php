<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3498db">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Nama Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/indexadmin') }}">
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/layananadmin') }}">
                    <span>Layanan</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/kategoriadmin') }}">
                    <span>Kategori</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/laporanadmin') }}">
                    <span>Laporan</span>
                </a>
            </li>

            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="{{ url('/listpelanggan') }}">
                    <span>Pelanggan</span>
                </a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Log Out</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Layanan</h1>

                    </div>


                    @foreach ($elayanan as $elayanan)
                        <form action="{{ route('updatelayanan', $elayanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input type="hidden" name="id" value="">
                                <label for="nama_layanan" class="form-label">Nama Layanan</label>
                                <input type="text" class="form-control" id="nama_layanan" name='nama_layanan'
                                    value="{{ $elayanan->nama_layanan }}">
                            </div>
                            <div class="mb-3">
                                <label for="detail" class="form-label">Detail</label>
                                <input type="text" class="form-control" id="detail" name='detail'
                                    value="{{ $elayanan->detail }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <select class="form-control" id="nama_kategori" name='nama_kategori'>
                                    @php
                                        $selected = '';
                                        if ($errors->any()) {
                                            $selected = old('nama_kategori');
                                        } else {
                                            $selected = $elayanan->kategoris_id;
                                        }
                                    @endphp
                                    @foreach ($kategoris as $kategoris)
                                        <option value="{{ $kategoris->id }}"
                                            {{ $selected == $kategoris->id ? 'selected' : '' }}>
                                            {{ $kategoris->nama_kategori }}</option>
                                    @endforeach
                                    {{-- @foreach ($ekategori as $ekategori)
                                        <option value="{{ $ekategori->id }}"
                                            {{ old('ekategori') == $ekategori->id ? 'selected' : '' }}>
                                            {{ $ekategori->id }}</option>
                                    @endforeach --}}
                                </select>
                                {{-- <input type="text" class="form-control" id="nama_kategori" name='nama_kategori'
                                value="  "> --}}
                            </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
</body>

</html>
