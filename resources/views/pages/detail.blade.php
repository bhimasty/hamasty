@extends('layouts.app')
 
@section('title')
    Detail Travel
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@section('content')

<!-- Main -->
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                Paket Travel
              </li>
              <li class="breadcrumb-item active">
                Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>Nusa Penida</h1>
            <p>Republic of Indonesia Raya</p>
            <div class="gallery">
              <div class="xzoom-container">
                <img src="frontend/images/pic_featured.jpg" class="xzoom" id="xzoom-default"
                  xoriginal="frontend/images/pic_featured.jpg" width=alt="Detail Image">
              </div>
              <div class="xzoom-thumb text-center">
                <a href="frontend/images/gambar1.jpg"><img src="frontend/images/gambar1.jpg" class="xzoom-gallery"
                    width="128" xpreview="frontend/images/gambar1.jpg"></a>
                <a href="frontend/images/gambar2.jpg"><img src="frontend/images/gambar2.jpg" class="xzoom-gallery"
                    width="128" xpreview="frontend/images/gambar2.jpg"></a>
                <a href="frontend/images/gambar3.jpg"><img src="frontend/images/gambar3.jpg" class="xzoom-gallery"
                    width="128" xpreview="frontend/images/gambar3.jpg"></a>
                <a href="frontend/images/gambar4.jpg"><img src="frontend/images/gambar4.jpg" class="xzoom-gallery"
                    width="128" xpreview="frontend/images/gambar4.jpg"></a>
                <a href="frontend/images/gambar5.jpg"><img src="frontend/images/gambar5.jpg" class="xzoom-gallery"
                    width="128" xpreview="frontend/images/gambar5.jpg"></a>
              </div>
            </div>
            <h2>Tentang Wisata</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, tempora, asperiores ullam quisquam modi
              facere minima cum, explicabo id ducimus vitae ex quibusdam ipsam hic esse consequatur. Laboriosam, velit
              magnam.
            </p>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto cumque asperiores tempora magni.
              Quibusdam odit, ipsa quaerat asperiores perferendis incidunt?
            </p>
            <div class="features row">
              <div class="col-md-4">
                <img src="frontend/images/ic_event.png" alt="Features" class="features-image">
                <div class="description">
                  <h3>Featured Event</h3>
                  <p>Tari Kecak</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="frontend/images/ic_language.png" alt="Features" class="features-image">
                <div class="description">
                  <h3>Language</h3>
                  <p>Bahasa Indonesia</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="frontend/images/ic_foods.png" alt="Features" class="features-image">
                <div class="description">
                  <h3>Foods</h3>
                  <p>Local Foods</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Members are going</h2>
            <div class="members my-2">
              <img src="frontend/images/testi1.png" alt="" class="member-image mr-1">
              <img src="frontend/images/testi2.png" alt="" class="member-image mr-1">
              <img src="frontend/images/testi3.png" alt="" class="member-image mr-1">
              <img src="frontend/images/members.jpg" alt="" class="member-image mr-1">
            </div>
            <hr>
            <h2>Trip Information</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Date of Departure</th>
                <td width="50%" class="text-right">22 Sept 2021</td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width="50%" class="text-right">4D 3N</td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width="50%" class="text-right">Open Trip</td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width="50%" class="text-right">$80,00 / person</td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            <a href="{{ url('/checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

<script>
  $(document).ready(function () {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });
  });
</script>
@endpush