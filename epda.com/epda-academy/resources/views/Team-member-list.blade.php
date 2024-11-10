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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


    <div class="p-5 UI-UX-Members">
        <h3 class="mt-5 mb-3  text-center text-primary ">Team Member list</h3>
        <p class="text-center mb-3">Our Team Members</p>
    </div>

    <section>
        <div class="container">
            <h4 class="p-3">Summary</h4>
            <p class="  fw-bold  text-primary text">ဤ EPDA website ကို
                 EPDA batch 1 တွင်တက်‌ရောက်ပညာသင်ကြားနေသော 
                 ကျောင်းသားကျောင်းသူများမှ ဆရာ၏သင်ကြားပြသမှုအောက်တွင်
                 ရေးသားခဲ့ပါသည်။</p><br><br>
                
                 <!-- for responsive -->
            <div class="container">
              <div class="row">
                <div class="col-lg-12 mt-5">
                <h1 class="text-primary text-center r-text">
                            UI,UX DESIGN
                            </h1>
                           
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-2  mb-5 box d-flex  justify-content-center align-items-center">
                    <div class="card" style="width: 15rem; ">
                        <h1 class="text-primary uiux">
                            UI</br>
                            UX</br>
                            </br>
                            D</br>
                            E</br>
                            S</br>
                            I</br>
                            G</br>
                            N</h1>
                    </div>
                </div>


                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-4 box gx-5 mb-5">
                            <div class="card">
                                <div>
                                    <img class="img img-fluid border border-primary rounded-circle" src="assets/img/students/YMM.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center text-color">Yin Myo Myat</h5>
                                    <p class="card-text text-center">Full Stack Developer </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 box gx-5 mb-5">
                            <div class="card">
                                <img class="img img-fluid border border-primary rounded-circle" src="assets/img/students/HHH.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-color"> Htet Htet Htun</h5>
                                    <p class="card-text text-center"> UI Developer</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 box gx-5 mb-5">
                            <div class="card" >
                                <img class="img img-fluid border border-primary rounded-circle" src="assets/img/students/HHHA.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-color">Hnin Htet Htet Aung</h5>
                                    <p class="card-text text-center">UI Designer</p>

                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 box gx-5 mb-5">
                            <div class="card">
                                <img class="img img-fluid border border-primary rounded-circle" src="assets/img/students/YMMH.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-color">Yoon Mi Mi Hlaing</h5>
                                    <p class="card-text text-center">UX Developer</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 box gx-5 mb-5">
                            <div class="card">
                                <img class="img img-fluid border border-primary rounded-circle" src="assets/img/students/SMA.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-color">Su Myat Aung</h5>
                                    <p class="card-text text-center">UX Researcher</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 box gx-5 mb-5">
                            <div class="card" >
                                <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/MTP.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-color">May ThinGyan Phoo</h5>
                                    <p class="card-text text-center">UX Researcher</p>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        
    </section>

        <!-- for responsive -->
        <div class="container UI-UX-Members">
              <div class="row">
                <div class="col-lg-12">
                <h1 class="text-primary text-center r-text">
                            FUNCTION
                            </h1>
                           
                </div>
              </div>
            </div>



        <section class=" UI-UX-Members pt-100 pb-100">
            <div class="container ">

            <h1 class="text-primary text-center pb-50">Function</h1>
                           
                <div class="row">
                    <!-- <div class="col-lg-2  mb-5 box d-flex  justify-content-center align-items-center">
                        <div class="" style="width: 15rem; ">
                            <h1 class="text-primary uiux">
                                F</br>
                                U</br>
                                N</br>
                                C</br>
                                T</br>
                                I</br>
                                O</br>
                                N</h1>


                        </div>
                    </div> -->


                    <div class="col-lg-12 ">
                        <div class="row">
                            <div class="col-lg-4 box gx-5 mb-5">
                                <div class="">
                                    <div>
                                        <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/AMK.jpg" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Aung Min Khant</h5>
                                        <p class="card-text text-center">Back-End Developer</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 box gx-5 mb-5">
                                <div class="">
                                    <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/LHKK.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Linn Htet Ko Ko</h5>
                                        <p class="card-text text-center"> Back-End Developer</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 box gx-5 mb-5">
                                <div class="">
                                    <img class="img img-fluid border border-primary  rounded-circle" src="assets/img/students/MTK.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Myat Thu Kha</h5>
                                        <p class="card-text text-center">Back-End Developer</p>

                                    </div>
                                </div>
                            </div>

                           

                            <div class="col-lg-4 box gx-5 mb-5">
                                <div class="">
                                    <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/OKM.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Oakkar Maung</h5>
                                        <p class="card-text text-center">Back-End Developer</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 box gx-5 mb-5">
                                <div class="">
                                    <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/NNL.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Nyi Nay La</h5>
                                        <p class="card-text text-center">Back-End Developer</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 box gx-5 mb-5">
                                <div class="">
                                    <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/SLA.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Shine Linn Aung</h5>
                                        <p class="card-text text-center">Back-End Developer</p>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            
            </section>

            <!-- for responsive -->
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                <h1 class="text-primary text-center r-text">
                           DATABASE
                            </h1>
                        
                </div>
              </div>
            </div>


            <section class="Database-Members pt-100 pb-100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-2  mb-5 box d-flex  justify-content-center align-items-center">
                            <div class="card" style="width: 15rem; ">
                                <h1 class="text-primary uiux">
                                    D</br>
                                    A</br>
                                    T</br>
                                    A</br>
                                    B</br>
                                    A</br>
                                    S</br>
                                    E</h1>


                            </div>
                        </div>


                        <div class="col-lg-10 ">
                            <div class="row">
                                <div class="col-lg-4 box gx-5 mb-5">
                                    <div class="card">
                                        <div>
                                            <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/KTL.jpg" alt="Card image cap">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-color">Khant Thu Linn</h5>
                                            <p class="card-text text-center">Back-End Developer</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 box gx-5 mb-5">
                                    <div class="card">
                                        <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/PPP.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-color">Pyae Phyo Paing</h5>
                                            <p class="card-text text-center"> Back-End Developer</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 box gx-5 mb-5">
                                    <div class="card">
                                        <img class="img img-fluid border border-primary rounded-circle" src="assets/img/students/LY.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center text-color">La Yaung</h5>
                                            <p class="card-text text-center">Back-End Developer</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 box gx-5 mb-5">
                                <div class="card">
                                    <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/STW.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Si Thu Win</h5>
                                        <p class="card-text text-center">Back-End Developer</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 box gx-5 mb-5">
                                <div class="card">
                                    <img class="img img-fluid  border border-primary  rounded-circle" src="assets/img/students/ZY.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-color">Zay Ya</h5>
                                        <p class="card-text text-center">Back-End Developer</p>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            </section>
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