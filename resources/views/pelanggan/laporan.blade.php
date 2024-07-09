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

        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="col-md-12 mt-md-5">
                    <div class="section-header text-center pb-5">
                        <h2>Form Laporan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur<br>
                            adipisicing elit. Non, quo.</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <form action="{{ route('laporan.store') }}" method="POST" class="php-email-form"
                            enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div> --}}
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Your Name" required>
                            </div>

                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Address" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="no_telp" id="no_telp"
                                    placeholder="Phone" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="detail" id ="detail" rows="5" placeholder="Detail" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit"
                                    style="background: #3498db; margin-top: 50px;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;">Send
                                    Form</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
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
