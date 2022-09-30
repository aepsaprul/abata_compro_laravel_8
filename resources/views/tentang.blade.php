@extends('layouts.app')

@section('content')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Tentang Abata</li>
      </ol>
      <h2>Tentang Abata</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-7">
          <p style="text-indent: 50px; text-align:justify;">{{ $sejarah->deskripsi }}</p>
          <a href="{{ url('/') }}" class="text-danger p-1 border-bottom border-danger"><i class="bi bi-arrow-left-short"></i> Kembali</a>
        </div>

        <div class="col-lg-5">
          <div class="portfolio-info">
            <h3>Visi</h3>
            <ul>
              @foreach ($visi as $item)
                <li><i class="bi bi-dot"></i> {{ $item->deskripsi }}</li>
              @endforeach
            </ul>
          </div>
          <div class="portfolio-info mt-3">
            <h3>Misi</h3>
            <ul>
              @foreach ($misi as $item)
                <li><i class="bi bi-dot"></i> {{ $item->deskripsi }}</li>
              @endforeach
            </ul>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection