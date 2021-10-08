<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>LSPK Asttatindo
    </title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="{{ asset('visitor/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/js/owl-carousel/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/js/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('visitor/css/magnific-popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('visitor/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('visitor/css/etlinefont.css') }}">
    <link href="{{ asset('visitor/css/style.css') }}" type="text/css"  rel="stylesheet"/>
    <style>
      *, *:before, *:after {
        box-sizing: border-box;
      }
      .footer {
        display: flex;
        flex-flow: row wrap;
        padding: 60px 150px 20px 150px;
        color: #fff;
        background-color: #212121;
        border-top: 1px solid #fff;
      }
      .footer > * {
        flex:  1 100%;
      }
      .footer__addr {
        margin-right: 1.25em;
        margin-bottom: 2em;
      }
      .footer__logo {
        font-family: 'Open-Sans', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        font-size: 3rem;
        color: #fff
      }
      .footer__addr h2 {
        margin-top: 1.3em;
        font-size: 15px;
        font-weight: 400;
      }
      .nav__title {
        font-weight: 400;
        font-size: 15px;
        color: #fff;
      }
      .footer address {
        font-style: normal;
        color: #fff;
      }
      .footer__btn {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 36px;
        max-width: max-content;
        background-color: rgb(33, 33, 33, 0.07);
        border-radius: 100px;
        color: #fff;
        line-height: 0;
        margin: 0.6em 0;
        font-size: 1rem;
        padding: 0 1.3em;
      }
      .footer ul {
        list-style: none;
        padding-left: 0;
      }
      .footer li {
        line-height: 2em;
      }
      .footer a {
        text-decoration: none;
      }
      .footer__nav {
        display: flex;
        flex-flow: row wrap;
      }
      .footer__nav > * {
        flex: 1 50%;
        margin-right: 1.25em;
      }
      .nav__ul a {
        color: #fff;
      }
      .nav__ul--extra {
        column-count: 2;
        column-gap: 1.25em;
      }
      .legal {
        display: flex;
        flex-wrap: wrap;
        color: #fff;
      }
      .heart {
        color: #fff;
      }
      @media screen and (min-width: 24.375em) {
        .legal .legal__links {
          margin-left: auto;
        }
      }
      @media screen and (min-width: 40.375em) {
        .footer__nav > * {
          flex: 1;
        }
        .nav__item--extra {
          flex-grow: 2;
        }
        .footer__addr {
          flex: 1 0px;
        }
        .footer__nav {
          flex: 2 0px;
        }
      }
        .warnaputih {
          color: #fff;
        }
        .fz {
          font-size: 16px;
        }
        .tengah {
          text-align: center;
        }
        .boxs {
          height: 200px;
          width: 200px;
          background-color: hotpink;
          color: #fff;
          padding: 10px;
          border: solid 3px black;
          margin: 0
        }
        .besar {
          font-size: 14px;
        }
        .topnav {
          background-color: #ff6900;
          position: absolute;
          width: 100%;
          overflow: hidden;
          height: 40px;
          padding: 8px;
          display: block;
          transition: top 0.3s;
          text-align: center;
        }
        .p2 {
          color: #fff;
          padding-right: 20px;
          font-weight: bold;
        }
        .nav-tengah {
          padding: 10px 0px 0px;
        }
        .menu-wrap {
          margin: 100px auto;
          text-align: center;
          padding: 25px 0px 0px 100px;
          margin: 0px 0px 0px 0px;
          position: relative;
        }
        .menu-wrap ul ul {
          display: none;
        }
        .menu-wrap ul li:hover > ul {
          display: block;
          border-radius: 0px;
        }
        .menu-wrap ul {
          background: #ff6900;
          padding: 0 20px;
          border-radius: 10px;
          list-style: none;
          position: relative;
          display: inline-table;
        }
        .menu-wrap ul:after {
          content: "";
          clear: both;
          display: block;
        }
        .menu-wrap ul li {
          float: left;
        }
        .menu-wrap ul li:hover {
        }
        .menu-wrap ul li:hover a {
          color: #fff;
        }
        .menu-wrap ul li a {
          display: block;
          padding: 15px 25px;
          color: #fff;
          text-decoration: none;
        }
        .menu-wrap ul ul {
          border-radius: 0px;
          padding: 0;
          position: absolute;
          top: 100%;
        }
        .menu-wrap ul ul li {
          float: none;
          position: relative;
        }
        .menu-wrap ul ul li a {
          padding: 15px 40px;
          color: #fff;
        }
        .menu-wrap ul ul li a:hover {
        }
        .menu-wrap ul ul ul {
          position: absolute;
          left: 100%;
          top:0;
        }
        @media screen and (max-width: 992px) {
          .menu-wrap ul li:hover > ul {
          font-size: 10px;
          margin: 0px 0px 0px -40px;
          display: inline-table;
          }
          .menu-wrap ul li a {
            text-align: left;
            margin: 0px 0px 0px 0px;
          }
        }
        .paddinga{
          text-align: left;
        }
        .paddingaa{
          padding: 30px 30px 30px 30px;
        }
        .paddingb{
          padding: 0px 0px 0px 0px;
        }
        .margina {
          margin: 0px -17px 0px;
        }
        .marginb{
          margin: 0px 0px 0px 0px;
          padding: 0px 0px 0px 0px;
        }
        .marginc{
          margin: 0px 0px 0px;
          padding: 10px 20px;
        }
        .margind{
          margin: 0px 0px 0px 0px;
          padding: 0px 0px 0px 0px;
          border: 0px 0px 0px 0px;
        }
        .color_h {
          color: #000;
        }
    </style>
    <body data-spy="scroll" data-target="#main-menu">
      <header id="header">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                <span class="sr-only">Toggle navigation
                </span>
                <span class="fa fa-bars">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
              </button>
              <div class="logo-nav">
                <a href="/">
                  <img src="lspk.png" width=300px height=40px>
                </a>
              </div>
              <div class="clear-toggle">
              </div>
              <div id="main-menu" class="menu-wrap">
                <ul class="paddingaa">
                  <b>
                    <li class="margind">
                      <a>PROFIL LSP
                      </a>
                      <ul>
                        <li class="marginb">
                          <a class="paddinga margina" href="#visi">VISI & MISI
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="/struktur">STRUKTUR
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="/legalitas">LEGALITAS
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="margind">
                      <a>SERTIFIKASI
                      </a>
                      <ul>
                      <li class="marginb">
                          <a class="paddinga margina" href="#">CEK STATUS PROSES SERTIFIKASI UNTUK ASESI
                          </a>
                        </li>
                      <li class="marginb">
                          <a class="paddinga margina" href="/proses-permohonan">PROSES PERMOHONAN
                          </a>
                        </li>
                      <li class="marginb">
                          <a class="paddinga margina" href="/data-asesor">ASESOR
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="/tahapan-pelaksanaan-sertifikasi">PROSEDUR
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="#">SKEMA
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="#">TUK
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="#">UNDUH PERSYARATAN
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="margind">
                      <a>ANGGOTA
                      </a>
                      <ul>
                        <li class="marginb">
                          <a class="paddinga margina" href="#">CEK KEANGGOTAAN
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="#">STATISTIK AHLI
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="#">STATISTIK TEKNISI
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="#">STATISTIK OPERATOR
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="margind">
                      <a>GALERI
                      </a>
                      <ul>
                        <li class="marginb">
                          <a class="paddinga margina" href="#galeri">KEGIATAN SERTIFIKASI
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="#galeri">KEGIATAN TAHUNAN
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="margind">
                      <a href="#alamat">HUBUNGI
                      </a>
                    </li>
                  </b>
                </ul>
              </div>
              </ul>
          </div>
        </div>
        </div>
      <div class="topnav" id="topnav">
        <p class="p2 kanan">
          <a href="https://www.google.com/maps/place/Dpp+Asttatindo/@-6.213958,106.844378,14z/data=!4m5!3m4!1s0x0:0x3af1fa5579bc844!8m2!3d-6.2139611!4d106.8443834?ll=-6.213958,106.844378&z=14&t=m&hl=en&gl=US&mapclient=embed&cid=265465698038040644&shorturl=1">
            <i class="fa fa-map-marker color_h">&nbsp; Jakarta Selatan &nbsp; &nbsp; 
            </i>
          </a>
          <a href="mailto: info.lspk@asttatindo.org">
            <i class="fa fa-envelope color_h">&nbsp; info.lspk@asttatindo.org &nbsp;
            </i>
          </a>
          <a href=""> 
          </a>
          <a href="tel:+622183708284">
            <i class="fa fa-phone color_h">&nbsp; +622183708284
            </i>
          </a>
        </p>  
      </div>
        <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("topnav").style.top = "87px";
          } else {
            document.getElementById("topnav").style.top = "-50px";
          }
          prevScrollpos = currentScrollPos;
        }
        </script>
        </header>
      <section id="feed" class="home">
        <div class="slider-overlay">
        </div>
        <div class="slider-text-wrapper">  
          <?php foreach ($judul as $judul2) : ?>
          <div class="container">
            <div class="big">
              <a href="/" class="warnaputih">{{$judul2->judul}}
              </a>
            </div>          
            <div class="small">{{$judul2->subjudul}}
            </div>
            <?php endforeach; ?>
            <a href="#visi" class="middle btn btn-white">SELENGKAPNYA
            </a>
          </div>       
        </div>
        <?php foreach ($carousel as $caro) : ?>
        <img src="{{ $caro->gambar }}" width=2500px height=900px>
        <?php endforeach; ?>
      </section>
      <section id="visi" class="section">
      </section>
      <?php foreach ($visimisi as $misivisi) : ?>
      <section id="visi2" class="section">
        <div class="row">
          <div class="title-box text-center">
            <h2 class="title">VISI
            </h2>
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <center>
              <p>
                <font size=4>{{$misivisi->visi}}
                </font>
              </p>
            </center>
          </div>
          </section>
        <section id="misi" class="section">
        </section>
        <section id="misi2" class="section">
          <div class="container">
            <div class="row">
              <div class="title-box text-center">
                <h2 class="title">MISI
                </h2>
              </div>
              <div class="col-md-4">
                <div class="services-box">
                  <div class="services-desc">
                    <p class="fz">{{$misivisi->misi1}}
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="services-box"> 
                  <div class="services-desc">
                    <p class="fz">{{$misivisi->misi2}}
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="services-box">
                  <div class="services-desc">
                    <p class="fz">{{$misivisi->misi3}}
                    </p>
                  </div>
                </div>
                <?php endforeach; ?>
                </section> 
              <section id="kebijakan">
              </section>
              <br>
              <br>
              <br>
              <br>
              <br>
              <section id="kebijakan">
              </section>
              <br>
              <br>
              </section>
            <section id="kebijakan2">
              <div class="title-box text-center">
                <h2 class="title">KEBIJAKAN MUTU
                </h2>
              </div>
            </section>
            <section id="facts" class="section parallax">
              <div class="overlays">
              </div>
              <div class="container">
                <?php foreach ($kebijakan as $bijak) : ?>
                <div class="row">
                  <div class="services-box">
                    <div class="services-desc">
                      <p class="warnaputih besar">{{$bijak->kebijakan1}}
                      </p>
                    </div>
                  </div>
                  <div class="services-box">
                    <div class="services-desc">
                      <p class="warnaputih besar"> {{$bijak->kebijakan2}}
                      </p>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </section>
            <section id="galeri" class="section">
            </section>
            <section id="galeri2" class="section">
              <div class="container">
                <div class="row">
                  <div class="title-box text-center">
                    <h2 class="title">Galeri
                    </h2>
                  </div>
                  <div class=" col-md-12 text-center">
                    <ul class="filtering">
                      <li class="filter" data-filter="all">Semua
                      </li>
                      <li class="filter" data-filter="kegiatan_sertifikasi">Kegiatan Sertifikasi
                      </li>
                      <li class="filter" data-filter="kegiatan_tahunan">Kegiatan Tahunan
                      </li>
                    </ul>
                  </div>
                  <div class="work-main">
                    <ul class="work-grid">
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <?php foreach ($galeri as $gambar) : ?>
                          <img src="{{$gambar->gambar1}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar1}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <img src="{{$gambar->gambar2}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar2}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <img src="{{$gambar->gambar3}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar4}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <img src="{{$gambar->gambar4}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar4}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div> 
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <img src="{{$gambar->gambar5}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar5}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <img src="{{$gambar->gambar6}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar6}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <img src="{{$gambar->gambar7}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar7}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_sertifikasi">
                        <div class="work-image">
                          <img src="{{$gambar->gambar8}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar8}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                        <?php endforeach; ?>
                        <?php foreach ($galeri2 as $gambar) : ?>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_tahunan">
                        <div class="work-image">
                          <img src="{{$gambar->gambar1}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar1}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_tahunan">
                        <div class="work-image">
                          <img src="{{$gambar->gambar2}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar2}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_tahunan">
                        <div class="work-image">
                          <img src="{{$gambar->gambar3}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar3}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                      </li> 
                      <li class="work-item thumnail-img mix kegiatan_tahunan">
                        <div class="work-image">
                          <img src="{{$gambar->gambar4}}" width=728px height=410px alt="thumbnail">
                          <div class="hover-link">
                            <a href="{{$gambar->gambar4}}" class="popup-image">
                              <i class="fa fa-plus">
                              </i>
                            </a>
                          </div>
                        </div>
                        <?php endforeach; ?>
                      </li> 
                    </ul>
                  </div>
                </div>
              </div>
              <section id="sasaran" class="section">
              </section>
              <section id="sasaran2" class="section">
                <?php foreach ($sasaran as $misi) : ?>
                <div class="row">
                  <div class="title-box text-center">
                    <h2 class="title">Sasaran Mutu
                    </h2>
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                    <center>
                      <p>
                        <font size=4>{{$misi->sasaranmisi}}
                        </font>
                      </p>
                    </center>
                  </div>
                  <?php endforeach; ?>
                  </section>
                <section id="blog" class="section">
                </section>
                <section id="blog2" class="section">
                  <div class="container">
                    <div class="row">
                      <div class="title-box text-center">
                        <h2 class="title">Artikel
                        </h2>
                      </div>
                      <?php foreach ($post as $postingan) : ?>
                      <div class="col-md-4">
                        <div class="blog-post">
                          <div class="post-media">
                            <img src="{{$postingan->gambar}}" width=1000px height=1000px>
                          </div>
                          <div class="post-desc">
                            <h4> 
                              <?php if(strlen($postingan->judul) > 30) { echo substr($postingan->judul, 0, 26)."..."; } else { echo "$postingan->judul"; } ?>
                            </h4>
                            <p>
                              <?php if(strlen($postingan->subjudul) > 30) { echo substr($postingan->subjudul, 0, 33)."..."; } else { echo "$postingan->subjudul"; } ?>
                            </p>
                            <a href="/{{$postingan->slug}}" class="btn btn-gray-border">Baca
                            </a>
                          </div>
                        </div>
                      </div>
                      <?php endforeach; ?>
                    </div> 
                  </div>
                  <br>
                  <center>  
                    <button type="button" class="btn btn-dark">          {{$post->links()}}
                    </button>
                  </center>
                </section>
                <br>
                <br>
                <a href="#" class="scrollup"> 
                  <i class="fa fa-chevron-up"> 
                  </i> 
                </a>
                <script type="text/javascript" src="{{ asset('visitor/js/jquery-1.11.1.min.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/bootstrap.min.js') }}">
                </script> 
                <script type="text/javascript" src="{{ asset('visitor/js/owl-carousel/owl.carousel.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/jquery.flexslider-min.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/jquery.magnific-popup.min.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/easing.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/jquery.easypiechart.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/jquery.appear.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/jquery.parallax-1.1.3.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/jquery.mixitup.min.js') }}">
                </script>
                <script type="text/javascript" src="{{ asset('visitor/js/custom.js') }}">
                </script>
                </body>
              <footer class="footer">
                <div class="footer__addr" id="alamat">
                  <h1 class="footer__logo">
                    <a href="/" class="warnaputih"> 
                      <img src="lspk2.png" height=40px width=40px>
                    </a>
                    <b> 
                      <a href="/" class="warnaputih">LSPK ASTTATINDO
                      </a>
                    </b>
                  </h1>
                  <p class="nav__title">Asosiasi Tenaga Teknik Ahli dan Terampil Indonesia (ASTTATINDO) adalah asosiasi profesi bidang jasa konstruksi yang merupakan wadah organisasi tenaga teknik ahli dan tenaga terampil.
                  </p>
                </div>
                <ul class="footer__nav">
                  <li class="nav__item">
                    <h2 class="nav__title">
                      <b>Keanggotaan
                      </b>
                    </h2>
                    <ul class="nav__ul">
                    <li>
                          <a href="/data-asesor">Asesor
                          </a>
                        </li>
                      <li>
                        <a href="#">Status Proses Permohonan
                        </a>
                      </li>
                      <li>
                        <a href="#">Status Keanggotaan
                        </a>
                      </li>
                      <li>
                        <a href="#">Statistik Keanggotaan Ahli
                        </a>
                      </li>
                      <li>
                        <a href="#">Statistik Keanggotaan Teknisi
                        </a>
                      </li>
                      <li>
                        <a href="#">Statistik Keanggotaan Operator
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav__item">
                    <h2 class="nav__title">
                      <b>Sertifikasi
                      </b>
                    </h2>
                    <ul class="nav__ul">
                      <li>
                        <a href="#">Prosedur
                        </a>
                      </li>
                      <li>
                        <a href="#">Skema
                        </a>
                      </li>
                      <li>
                        <a href="#">Tempat Uji Sertifikasi (TUK)
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav__item">
                    <h2 class="nav__title">
                      <b>Alamat
                      </b>
                    </h2>
                    <ul class="nav__ul">
                      <li>
                        <a href="https://goo.gl/maps/S93BrCe5JyFdFY4bA">Jl. Saharjo No. 76C Pasar Manggis, Setiabudi Jakarta Selatan
                        </a>
                      </li>
                      <li>
                        <a href="Tel:02183708284">Tel: (021)83708284
                        </a>
                      </li>
                      <li>
                        <p class="warnaputih">Fax (021)83708265
                        </p>
                      </li>
                    </ul>
                  </li>
                  <li class="nav__item">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.753278424595!2d106.844378!3d-6.213958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3af1fa5579bc844!2sDpp%20Asttatindo!5e0!3m2!1sen!2sus!4v1628044833384!5m2!1sen!2sus" width="320" height="240" style="border:0;"  allowfullscreen="" loading="lazy">
                    </iframe>
                  </li>
                </ul>
                <div class="legal">
                  <p>Copyright &copy; LSPK Asttatindo 2021 
                  </p>
                </div>
              </footer>
              </html>
