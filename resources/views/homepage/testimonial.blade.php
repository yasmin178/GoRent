@extends('homepage.layouts.main')

@section('content')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Testimonial</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Halaman Utama</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Start -->
<div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s overflow-hidden">
    <div class="container py-5 px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Pelayanan mereka sangat memuaskan. Kendaraan yang disediakan selalu dalam kondisi terbaik. Saya merasa aman dan nyaman menggunakan layanan mereka.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/testimonial-1.jpg"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Dewi Lestari</h6>
                        <small>Grapic design</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Gorent memberikan solusi peminjaman kendaraan yang sangat andal. Dengan pengalaman mereka yang luas, saya selalu mendapatkan kendaraan sesuai dengan kebutuhan perjalanan saya.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/testimonial-2.jpg"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Agus</h6>
                        <small>Pengusaha Restoran</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Saya sangat puas dengan kualitas layanan Gorent. Mereka tidak hanya menyediakan kendaraan terbaru, tetapi juga memberikan pelayanan yang responsif dan ramah.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="./img/testimonial-3.jpg"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Setiawan</h6>
                        <small>polisi</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Pengalaman saya menggunakan layanan peminjaman kendaraan mereka sangat memuaskan. Semua proses dari pemesanan hingga pengembalian kendaraan berjalan lancar tanpa masalah.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src={{ asset('img/testimonial-4.jpg') }}
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Fitriani</h6>
                        <small>Pengacara</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection
