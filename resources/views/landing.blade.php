@extends('layouts/main')

@section('title','Landing Page')
@section('container')

<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('farm/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5" data-aos="fade-up">
              <h1 class="mb-3 text-white">SITANTE</h1>
              <p>Website Pelayanan Pemeriksaan Hewan Ternak di Wilayah kabupaten Jember</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">

      <div class="container">

        <br>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="heading-39101 mb-5">
              <span class="backdrop text-center">Artikel</span>
              <span class="subtitle-39191">Artikel</span>
              <h3>Artikel Seputar Peternakan</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="{{ url('farm/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="/artikel">Detail</a>
                <h2 class="mb-1"><a href="/artikel">Awas Faksin Hewan ILEGAL!!</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="{{ url('farm/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">Detail</a>
                <h2 class="mb-1"><a href="trip-single.html">Dignissimos debitis</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="{{ url('farm/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">Detail</a>
                <h2 class="mb-1"><a href="trip-single.html">Dignissimos debitis</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="{{ url('farm/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">Detail</a>
                <h2 class="mb-1"><a href="trip-single.html">Dignissimos debitis</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="{{ url('farm/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">Detail</a>
                <h2 class="mb-1"><a href="trip-single.html">Dignissimos debitis</a></h2>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
            <div class="listing-item">
              <div class="listing-image">
                <img src="{{ url('farm/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a class="px-3 mb-3 category bg-primary" href="#">Detail</a>
                <h2 class="mb-1"><a href="trip-single.html">Dignissimos debitis</a></h2>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>


    <div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">About</span>
              <span class="subtitle-39191">Tentang </span>
              <h3>SITANTE</h3>
            </div>
            <p>Aplikasi berbasis website yang diperuntukan bagi peternak, khususnya peternak desa yang jarang melakukan pemeriksaan terhadap kesehetan hewannya. Website ini bukan hanya terfokus pada peternak, namun juga pada dokter hewan.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="{{ url('farm/images/aboutfarm.jpg') }}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>


    

    <footer class="footer bg-light">
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a>SITANTE</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>

@endsection

