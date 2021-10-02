@extends('frontend.layout')

@section('content')
<!--MAIN BANNER AREA -->
<div class="banner-area banner-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                        <div class="banner-content content-padding">
                            <h5 class="subtitle">A creative agency</h5>
                            <h1 class="banner-title">Bikin CV Online dan Surat Lamaran Kerja Cepat dan Mudah</h1>
                            <p>Gak perlu bingung lagi kalau perlu CV untuk lamar kerja, karena di BuatCV kamu bisa buat
                                CV dan Surat Lamaran Kerja cuma 5 menit disertai template menarik yang bantu kamu
                                dilirik HRD</p>

                            <a href="contact" class="btn btn-white btn-circled">Mulai buat CV + Lamaran sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->
<!--  ABOUT AREA START  -->
<section id="intro" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12">
                <div class="section-heading">
                    <h2 class="font-weight-bold">Apa itu Buatcv?</h2>
                    <small>BuatCV adalah platform untuk membuat CV (Curriculum Vitae) atau Daftar Riwayat Hidup dan
                        Surat lamaran Kerja secara online dengan Mudah, Cepat dan Praktis. Hanya perlu isi data dengan
                        lengkap dan CV sudah bisa di download dalam bentuk PDF.</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5  d-none d-lg-block col-sm-12">
                <div class="intro-img">
                    <img src="{{asset('frontend/assets/images/banner/why-choose.png')}}" alt="intro-img"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 ">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>01.</span>
                            <h4>Cepat dan Mudah</h4>
                            <p>Cuma perlu luangin waktu 5 menit aja CV kamu udah langsung bisa kamu download dan udah
                                bisa kamu pakai untuk melamar kerja.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>02.</span>
                            <h4>Banyak pilihan template CV</h4>
                            <p>Ada banyak pilihan template dengan warna dan layout menarik yang bisa buat CV kamu auto
                                dilirik HRD.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>03.</span>
                            <h4>Saran dari HR Experts</h4>
                            <p>Dapatkan berbagai saran dari HR Expert mengenai hal yang menyangkut tentang CV dan
                                melamar kerja.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="intro-box">
                            <span>04.</span>
                            <h4>Pembayaran Mudah</h4>
                            <p>Ada banyak cara bayar yang bisa kamu pilih, jadi proses pembayaran CV kamu jadi lebih
                                mudah.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-cta">
                            <p class="lead ">Still have any question on mind ? <a href="#contact"
                                    class="smoth-scroll">Contact us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  ABOUT AREA END  -->

<!--  SERVICE AREA START  -->
<section id="about" class="bg-light">
    <div class="about-bg-img d-none d-lg-block d-md-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-md-8">
                <div class="about-content">
                    <!-- <h5 class="subtitle">About us</h5> -->
                    <h3>Kenapa di buatcv?</h3>
                    <p>BuatCV adalah platform Pertama dan No. 1 di Indonesia untuk pembuatan CV atau Daftar Riwayat
                        Hidup dan Surat lamaran Kerja secara online. Fitur-fitur unggulan kami yang akan membantu
                        mendapatkan pekerjaan impianmu.</p>

                    <ul class="about-list">
                        <li><i class="icofont icofont-check-circled"></i> Responsive site</li>

                        <li>
                            <i class="icofont icofont-check-circled"> </i> Latest bootstrap 4
                        </li>

                        <li>
                            <i class="icofont icofont-check-circled"> </i> Modern and clean design
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"> </i> Working contact form
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"> </i> Premium services and support
                        </li>
                        <li>
                            <i class="icofont icofont-check-circled"></i> Cross browser compatiabilty
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->

<!--  SERVICE PARTNER START  -->
<section id="service-head" class=" bg-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 m-auto">
                <div class="section-heading text-white">
                    <h4 class="section-title">Bagaimana Cara kerja Buatcv</h4>
                    <p>cukup 3 langkah mudah untuk buat cv online</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  SERVICE PARTNER END  -->

