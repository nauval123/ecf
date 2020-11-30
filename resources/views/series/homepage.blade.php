@extends('navbar')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Solusi Terbaik Dalam Penakaran Pakan Ayam</h1>
                    <h2>Kami hadir untuk membantu anda dalam mengoptimalkan peternakan anda</h2>
                    <div class="d-lg-flex">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.all-free-download.com/images/graphicthumb/farmland_drawing_chicken_icons_colored_cartoon_design_6831836.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>
                        <p>
                          Disini Kami membantu anda dalam melakukan penakaran pakan ayam dan memberikan informasi dari artikel yang kami buat,dengan demikian diharapkan:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Mampu mengoptimalkan produksi telur ayam</li>
                            <li><i class="ri-check-double-line"></i> Mampu meningkatkan life rate ayam</li>
                        </ul>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tujuan</h2>
                    <p>Tujuan Kami adalah membantu mengoptimalkan produksi telur peternak ayam dengan memberikan bantuan penakaran pakan </p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Informatif</a></h4>
                            <p>Kami menyediakan artikel informasi yang dapat menambah wawasan anda</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Forward Chaining</a></h4>
                            <p>Kami Menggunakan algoritma Forward Chaining dalam membantu anda </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Optimal</a></h4>
                            <p>Optimal dalam membantu produksi telur Peternakan anda</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-abacus"></i></div>
                            <h4><a href="">Hasil Penakaran</a></h4>
                            <p>Perhitungan Didasarkan pada Knowledge Base dari Ahli</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
{{--                    <p>Hubungi Kami </p>--}}
                </div>

                <div class="row">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Jalan Kalimantan no.240,Jember,Jawa Timur</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>echickenf@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 896 271 994 08</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505287.3530085397!2d113.26685550566961!3d-8.34669228378073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd699e31fb22e71%3A0x3027a76e352bd10!2sJember%2C%20Kaliwates%2C%20Jember%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1606722441361!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
