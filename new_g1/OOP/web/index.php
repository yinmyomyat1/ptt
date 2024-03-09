<?php
	session_start();
	if(!isset($_SESSION['signin'])){
		 // header("Location: pages/login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EPDA</title>
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- bootstrap -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



	  <!--jquery ui css1-->
        <link href="./assets/libs/jquery-ui-1.13.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />

       
	 <!-- google font api -->
	 <style>
	@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
	</style>


	<!-- title logo -->
	 <link rel="icon" type="image/png" href="image/titleLogo.jpg">

	 <!-- custom css -->
	 <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container">
		

		 <!-- Start Header Section -->
		<header>
				<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white fixed-top">
					  <div class="container-fluid ">
					  		<a href="index.php" class="navbar-brand ">
					  			<img src="image/logo.jpg" class="imgnav d-lg-block ">
					  		</a>
						  
							        <button type="button" class="navbar-toggler navbuttons" data-bs-target="#navbarNav" data-bs-toggle="collapse">
									    <div class="bg-secondary lines1"></div>
									    <div class="bg-secondary lines2"></div>
									    <div class="bg-secondary lines3"></div>
									</button> 
 
								    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
								      <ul class="navbar-nav">
								        <li class="nav-item  ">
								          <a class="nav-link active" aria-current="page" href="index.php" >Home</a>
								        </li>
								       <li class="nav-item  dropdown">
								          <a class="nav-link dropdown-toggle " style="color:#002059;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								            Courses
								          </a>
								          <ul class="dropdown-menu mt-1">
								            <li><a class="dropdown-item " href="#">IP</a></li>
								            <li><a class="dropdown-item " href="#">FE</a></li>
								            <li><a class="dropdown-item " href="#">PHP</a></li>
								          </ul>
								        </li>

								        <li class="nav-item  ">
								          <a class="nav-link " href="./pages/userlist.php">User List</a>
								        </li>
								         <li class="nav-item aboutus">
								          <a class="nav-link " href="#">About Us</a>
								        </li>
								         <li class="nav-item ">
								          <a class="nav-link " href="#">Contact Us</a>
								        </li>
								         <li class="nav-item d-flex">
								          <i class="fa-solid fa-circle-user mt-4"></i><a class="nav-link active" href="pages/login.php">Login</a>
								        </li>
								      </ul>
								    </div>
 
		  			</div>
				</nav>

		</header>


				<div class="afterHover ">
					<!-- <table cellpadding="10px" cellspacing="50px" class="mb-5 afertable"> -->
					<table cellpadding="10px" cellspacing="50px" class=" afertable">
						<tr >
							<td class="text-muted ">CEO</td>
							<td class="text-muted ">PRINCIPAL </td>
							<td class="text-muted ">TOTAL BATCH</td>
							<td class="text-muted ">STAFF</td>
						</tr>

						<tr>
							<td class="text-secondary t-transform">U Kyaw Min Htun</td>
							<td class="text-secondary t-transform">Daw Tin Myo Myo Win</td>
							<td class="text-secondary t-transform">Batch 1</td>
							<td class="text-secondary t-transform">Ko Chan Myae</td>
						</tr>

						<tr>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform">Batch 2</td>
							<td class="text-secondary t-transform">Ko Aung Chang Thar</td>
						</tr>

						<tr>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform"></td>
							<td class="text-secondary t-transform">Foundation</td>
							<td class="text-secondary t-transform">Ma May Thu </td>
						</tr>
					</table>
				</div>
		 <!--End Nav Section-->

			 <!-- start banner section -->
			
 		

 			<div class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/bgOak.jpg" class="d-block w-100" alt="First slide">
                <div class="carousel-caption d-none d-sm-block ">
                    <h2>Welcome To EPDA</h2>
                    <p>Description for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/bgOak2.jpg" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-sm-block ">
                    <h2>Welcome To EPDA</h2>
                    <p>Description for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/bgOak3.jpg" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-sm-block ">
                    <h2>Welcome To EPDA</h2>
                    <p>Description for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

					
		   		

			 <!-- end banner section -->

			 <!-- start better choice  -->
			 <div class="betterchoice ">
			 	<div class="d-flex">
			 		<img src="image/koaung.jpg" width="400px" class="koaung">
			 	<div class="betterText">
			 		<h2>BETTER CHOICE FOR BETTER FUTURE</h2>
			 		<p class="mt-5 ">We Love U KYAW MIN TUN's AKMT Model</p>
			 	</div>
			 	</div>

			 	<!-- <hr> -->


			

		
			 </div>
			 <!-- end better choice -->

			 <!-- start ourcourse -->

			  <div class="ourcourse d-block w-100" style="background-color:#eff4ff ;">
			 	<h3 class="text-center mt-5">OUR COURSES</h3>
			 	<span class="text-center d-block mb-5">Let's learn our enjoyable courses</span>

			 	<div class="d-flex mt-5 ">
			 		<!-- <div class="flip-card">
			 			<div class="flip-card-inner">
                    		<div class="flip-card-front">
			 		<div class="card  cardiv " style="width: 18rem;">
					  <img class="card-img-top " src="image/ip.jpg" alt="Card image cap">
					  <div class="card-body">
					  	<h4 class="text-center">IP</h4>
					    <p class="card-text text-center">Discovering and understanding IP concepts often brings joy and satisfaction to learners.</p>
					  </div>
					</div>
				</div>
				<div class="flip-card-back">
                        <h1>IP</h1>
                        <p>Lorem Ipsum is simply dummy text</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
			</div>
		</div> -->


				<!-- <div class="card    cardiv" style="width: 18rem;">
					  <img class="card-img-top " src="image/fe.jpg" alt="Card image cap">
					  <div class="card-body">
					  	<h4 class="text-center">FE</h4>
					    <p class="card-text text-center">Discovering and understanding IP concepts often brings joy and satisfaction to learners.</p>
					  </div>
				</div> -->

				<div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/ip.jpg" alt="Avatar" style="width:100%; height: 60%;">
                        <div>
                        <h4 class="text-center">IP</h4>
					    <p class="card-text text-center">Discovering and understanding IP concepts often brings joy and satisfaction to learners.</p>
					    </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>IP</h1>
                        <p>Lorem Ipsum is simply dummy text</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                </div>
            </div>

            

				<div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/fe.jpg" alt="Avatar" style="width:100%; height: 60%;">
                        <div>
                        <h4 class="text-center">FE</h4>
					    <p class="card-text text-center">Discovering and understanding FE concepts often brings joy and satisfaction to learners.</p>
					    </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>FE</h1>
                        <p>Lorem Ipsum is simply dummy text</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="image/php.jpg" alt="Avatar" style="width:100%; height: 60%;">
                        <div>
                        <h4 class="text-center">PHP</h4>
					    <p class="card-text text-center">Discovering and understanding PHP concepts often brings joy and satisfaction to learners.</p>
					    </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>PHP</h1>
                        <p>Lorem Ipsum is simply dummy text</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                </div>
            </div>


				<!-- <div class="card   cardiv" style="width: 18rem;">
					  <img class="card-img-top " src="image/php.jpg" alt="Card image cap">
					  <div class="card-body">
					  	<h4 class="text-center">PHP</h4>
					    <p class="card-text text-center">Discovering and understanding IP concepts often brings joy and satisfaction to learners.</p>
					  </div>
				</div>
			 	</div> -->

			 </div>


			 <!-- end our course -->

			 <div id="enrollment" >
            <div class="etext">
                <h3>Enrollment</h3>

                <div class="endiv">
                    <div class="dimg"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="dtext">
                        <h4>Contact</h4>
                        <div>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</div>
                    </div>
                </div>
                <div class="endiv">
                    <div class="dimg"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="dtext">
                        <h4>Consulting</h4>
                        <div>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</div>
                    </div>
                </div>
                <div class="endiv">
                    <div class="dimg"><i class="fa-regular fa-circle-check"></i></div>
                    <div class="dtext">
                        <h4>Register</h4>
                        <div>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</div>
                    </div>
                </div>
            </div>
            <div class="eimg"></div>
        </div>

			 <!-- start footer -->

			 <div id="footer">
           <div class="fd1">
                <div class="dd1">
                    <h4 style="font-size: 25px; letter-spacing: 2px;">EPDA</h4>
                    <span>lorem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</span>

                    <pre><i class="fa-brands fa-twitter"></i>  <i class="fa-brands fa-facebook"></i>  <i class="fa-brands fa-google-plus-g"></i>  <i class="fa-brands fa-linkedin"></i></pre>
                </div>

                <div class="dd2">
                    <h4>USEFUL LINK</h4>
                    <table cellpadding="5px" cellspacing="5px">
                        <tbody><tr>
                            <td>Home</td>
                            <td>Policy</td>
                        </tr>

                        <tr>
                            <td>About us</td>
                            <td>Terms</td>
                        </tr>

                        <tr>
                            <td>Services</td>
                            <td>Help</td>
                        </tr>

                        <tr>
                            <td>Events</td>
                            <td>FAQS</td>
                        </tr>

                        <tr>
                            <td>Features</td>
                            <td>Site Maps</td>
                        </tr>
                    </tbody></table>
                </div>

                <div class="dd3">
                    <h4>RECENT POST</h4>
                    <span>lorem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</span>
                    <br><br>
                    <span>lorem ipsum dolor sit amet, consecter adipiscing elite. Donec minos varius, viverra justo ut, aliquet nisl.</span>
                </div>

                <div class="dd4">
                    <h4>CONTACT</h4>
                    <span><i class="fa-solid fa-location-dot"></i>40 Baria Street 133/2, NewYork City,US</span>
                    <br><br>
                    <span><i class="fa-solid fa-phone"></i> (+88) 111 555 666</span><br><br>
                    <span> <i class="fa-solid fa-envelope"></i>infodeercreative@gmail.com</span>
                </div>
           </div>
            
            <hr>
            <div class="ft">Copyright ©2024 GROUP-1 All rights reserved </div>

        </div>
        <!-- end footer -->
		
	</div>


 
<!--jquery js1-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


 <!--bootstrap css1 js 1-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- custom javascript file -->
<script type="text/javascript" src="./js/javascript.js"></script>

<!--custom jquery js -->
<script src="./js/app.js" type="text/javascript"></script>







</body>
</html>