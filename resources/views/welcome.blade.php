<!-- --------------------------------head------------------------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Me'Cha</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('fontend/assets/img/icon_mecha.png' )}}" rel="icon">  
  <link href="{{asset('fontend/assets/img/icon_mecha.png' )}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('fontend/assets/vendor/aos/aos.css' )}}" rel="stylesheet">
  <link href="{{asset('fontend/assets/vendor/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet">
  <link href="{{asset('fontend/assets/vendor/bootstrap-icons/bootstrap-icons.css' )}}" rel="stylesheet">
  <link href="{{asset('fontend/assets/vendor/boxicons/css/boxicons.min.css' )}}" rel="stylesheet">
  <link href="{{asset('fontend/assets/vendor/glightbox/css/glightbox.min.css' )}}" rel="stylesheet">
  <link href="{{asset('fontend/assets/vendor/swiper/swiper-bundle.min.css' )}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('fontend/assets/css/style.css' )}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v4.3.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<!-- --------------------------------header------------------------------------- -->


<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="#hero">
    <img src="{{asset('fontend/assets/img/logo.png')}}" width="100" height="100" >
    
      </a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Menu</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">promotion</a></li>
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



<!-- --------------------------------index------------------------------------- -->


<body>

  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Better bubble tea Experience With Me'Cha</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
        <img src="{{asset('fontend/assets/img/12.png')}}" class="img-fluid animated" alt="">
         
        </div>
      </div>
    </div>

  </section>
  <!-- ======= End Hero Section ======= -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{asset('fontend/assets/img/12.png ')}}"width="300"  class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Me'Cha ชานมไข่มุก</h3>
            <p class="font-stlye" ><h5>
            สำหรับเรื่องรสชาติของชาไข่มุกมีชานั้น
            จะเน้นไปที่กลิ่นชานมที่มีความมัน
            กลมกล่อมไม่หวานมากจนเกินไปลูกค้า
            สามารถเพิ่มหรือลดระดับความหวานได้เองอีกด้วยและที่สำคัญวัตถุดิบของเรา
            ไม่มีส่วนผสมของไขมันทรานส์จึงมั่นใจได้ว่าปลอดภัยต่อสุขภาพ</h5>
            </p>
            
            
          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    



    <!------------------------------------------------ ======= Services Section ======= --------------------------------------->
    <!------------------------------------------------ ======= Services Section ======= --------------------------------------->
    <!------------------------------------------------ ======= Services Section ======= --------------------------------------->
    <!------------------------------------------------ ======= Services Section ======= --------------------------------------->
    <!------------------------------------------------ ======= Services Section ======= --------------------------------------->
    <!------------------------------------------------ ======= Services Section ======= --------------------------------------->
    <!------------------------------------------------ ======= Services Section ======= --------------------------------------->









    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Drink Menu</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <img src="{{asset('fontend/assets/img/12.png')}}" width="100" height="100" >
                </svg>
                <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/12.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="โซดาแดง"><i class="bx bx-plus"></i></a>
              </div>
              </div>
              <h4><a href="">โซดาแดง </a></h4>
              <p> : 25.บาท</p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <img src="{{asset('fontend/assets/img/02.png')}}" width="100" height="100" >
                </svg>
               <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/02.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ชานม"><i class="bx bx-plus"></i></a>
             </div>
              </div>
              <h4><a href="">ชานม  </a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <img src="{{asset('fontend/assets/img/03.png')}}" width="100" height="100" >
                </svg>
                <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/03.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="นมสด"><i class="bx bx-plus"></i></a>
              </div>
              </div>
              <h4><a href="">นมสด </a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                
                  <img src="{{asset('fontend/assets/img/04.png')}}" width="100" height="100" >
                </svg>
                <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/04.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="โกโก้"><i class="bx bx-plus"></i></a>
              </div>
              </div>
              <h4><a href="">โกโก้ </a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <img src="{{asset('fontend/assets/img/05.png')}}" width="100" height="100" >
                </svg>
               <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/05.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ชาเขียว"><i class="bx bx-plus"></i></a>
               </div>
              </div>
              <h4><a href="">ชาเขียว </a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="600">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <img src="{{asset('fontend/assets/img/06.png')}}" width="100" height="100" >
                </svg>
               <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/06.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ชาเขียว แอปเปิ้ล"><i class="bx bx-plus"></i></a>
              </div>
              </div>
              <h4><a href="">ชาเขียว </a></h4>
              <h4><a href=""> แอปเปิ้ล</a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <img src="{{asset('fontend/assets/img/07.png')}}" width="100" height="100" >
                </svg>
                <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/07.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="นมเย็น"><i class="bx bx-plus"></i></a>
               </div>
              </div>
              <h4><a href="">นมเย็น</a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <img src="{{asset('fontend/assets/img/08.png')}}" width="100" height="100" >
                </svg>
               <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/08.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ชามะลิ"><i class="bx bx-plus"></i></a>
              </div>
              </div>
              <h4><a href="">ชามะลิ</a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  
                <img src="{{asset('fontend/assets/img/09.png')}}" width="100" height="100" >
                </svg>
                
                <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/09.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="นมแอปเปิ้ล"><i class="bx bx-plus"></i></a>
               
            </div>
              </div>
              <h4><a href="">นมแอปเปิ้ล</a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  
                  <img src="{{asset('fontend/assets/img/10.png')}}" width="100" height="100" >
                </svg>
               
                <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/10.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="บราวชูกา"><i class="bx bx-plus"></i></a>
               
              </div>
              </div>
              <h4><a href="">บราวชูกา</a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="600">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <img src="{{asset('fontend/assets/img/11.png')}}" width="100" height="100" >
                </svg>
               <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/11.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ชานมเย็น"><i class="bx bx-plus"></i></a>
               </div>
              </div>
              <h4><a href="">ชานมเย็น</a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="700">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                 <img src="{{asset('fontend/assets/img/01.png')}}" width="100" height="100" >
                </svg>
                <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/01.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="กาแฟ"><i class="bx bx-plus"></i></a>
              </div>
              </div>
              <h4><a href="">กาแฟ</a></h4>
              <p> : 25.บาท </p>
              <p> +ไข่มุก 5.บาท฿ </p>
            </div>
          </div>

          <!-- Before Services end section -->
        </div>

      </div>
    </section>



