@extends('include.layout')
@section('title', 'Login')
@section('content')

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail_box">
                                        <h1>
                                            "Share, Trust, Appreciate, Reputation"
                                        </h1>
                                        <p>
                                            Selamat datang di website Angkatan 2021 Sistem Informasi <br>
                                            Fakultas Matematika dan Ilmu Pengetahuan Alam <br>
                                            Universitas Sam Ratulangi
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="assets/images/image1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail_box">
                                        <h1>
                                            Mengenai Sistem Informasi
                                        </h1>
                                        <p>
                                            Program studi Sistem Informasi adalah program studi dibawah <br>
                                            Jurusan Matematika dan merupakan program studi termuda di<br>
                                            Fakultas MIPA.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="assets/images/gambar2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail_box">
                                        <h1>
                                            Kunjungi Kami
                                        </h1>
                                        <p>
                                            Program Studi Sistem Informasi Jl. Fakultas MIPA UNSRAT,<br>
                                            Kleak, Kec. Malalayang, Kota Manado, Prov. Sulawesi Utara<br>
                                            Kode Pos 95115
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="assets/images/gambar3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-container">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- service section -->
    <section class="service_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    Apa saja yang dipelajari dalam Sistem Informasi?
                </h2>
                <p>
                    Dalam jurusan ini kalian akan mempelajari bagaimana cara mengidentifikasi <br>
                    kebutuhan dan proses bisnis perusahaan berdasarkan fakta. Berikut merupakan beberapa <br>
                    mata kuliah yang akan dipelajari.
                </p>
            </div>

            <div class="service_container">
                <div class="box">
                    <div class="img-box">
                        <img src="assets/images/s-1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Statistika dan Probabilitas
                        </h5>
                        <p>
                            Pengumpulan, penggolongan, analisis, interpretasi
                            hingga presentasi data.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="assets/images/s-2.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Algoritma dan Struktur Data
                        </h5>
                        <p>
                            Memahami cara membuat algoritma
                            pemrograman yang sistematis dan sederhana.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="assets/images/s-3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Kecerdasan Buatan
                        </h5>
                        <p>
                            Mempelajari bagaimana program bisa belajar dari dataset yang sudah ada.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="assets/images/s-4.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Interaksi Manusia Komputer
                        </h5>
                        <p>
                            Mempelajari mengenai User Interface dan
                            User Experience.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="assets/images/s-5.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Pemrograman Dasar
                        </h5>
                        <p>
                            Pemrograman komputer menggunakan berbagai bahasa, seperti
                            Java, Python, dan C++.
                        </p>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>
    <div class="footer_bg">

        <!-- contact section -->
        <section class="contact_section layout_padding" id="contactLink">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Kirim pesan untuk kami
                    </h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputName4" placeholder="Nama">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="inputSubject4" placeholder="Perihal">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputMessage" placeholder="Pesan">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact section -->
    </div>
</body>
@endsection