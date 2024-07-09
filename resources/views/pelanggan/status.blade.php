<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>INDIBIZ</title>
    <!-- All CSS -->
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('indexpel.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning"><img src="{{ asset('img/indibiz.png') }}"
                        style="height: 40px; width: 160px;"></a> <button aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/indexpelanggan') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/layananpelanggan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/laporanpelanggan') }}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/loginpelanggan') }}" class="nav-link"><i
                                class="bi bi-person-circle"></i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="{{ asset('img/cover1.jpg') }}">
            </div>

        </div>

        <div class="col-md-12 mt-md-5">
            <div class="section-header text-center pb-5">
                <h2>Status Laporan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur<br>
                    adipisicing elit. Non, quo.</p>
            </div>
        </div>
        <div class="container-fluid py-3">
            <div class="container">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No. </th>
                                <th scope="col">Nama </th>
                                <th scope="col">Alamat </th>
                                <th scope="col">Telepon </th>
                                <th scope="col">Detail </th>
                                <th scope="col">Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>Otto</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>Otto</td>
                                <td>Otto</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- <div class="row g-0">
                        <div class="col-3">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active"
                                    aria-current="true">
                                    DAFTAR KATEGORI
                                </button>
                                @foreach ($kategori as $kategori)
                                    <button type="button"
                                        class="list-group-item list-group-item-action">{{ $kategori->nama_kategori }}</button>
                                @endforeach
                            </div>
                        </div>
                        <div class="row col-9 g-0">
                            @foreach ($daftarlayanan as $daftarlayanan)
                                <div class="card" style="width: 15rem; margin-left:10px; margin-bottom: 10px">
                                    <img src="{{ asset('img/cover1.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $daftarlayanan->nama_layanan }}</h5>
                                        <p class="card-text">{{ $daftarlayanan->detail }}</p>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <ul class="list-group">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
        </ul> --}}
        <!-- footer starts -->
        <footer class="bg-dark p-2 text-center mt-md-5">
            <div class="container">

                <p class="text-white">All Right Reserved By @website Name</p>
            </div>
        </footer>
        <!-- footer ends -->

        <!-- All Js -->
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