<!--  SERVICE AREA START  -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <img src="{{asset('frontend/assets/images/icon/checklist.png')}}" alt="service-icon"
                            class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Isi Data</h4>
                        <p>Lengkapi form riwayat hidup dengan semua hal yang ingin kamu tampilkan pada CV kamu.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box ">
                    <div class="service-img-icon">
                        <img src="{{asset('frontend/assets/images/icon/interactive.png')}}" alt="service-icon"
                            class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Pilih Design</h4>
                        <p>Kamu bisa pilih desain dari berbagai pilihan template menarik yang bisa buat CV kamu auto
                            dilirik HRD.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="service-img-icon">
                        <img src="{{asset('frontend/assets/images/icon/cloud.png')}}" alt="service-icon"
                            class="img-fluid">
                    </div>
                    <div class="service-inner">
                        <h4>Download CV</h4>
                        <p>Setelah semua tahap selesai, kamu sudah bisa download CV melalui dashboard dan siap digunakan
                            untuk melamar kerja</p>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-sm-6 col-md-6">
	                    <div class="service-box">
	                        <div class="service-img-icon">
	                            <img src="assets/images/icon/010-digital-marketing.png" alt="service-icon" class="img-fluid">
	                        </div>
	                        <div class="service-inner">
	                            <h4>Custom Website</h4>
	                            <p>We  provide <span>custom website</span> for any small and large company web based service in large compact package.</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-md-6">
	                    <div class="service-box">
	                        <div class="service-img-icon">
	                            <img src="assets/images/icon/006-analytics.png" alt="service-icon" class="img-fluid">
	                        </div>
	                        <div class="service-inner">
	                            <h4>Content Growth</h4>
	                            <p>Content is king,Having a blog site and want to <span>build content</span> make a platform of earning too we assist you.</p>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-sm-6 col-md-6">
	                    <div class="service-box">
	                        <div class="service-img-icon">
	                            <img src="assets/images/icon/004-hiring.png" alt="service-icon" class="img-fluid">
	                        </div>
	                        <div class="service-inner">
	                            <h4>Link Building </h4>
	                            <p>Want to grow your <span>potential visitor</span> your site to make it more effective and succesful business .</p>
	                        </div>
	                    </div>
	                </div> -->
        </div>
    </div>
</section>
<!--  SERVICE AREA END  -->

<!--  COUNTER AREA START  -->
<section id="counter" class="section-padding">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row ">
            <div class="col-12 justify-content-center text-center">
                <div class="counter-stat">
                    <i class="icofont icofont-rocket"></i>
                    <span class="counter">460</span>
                    <h5>CV BERHASIL DI BUAT</h5>
                    <small>Yuk buat CV-mu sekarang di BikinCV dan bikin kagum HRD di tempat kerja incaranmu.</small><br>
                    <a href="contact" class="btn btn-white btn-circled mt-4">Mulai buat CV + Lamaran sekarang</a>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-6 col-md-6">
	                <div class="counter-stat">
	                    <i class="icofont icofont-rocket"></i>
	                    <span class="counter">60</span>
	                    <h5>Projects Done</h5>
	                </div>
	            </div>
	            <div class="col-lg-3 col-sm-6 col-md-6">
	                <div class="counter-stat">
	                    <i class="icofont icofont-hand-power"></i>
	                    <span class="counter">30</span>
	                    <h5>Experienced stuff</h5>
	                </div>
	            </div>
	            <div class="col-lg-3 col-sm-6 col-md-6">
	                <div class="counter-stat">
	                    <i class="icofont icofont-shield-alt"></i>
	                    <span class="counter">25</span>
	                    <h5>Ongoning Projects</h5>
	                </div>
	            </div> -->
        </div>
    </div>
</section>
<!--  COUNTER AREA END  -->

@endsection

@section('title')
<title> Beranda </title>
@endsection

@section('author')
<meta name="author" content="">
@endsection

@section('keywords')
<meta name="keywords" content="">
@endsection

@section('description')
<meta name="description" content="">
@endsection
