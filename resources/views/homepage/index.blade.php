@extends('homepage.layouts.main')

@section('content')

<div class="container-xxl py-5 bg-primary hero-header mb-5 overflow-hidden">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated zoomIn">Gorent Solusi Terintegrasi untuk Meningkatkan Bisnis Peminjaman Kendaraan Anda</h1>
                <p class="text-white pb-3 animated zoomIn">Gorent adalah alat lengkap yang dirancang untuk mempercepat pertumbuhan bisnis peminjaman kendaraan Anda. Dengan fitur-fitur inovatif yang dirancang khusus untuk industri peminjaman kendaraan, Anda dapat meningkatkan visibilitas online, menarik lebih banyak pelanggan, dan mengoptimalkan strategi pemasaran Anda untuk mencapai kesuksesan yang lebih besar.</p>
                <a href="/project" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Lihat Kendaraan</a>
                <a href="/contact"
                    class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Tentang Kami</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid" src="{{ asset('img/rentcar.png') }}" alt="">
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
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="/about">Baca selengkapnya</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/about.jpg') }}">
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
                <h3 class="text-white">Siap memulai perjalanan?</h3>
                <small class="text-white">Ayo pesan kendaraanmu, dan jelajahi kota-kota di Indonesia.</small>
                <div class="position-relative w-100 mt-3">
                    <a href="/project" class="btn btn-light">Cari Kendaraan <i
                            class="fas fa-paper-plane text-primary fs-5"></i></a>
                </div>
            </div>
            <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                <img class="img-fluid mt-5" style="height: 250px;" src="{{ asset('img/newsletter.png') }}">
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Service Start -->
<div class="container-xxl py-5 overflow-hidden">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Layanan Kami</h6>
            <h2 class="mt-2">Solusi Apa yang Kami Sediakan</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fas fa-car-alt fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Armada terawat dengan baik</h5>
                    <p>Kami memastikan bahwa armada yang kami sediakan dalam kondisi sangat baik dan siap pakai, dan
                        kami selalu mengecek kendaraan sebelum disewakan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fas fa-key fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Bisa lepas kunci</h5>
                    <p>Kami menyediakan opsi penyewaan include dengan sopir, namun kami juga menyediakan opsi jika anda
                        hanya ingin menyewa kendaraan saja.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fas fa-id-badge fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Sopir berpengalaman</h5>
                    <p>Sopir-sopir yang kami gunakan adalah sopir yang sudah memiliki pengalaman diatas 5 tahun bekerja
                        dan sudah memiliki jam terbang tinggi.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">

                        <i class="fas fa-ribbon fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Telah bersertifikat</h5>
                    <p>Anda tidak perlu ragu untuk menyewa di tempat kami karena kami telah memiliki sertifikat resmi.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Berpengalaman lebih dari 5 tahun</h5>
                    <p>Dengan pengalaman selama lebih dari 5 tahun dalam melayani anda tentunya kami akan memberikan
                        service maksimal untuk pelanggan yang terhormat.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fas fa-user-shield fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Memberikan Garansi</h5>
                    <p>Kami akan siap untuk memberikan jaminan apabila nantinya terjadi hal-hal yang tidak diinginkan
                        terjadi, jadi anda tidak perlu takut untuk menyewa di tempat kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Portfolio Start -->
<div class="container-xxl py-5 overflow-hidden">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Koleksi Kami</h6>
            <h2 class="mt-2">Kendaraan Terbaru yang Diluncurkan</h2>
        </div>

        <div class="row g-4 portfolio-container mb-4">
            @foreach ($kendaraan as $item)
            <div class="col-lg-4 col-md-6 portfolio-item wow zoomIn" data-wow-delay="0.1s" style="height: 300px;">
                <div class=" rounded overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('img/kendaraan/'.$item -> slug.'.png') }}" alt="">
                    <a class="btn btn-light" href="/detail/{{ $item -> slug }}"><i
                            class="fa fa-plus fa-2x text-primary"></i>
                    </a>
                    <div class="portfolio-overlay">
                        <div class="mt-auto">
                            <small class="text-white"><i
                                    class="fa fa-folder me-2"></i>{{ $item -> brand -> nama }}</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="">{{ $item -> nama }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center align-baseline">
            <a href="/project" class="mt-5"><i class="fas fa-chevron-circle-right fa-3x"></i>
                <p>Lebih banyak...</p>
            </a>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Testimonial Start -->
<div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s overflow-hidden">
    <div class="container py-5 px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Pelayanan mereka sangat memuaskan. Kendaraan yang disediakan selalu dalam kondisi terbaik. Saya merasa aman dan nyaman menggunakan layanan mereka.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-1.jpg') }}"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Dewi Lestari</h6>
                        <small>Konsultan IT</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Gorent memberikan solusi peminjaman kendaraan yang sangat andal. Dengan pengalaman mereka yang luas, saya selalu mendapatkan kendaraan sesuai dengan kebutuhan perjalanan saya.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-2.jpg') }}"
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
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-3.jpg') }}"
                        style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Setiawan</h6>
                        <small>Dokter Umum</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Pengalaman saya menggunakan layanan peminjaman kendaraan mereka sangat memuaskan. Semua proses dari pemesanan hingga pengembalian kendaraan berjalan lancar tanpa masalah.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-4.jpg') }}"
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
