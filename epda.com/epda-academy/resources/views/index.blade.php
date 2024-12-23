<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EPDA Academy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css">
        <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/tiny-slider.css">
		<link rel="stylesheet" href="assets/css/glightbox.min.css">
		<link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- ========================= preloader start ========================= -->
        <div class="preloader">
            <div class="loader">
                <div class="spinner">
                    <div class="spinner-container">
                        <div class="spinner-rotator">
                            <div class="spinner-left">
                                <div class="spinner-circle"></div>
                            </div>
                            <div class="spinner-right">
                                <div class="spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('/') }}">Home</a>
                                        <!-- <a class="page-scroll dd-menu active collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">Home</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item active"><a href="index.html">Home Style 1</a></li>
                                            <li class="nav-item"><a href="#0">Home Style 2</a></li>
                                            <li class="nav-item"><a href="#0">Home Style 3</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="nav-item">
                                    <a class="page-scroll" href="{{ url('/about') }}">About</a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('/service') }}">Service</a>
                                        <!-- <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">Service</a>

                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="service-1.html">Service Style 1</a></li>
                                            <li class="nav-item"><a href="#0">Service Style 2</a></li>
                                        </ul> -->
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">Pages</a>

                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="about.html">About Us</a></li>
                                            <li class="nav-item"><a href="#0">Team Members</a></li>
                                            <li class="nav-item"><a href="#0">Portfolio</a></li>
                                            <li class="nav-item"><a href="#0">Portfolio Single</a></li>
                                            <li class="nav-item"><a href="#0">Counter</a></li>
                                            <li class="nav-item"><a href="#0">Accordion</a></li>
                                            <li class="nav-item"><a href="#0">Alerts</a></li>
                                            <li class="nav-item"><a href="#0">Map</a></li>
                                            <li class="nav-item"><a href="404.html">404</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a class="page-scroll dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">Blog</a>

                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="#0">Blog Style 1</a></li>
                                            <li class="nav-item"><a href="#0">Blog Style 2</a></li>
                                            <li class="nav-item"><a href="#0">Blog Single</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="page-scroll" href="index.html">Event</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="page-scroll" href="contact.html">Credit</a>
                                    </li> -->
                                </ul>
                                <!-- <form action="#" class="search-form">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="lni lni-search-alt"></i></button>
                                </form> -->
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        
        </header>
        <!-- ========================= header end ========================= -->

        <!-- ========================= hero-section start ========================= -->
        <section id="home" class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero-content-wrapper">
                            <h2 class="mb-25 wow fadeInDown" data-wow-delay=".2s">EPDA - Academy </h2>
                            <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Better Choice For Better Future</h1>
                            <p class="mb-35 wow fadeInLeft fw-bold lh-2 text-primary" data-wow-delay=".4s">ဘဝအာမခံချက်ရှိသော IT Engineer အဖြစ် အသက်မွေးဖို့ EPDAကို ရွေးချယ်ပါ။</p>
                            <a href="javascript:void(0)" class="theme-btn">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="hero-img">
                            <div class="d-inline-block hero-img-right">
                                <img src="assets/img/hero/hero-img.png" alt="" class="image wow fadeInRight" data-wow-delay=".5s">
                                <img src="assets/img/hero/dots.shape.svg" alt="" class="dot-shape">
                                <div class="video-btn" >
                                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox" ><i class="lni lni-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= hero-section end ========================= -->

        <!-- ========================= client-logo-section start ========================= -->
        <section class="client-logo-section pt-100">
            <div class="container">
                <div class="client-logo-wrapper">
                    <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                        <div class="client-logo">
                            <img src="assets/img/client-logo/ibiz.png" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/captial-knowledge.png" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/shin-japanese.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= feature-section start ========================= -->
        <section class="feature-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Feature</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Why Chose Us?</h2>
                            <p class="wow fadeInUp lh-2" data-wow-delay=".6s">
                                ဂျပန်နိုင်ငံတွင် လစာကောင်းမွန်သော IT ပညာရှင်အဖြစ် အလုပ်လုပ်ကိုင်ရန် မဖြစ်မနေလိုအပ်သည့် အရည်အချင်းများ ဖြည့်ဆည်းပေးနိုင်သော EPDA တွင်သင်တန်းအပ်နှံပါ။
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-layers"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>IP+FE Professional Certificate</h4>
                                <p>
                                    နှစ်(၂၀)ကျော် အတွေ့အကြုံရှိသော Ph.D ဆရာမကြီးများကိုယ်တိုင် သင်ရိုးပါသင်ခန်းစာများအပြင် စာမေးပွဲဖြေရန် လိုအပ်သော Exam Preparation များကိုပါ အထူးဂရုစိုက် သင်ကြားပေးနေပါသည်။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-book"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Japanese Language</h4>
                                <p>
                                    အတွေ့အကြုံကောင်း၊ ရလာဒ်ကောင်းများစွာရှိသော ဂျပန်သင်တန်းကျောင်းမှ ကျောင်းအုပ်ဆရာမကြီး (Founder & Head Teacher) ကိုယ်တိုင် Japanese 4 Skills ကို လက်တွေ့ အသုံးပြုနိုင်သည်အထိ သင်ကြားပို့ချပေးပါသည်။
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box box-style">
                            <div class="feature-icon box-icon-style">
                                <i class="lni lni-code-alt"></i>
                            </div>
                            <div class="box-content-style feature-content">
                                <h4>Software Development Pratice</h4>
                                <p>
                                    ပြည်တွင်း၊ ပြည်ပ IT Industry များမှ အတွေ့အကြုံပြည့်ဝသော (နှစ် ၂၀ အထက်) ဆရာများ၊ Multinational Companies များတွင် လက်ရှိလုပ်ကိုင်နေသော IT Engineer များကိုယ်တိုင် သင်ကြားပြသပေးမည့်အပြင် သင်တန်းသူ၊ သင်တန်းသားများ ကိုယ်တိုင် Software Development Project များ လက်တွေ့ရေးသားရပါမည်။ 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= feature-section end ========================= -->

        <!--========================= about-section start========================= -->
        <!-- <section id="about" class="pt-100">
            <div class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-img-wrapper">
                                <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                                    <img src="assets/img/about/about-img.png" alt="">

                                    <div class="about-experience">
                                        <h3>5 Year Of Working Experience</h3>
                                        <p>We Crafted an aweso design library that is robust and intuitive to use.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="about-content-wrapper">
                                <div class="section-title">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">About Us</span>
                                    <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Built-With Boostrap 5, a New Experiance</h2>
                                </div>
                                <div class="about-content">
                                    <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">We Crafted an awesome design library
                                        that is robust and intuitive to use. No matter you're building a business
                                        presentation websit or a complex web application our design</p>
                                    <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-1" cup-end="30" cup-append="k">10</span>
                                            <h4>Happy Client</h4>
                                            <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                        </div>
                                        <div class="counter">
                                            <span id="secondo" class="countup count color-2" cup-end="42" cup-append="k">5</span>
                                            <h4>Project Done</h4>
                                            <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block"> library that is robust and</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--========================= about-section end========================= -->

        <!-- ========================= service-section start ========================= -->
        <section id="service" class="service-section pt-130 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                        <div class="section-title text-center mb-55">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Best Services</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-pie-chart"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Foundation Course</h4>
                                <p>Foundation Course မှာ - 21st Century Survival Skills တွေဖြစ်တဲ့
                                    <ul>
                                    <li>✍️Communication</li>
                                    <li>✍️Collaboration</li>
                                    <li>✍️Critical thinking</li>
                                    <li>✍️Creative</li> 
                                    </ul>
                                စတဲ့ (4) Skill ကို အဓိကထားသင်ကြားပေးသွားမှာဖြစ်ပါတယ်
                                    ဒါ့အပြင် -
                                    <ul>
                                        <li>✍️ Presentation Skills</li>
                                        <li>✍️ English</li>
                                        <li>✍️ Business & Management </li>
                                </ul>ရဲ့ အခြေခံတွေကိုလည်းသင်ကြားပေးသွားဦးမှာဖြစ်ပါတယ်။ Foundation Course ကိုသင်ကြားပေးရခြင်းရဲ့ ရည်ရွယ်ချက်ကတော့ IT Engineer ပညာရပ်တွေကိုသင်ကြားတော့မယ် လူငယ်တွေရဲ့အရည်အချင်းတွေကို ပိုမိုကျစ်လစ်ခိုင်မာလာအောင် အုတ်မြစ်ချသင်ကြားပေးခြင်းပဲဖြစ်ပါတယ်</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-pencil-alt"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>ITPEC Exam</h4>
                                <p>
                                    ITPEC စာမေးပွဲဖြေဆိုအောင်မြင်ပြီးပါက ITPEC ကပေးအပ်သည့် Certificate ရရှိမည်ဖြစ်ပြီး
                                    <ul>
                                        <li>Japan</li>
                                        <li>Myanmar</li>
                                        <li>Thai</li>
                                        <li>Philippine</li>
                                        <li>Vietnam</li>
                                        <li>Mongolia</li>
                                        <li>Bangladesh</li>
                                    </ul>
                                    စတဲ့  အာရှနိုင်ငံ (7) နိုင်ငံက IT Engineer အနေဖြင့် အသိအမှတ်ပြုပြီး အလုပ်ခန့်အပ်ခြင်း၊ Promotion ပေးခြင်း၊ IT Engineer Work Visa ဖြင့် နေထိုင်ခွင့်ပြုခြင်းတွေကို ရရှိမှာဖြစ်ပါတယ်..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-certificate"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>JLPT</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-dashboard"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Business & Management Training</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box box-style">
                            <div class="service-icon box-icon-style">
                                <i class="lni lni-graph"></i>
                            </div>
                            <div class="box-content-style service-content">
                                <h4>Corporate Training</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->

        <!-- ========================= contact-section start ========================= -->
        <section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100" style="background-image: url('assets/img/bg/contact-3.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="section-title mb-60">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Contact</span>
                            <h4 class="text-white wow fadeInUp lh-2 text-center" data-wow-delay=".4s">
                                ဂျပန်နိုင်ငံတွင် IT ပညာရှင်တစ်ယောာက်အနေဖြင့် တစ်နှစ်လျှင် မြန်မာငွေ သိန်း ၅၀၀ ဝန်းကျင်မှ ၁၂၅၀ သိန်းဝန်းကျင် ရရှိလိုပါသလား
                            </h4>
                            <h2 class="text-white wow fadeInUp lh-2 text-center" data-wow-delay=".6s">
                                EPDAမှာ သင်တန်းလာရောက် အပ်နှံလိုက်ပါ
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5">
                        <div class="contact-btn text-start text-lg-end">
                            <a href="contact.html" class="theme-btn">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->

        <!-- ========================= pricing-section start ========================= -->
        <section id="pricing" class="pricing-section pt-140 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-10 mx-auto">
                        <div class="section-title text-center mb-60">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Price</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Pricing Plan</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="pricing-btn text-center wow fadeInUp" data-wow-delay=".3s">
                            <ul class="nav justify-content-center mb-90" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" href="#pills-1" role="tab"
                                        aria-controls="pills-1" aria-selected="true">Cashdown</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-2-tab" data-bs-toggle="pill" href="#pills-2" role="tab"
                                        aria-controls="pills-2" aria-selected="false">Installment</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-pricing mb-50">
                                    <h4>Plan A</h4>
                                    <h3>4,000,000</h3>
                                    <ul>
                                        <li><span class="fw-bold">20% OFF</span></li>
                                        <li><span class="text-decoration-line-through">5,000,000</span></li>
                                        <li class="">4,000,000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-pricing active mb-50">
                                    <h4>Plan B</h4>
                                    <h3>4,000,000</h3>
                                    <ul>
                                        <li><span class="fw-bold">20% OFF</span></li>
                                        <li><span class="text-decoration-line-through">5,000,000</span></li>
                                        <li class="">4,000,000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-pricing mb-50">
                                    <h4>Plan A</h4>
                                    <h3>4,000,000</h3>
                                    <ul>
                                        <li><span class="fw-bold">20% OFF</span></li>
                                        <li><span class="text-decoration-line-through">5,000,000</span></li>
                                        <li class="">4,000,000</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-pricing mb-50">
                                    <h4>Basic</h4>
                                    <h3>$15.00</h3>
                                    <ul>
                                        <li>10 Users</li>
                                        <li>Minimal Report</li>
                                        <li>100MB Data Storage</li>
                                        <li>No Support</li>
                                        <li>Single Agent</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="theme-btn border-btn">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-pricing active mb-50">
                                    <h4>Standard</h4>
                                    <h3>$25.99</h3>
                                    <ul>
                                        <li>30 Users</li>
                                        <li>Minimal Report</li>
                                        <li>1GB Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="theme-btn">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-pricing mb-50">
                                    <h4>Premium</h4>
                                    <h3>$220.00</h3>
                                    <ul>
                                        <li>Unlimited Users</li>
                                        <li>Full Report</li>
                                        <li>Unlimited Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="theme-btn border-btn">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ========================= pricing-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class="subscribe-section pt-70 pb-70 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title mb-30">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Subscribe</span>
                            <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <form action="#" class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                            <input type="text" name="subs-email" id="subs-email" placeholder="Your Email">
                            <button type="submit"><i class="lni lni-telegram-original"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo mb-30"><img src="assets/img/logo/logo.png" alt="logo" class="img img-fluid"></a>
                            <!-- <p class="mb-30 footer-desc">We Crafted an awesome desig library that is robust and intuitive to use. No matter you're building a business presentation websit.</p> -->
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4>Quick Link</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">About Us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Service</a>
                                </li> 
                                <li>
                                    <a href="javascript:void(0)">Event</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                            <h4>Service</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Foundation Course</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">ITPEC Exam</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">JLPT</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Business & Management Training</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Coporate Training</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                            <h4>Contact</h4>
                            <ul class="footer-contact">
                                <li>
                                    <p class="mb-0">+95 9 795 350 305</p>
                                    <p>+95 9 400 350 305</p>
                                </li>
                                <li>
                                    <p>info@epda-academy.com</p>
                                </li>
                                <li>
                                    <p>
                                        Room No. 1009 (A,B), Yuzana Tower, Conor of Shwe Gone Dine Road & Gabar Aye Pagoda Road, Bahan Township, Yangon. Myanmar.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="footer-social-links">
                                <ul class="d-flex">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="wow fadeInUp" data-wow-delay=".3s">&copy; EPDA-Academy</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->

        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>
        
		<!-- ========================= JS here ========================= -->
		<script src="assets/js/bootstrap.bundle-5.0.0-beta1.min.js"></script>
		<script src="assets/js/contact-form.js"></script>
        <script src="assets/js/count-up.min.js"></script>
        <script src="assets/js/tiny-slider.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/glightbox.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/imagesloaded.min.js"></script>
		<script src="assets/js/main.js"></script>

        
    </body>
</html>
