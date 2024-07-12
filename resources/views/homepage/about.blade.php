@extends('homepage.layouts.main')

@section('content')


<div class="container-xxl py-5 bg-primary hero-header mb-5 overflow-hidden">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Tentang Kami</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Halaman Utama</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5 overflow-hidden">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Tentang Kami</h6>
                    <h2 class="mt-2">Solusi Terbaik dengan 10 Tahun Pengalaman dalam Industri Peminjaman Kendaraan</h2>
                </div>
                <p class="mb-4">Di Gorent, dengan pengalaman lebih dari 10 tahun, kami menyediakan solusi peminjaman kendaraan yang andal dan efisien. Kami menawarkan berbagai pilihan kendaraan terawat untuk kebutuhan perjalanan Anda, didukung oleh layanan profesional yang memastikan pengalaman peminjaman yang mudah dan nyaman.</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Pemenang Penghargaan</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Staf Profesional</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Dukungan 24/7</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Harga yang Adil</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Baca Selengkapnya</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="/img/about.jpg">
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter my-5 wow fadeInUp overflow-hidden" data-wow-delay="0.1s">
    <div class="container px-lg-5">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col-12 col-md-6">
                <h3 class="text-white">Siap untuk memulai</h3>
                <small class="text-white">Di sini kami menawarkan kualitas dan keamanan yang sempurna.</small>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                        placeholder="Masukkan email Anda" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                            class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
            <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                <img class="img-fluid mt-5" style="height: 250px;" src="img/newsletter.png">
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Team Start -->
<div class="container-xxl py-5 overflow-hidden">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Tim Kami</h6>
            <h2 class="mt-2">Temui Anggota Tim Kami</h2>
        </div>
        <div class="row g-4">
       <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item">
            <div class="d-flex">
                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <img class="img-fluid rounded w-75" src="./img/junika.jpg" alt="" style="height: 300px; object-fit: cover;">
            </div>
            <div class="px-4 py-3">
                <h5 class="fw-bold m-0">Juni kahira wati</h5>
                <small>0110123239</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item">
            <div class="d-flex">
                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <img class="img-fluid rounded w-75" src="./img/ripa.jpg" alt="" style="height: 300px; object-fit: cover;">
            </div>
            <div class="px-4 py-3">
                <h5 class="fw-bold m-0">Ripa Nurul lutfiyah</h5>
                <small>0110123081</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="team-item">
            <div class="d-flex">
                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <img class="img-fluid rounded w-75" src="./img/yk.jpg" alt="" style="height: 300px; object-fit: cover;">
            </div>
            <div class="px-4 py-3">
                <h5 class="fw-bold m-0">yasmin khoirunnisa</h5>
                <small>0110123100</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
        <div class="team-item">
            <div class="d-flex">
                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <img class="img-fluid rounded w-75" src="./img/hilmi.jpg" alt="" style="height: 300px; object-fit: cover;">
            </div>
            <div class="px-4 py-3">
                <h5 class="fw-bold m-0">Muhammad Hilmi Nurrasyid</h5>
                <small>0110123297</small>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Team End -->
@endsection
