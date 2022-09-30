@extends('layouts.app')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Abata Printing <br> Sahabat Bertumbuh</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">One Pray, One Dream, One Team</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Mulai</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img-alt.jpg" class="img-fluid" alt="" style="border-radius: 10px;">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Tentang Abata</h3>
              <p style="text-align: justify; text-indent: 50px;">
                {{ Str::substr($sejarah->deskripsi, 0, 300) }}...
              </p>
              <div class="text-center text-lg-start">
                <a href="{{ route('compro.tentang') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about-alt.svg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Gabung Section ======= -->
    <section id="gabung" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Bergabung Dengan Abata</h2>
          <p>Dapatkan keuntungan lebih banyak</p>
        </header>

        <div class="row">

          @foreach ($gabungs as $item)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="box">
                <img src="{{ asset('http://localhost/abata_hrd/public/compro/gabung/' . $item->gambar) }}" class="img-fluid" alt="">
                <h3 class="text-capitalize">{{ $item->nama }}</h3>
                <p style="text-align: justify;">{{ $item->deskripsi }}</p>
              </div>
            </div>              
          @endforeach

        </div>

      </div>

    </section><!-- End Gabung Section -->

    <!-- ======= Cabang Section ======= -->
    <section id="cabang" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Cabang</h2>
          <p>Cetak dimana saja melalui cabang terdekat</p>
        </header>

        <div class="row gy-4">

          @foreach ($cabangs as $item)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <i class="ri-discuss-line icon"></i>
                <h3 class="text-capitalize">{{ $item->nama }}</h3>
                <p>{{ $item->alamat }}</p>
                <span>{{ $item->kontak }}</span>
              </div>
            </div>              
          @endforeach

        </div>

      </div>

    </section><!-- End Cabang Section -->

    <!-- ======= Produk Section ======= -->
    <section id="produk" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Produk</h2>
          <p>Lihat produk terbaru kami</p>
        </header>

        {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-indoor">Indoor</li>
              <li data-filter=".filter-outdoor">Outdoor</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> --}}

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($produks as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-indoor">
              <div class="portfolio-wrap">
                <img src="{{ asset('http://localhost/abata_hrd/public/compro/produk/' . $item->gambar) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $item->nama_produk }}</h4>
                  <div class="portfolio-links">
                    <a href="{{ asset('http://localhost/abata_hrd/public/compro/produk/' . $item->gambar) }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{ $item->nama_produk }}"><i class="bi bi-plus"></i></a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>              
          @endforeach

        </div>

      </div>

    </section><!-- End Produk Section -->

    <!-- ======= Testimoni Section ======= -->
    <section id="testimoni" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimoni</h2>
          <p>Apa yang mereka katakan tentang kami</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            @foreach ($testimonis as $item)
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>{{ $item->komentar }}</p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('http://localhost/abata_hrd/public/compro/testimoni/' . $item->foto) }}" class="testimonial-img" alt="">
                    <h3>{{ $item->nama }}</h3>
                    {{-- <h4>Ceo &amp; Founder</h4> --}}
                  </div>
                </div>
              </div><!-- End testimonial item -->                
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimoni Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Tim</h2>
          <p>Tim kerja keras kami</p>
        </header>

        <div class="row gy-4">

          @foreach ($tims as $item)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="{{ asset('http://localhost/abata_hrd/public/compro/tim/' . $item->foto) }}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                  <h4 class="text-capitalize">{{ $item->nama }}</h4>
                  <span>{{ $item->jabatan }}</span>
                  <p>"{{ $item->deskripsi }}"</p>
                </div>
              </div>
            </div>              
          @endforeach

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Partner Section ======= -->
    <section id="partner" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Partner</h2>
          <p>Partner bisnis kami</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ($partners as $item)
              <div class="swiper-slide"><img src="{{ asset('http://localhost/abata_hrd/public/compro/partner/' . $item->gambar) }}" class="img-fluid" alt=""></div>                
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Partner Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <a href="https://goo.gl/maps/yDaWCNx974Sks6Wt7" target="_blank">Jl. M Yamin Gang III, Purwokerto Selatan, Karangpucung, Kec. Purwokerto Selatan, Kab. Banyumas</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Buka</h3>
                  <p>Setiap Hari<br>08:00 - 20:00</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>(0281) 111111</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>info@example.com</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

  

  

  