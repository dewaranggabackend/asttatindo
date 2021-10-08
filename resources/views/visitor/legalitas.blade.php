<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Legalitas
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
        .logo-pass {
          float: left;
          line-height: 90px;
          padding: 25px 0px 25px;
        }
        .legal {
          color: #000;
          font-size: 20px;
        }
        .color_h {
          color: #000;
        }
    </style>
    <body  data-spy="scroll" data-target="#main-menu">
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
                          <a class="paddinga margina" href="#/visi">VISI & MISI
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
                          <a class="paddinga margina" href="/#galeri">KEGIATAN
                          </a>
                        </li>
                        <li class="marginb">
                          <a class="paddinga margina" href="/#galeri">INFORMASI
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="margind">
                      <a href="/#alamat">HUBUNGI
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
        <p class="p2 kanan marginf">
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
      <section id="page-header" class="parallax">
        <div class="container">
          <div class="breadcrumb">
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-8">
              <div class="post-content">	
                <div class="post-meta">
                </div>
                <div class="post-description">	
                  <center>
                  <h1>
                    <b>Legalitas
                    </b>
                  </h1>						
                  <h3>Legalitas LSPK Asttatindo
                  </h3>
                  </center>
                  <br>
                  <br>
                  
                  <div class="post-img">
              
                  <p class="legal"><center><b>Surat Penetapan Akreditasi</b></center></p>
                  <hr>
                    <img src="Sertifikat1.png">
                    <div>
                        <br>
                    <img src="Sertifikat2.png">
                    </div>
                    <div><br>
                 
                  <p class="legal"><center><b>NIB</b></center></p>
                  <hr>
                    <img src="Sertifikat3.png">
                    </div>
                    <div><br>
                 
                  <p class="legal"><center><b>Perubahan Direksi dan Komisaris</b></center></p>
                  <hr>
                    <img src="Sertifikat4.png">
                    </div>
                  </div>
                </div>				
              </div>
            </div>					
            <div class="col-md-4 col-sm-4">	
                <br>
                <br>
              <div class="widget-main">
                <h4>Artikel Terbaru
                </h4>
                <?php foreach ($post as $postingan) : ?>	
                <div class="sidebar-widget clearfix"
                     <a href="/{{$postingan->slug}}">
                <img src="{{$postingan->gambar}}" alt="">
                </a>
              <p class="sidebar-widget-title">
                <a href="/{{$postingan->slug}}">{{$postingan->judul}}
                </a>
              </p>
              <p class="date">{{$postingan->created_at->diffForHumans()}}
              </p>
            </div>
            <?php endforeach; ?>
          </div>	
          <div class="widget-main">	
            <h4>Visi
            </h4>
            <p>Menjadi lembaga sertifikasi profesi yang profesional untuk menghasilkan tenaga kerja yang berdaya saing global, unggul, terpercaya dan berakhlak mulia serta berwawasan lingkungan tahun 2024
            </p>
          </div>
          <!-- <div class="widget-main">
            <h4>Kategori
            </h4>
            <div class="tags">
              <a href="">Pendidikan
              </a>				
            </div>
          </div> -->
        </div>
        </div> 		
      </div>		
    </section>
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
  <div class="footer__addr">
    <h1 class="footer__logo">
    <a href="/" class="warnaputih"> <img src="lspk2.png" height=40px width=40px></a>
      <b><a href="/" class="warnaputih">LSPK ASTTATINDO</a>
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
          <a href="Tel:02183708284">(021)83708284
          </a>
        </li>
        <li>
          <p class="warnaputih">Fax (021)83708265
                </p>
        </li>
      </ul>
    </li>
    <li class="nav__item">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.753278424595!2d106.844378!3d-6.213958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3af1fa5579bc844!2sDpp%20Asttatindo!5e0!3m2!1sen!2sus!4v1628044833384!5m2!1sen!2sus" width="320" height="240" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </li>
  </ul>
  <div class="legal">
    <p>Copyright &copy; LSPK Asttatindo 2021 
    </p>
  </div>
</footer>
</html>
