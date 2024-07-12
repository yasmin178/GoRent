@extends('homepage.layouts.main')

@section('content')
<div class="container-xxl py-5 bg-primary hero-header mb-5 overflow-hidden">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Tim Kami</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Halaman Utama</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Halaman</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Tim</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
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