<!-- ---------------------------------------------End Services Section-------- --------------------------------------- -->
<!-- ---------------------------------------------End Services Section-------- --------------------------------------- -->
<!-- ---------------------------------------------End Services Section-------- --------------------------------------- -->
<!-- ---------------------------------------------End Services Section-------- --------------------------------------- -->
<!-- ---------------------------------------------End Services Section-------- --------------------------------------- -->
    


    <!-- ============================================== Portfolio Section ============================================== -->
    <!-- ============================================== Portfolio Section ============================================== -->

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Image & Promotion</h2></div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">shop atmosphere</li>
              <li data-filter=".filter-card">promotion</li>
              <li data-filter=".filter-web">menu</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro9.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>promotion 1</h4>
                <p>promotion</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro10.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>promotion 2</h4>
                <p>promotion</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro10.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro1.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>เครื่องดื่ม 1</h4>
                <p>เครื่องดื่ม</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro2.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>เครื่องดื่ม 2</h4>
                <p>เครื่องดื่ม</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" t><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro3.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>เครื่องดื่ม 3</h4>
                <p>เครื่องดื่ม</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro4.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>บรรยากาศ 1</h4>
                <p>บรรยากาศ</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro6.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>บรรยากาศ 2</h4>
                <p>บรรยากาศ</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" t><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro7.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>เครื่องดื่ม 4</h4>
                <p>เครื่องดื่ม</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" t><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('fontend/assets/img/pro/pro5.jpg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>บรรยากาศ 3</h4>
                <p>บรรยากาศ</p>
              </div>
              <div class="portfolio-links">
                <a href="{{asset('fontend/assets/img/pro/pro5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

         

        </div>

      </div>
    </section>


    <!-- ----------------------------------------------------End Portfolio Section ------------------------------------------------------>
    <!-- ----------------------------------------------------End Portfolio Section ------------------------------------------------------>
    <!-- ----------------------------------------------------End Portfolio Section ------------------------------------------------------>
    <!-- ----------------------------------------------------End Portfolio Section ------------------------------------------------------>
    <!-- ----------------------------------------------------End Portfolio Section ------------------------------------------------------>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>สามารถติดต่อได้ทาง</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>ตลาดOzoneone Market กรุงเทพมหานคร 10210</p>
            </div>
          </div>

         

          <div class=" col-md-6">
            <div class="info-box mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>084-698-0472</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d30986.947784467997!2d100.6025315175825!3d13.87690239919996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d13.8510336!2d100.630528!4m3!3m2!1d13.9286731!2d100.576787!5e0!3m2!1sth!2sth!4v1629091178975!5m2!1sth!2sth" width="1295" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
          <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
          </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <!-- ======= ---------------------------------Footer-------------------------------- ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

    <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <img src="{{asset('fontend/assets/img/logo.png')}}" width="100" height="100" >
      <a href="https://www.facebook.com/maysanee.k/" target="_blank" class="facebook"><i class="bx bxl-facebook" ></i></a>facebook
      <a href="#" class="phone"><i class="bi bi-telephone"></i></a>084-698-0472
      
    </div>
  </div>

</div>
</footer>
<!-- --------------------------------End Footer ------------------------------------------------->

  <!-- ------------------------------- !!!!!!!!!!!!!!!!!!!!!!! ------------------------------------------------->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('fontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('fontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('fontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('fontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('fontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('fontend/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('fontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('fontend/assets/js/main.js')}}"></script>
  
  <!-- ------------------------------- !!!!!!!!!!!!!!!!!!!!!!! ------------------------------------------------->
</body>

</html>

