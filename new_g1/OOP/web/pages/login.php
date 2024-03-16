<?php
session_start();
if(!isset($_SESSION['signin'])){
	$_SESSION['userlogin'] = "";
	//  header("Location: ../index.php");
}
require_once('config.php');



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
        <link href="../assets/libs/jquery-ui-1.13.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />

       
	 <!-- google font api -->
	 <style>
	@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
	</style>
	<!-- title logo -->
	 <link rel="icon" type="image/png" href="../image/titleLogo.jpg">

	 <!-- custom css -->
	 <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<div class="container">
		

		 <!-- Start Header Section -->
		<header>
				<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white fixed-top">
					  <div class="container-fluid ">
					  		<a href="index.php" class="navbar-brand ">
					  			<img src="../image/logo.jpg" class="imgnav d-lg-block ">
					  		</a>
						  
							        <button type="button" class="navbar-toggler navbuttons" data-bs-target="#navbarNav" data-bs-toggle="collapse">
									    <div class="bg-secondary lines1"></div>
									    <div class="bg-secondary lines2"></div>
									    <div class="bg-secondary lines3"></div>
									</button> 
 
								    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
								      <ul class="navbar-nav">
								        <li class="nav-item  ">
								        <a class="nav-link " aria-current="page" href="../index.php">Home</a>
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
								          <a class="nav-link " href="userlist.php">User List</a>
								        </li>
								         <li class="nav-item aboutus">
								          <a class="nav-link " href="#">About Us</a>
								        </li>
								         <li class="nav-item ">
								          <a class="nav-link " href="#">Contact Us</a>
								        </li>
								         <li class="nav-item ">
								          <a class="nav-link active" href="login.php"><i class="fa-solid fa-circle-user "></i>Login</a>
								        </li>
								      </ul>
								    </div>
									
		  			</div>
				</nav>

		</header>


				<div class="afterHover ">
					<table cellpadding="10px" cellspacing="50px" class="mb-5 afertable">
						<tr>
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

		 <!-- start login form --> 

		 <div class="loginSection">

		 	
<div class="loginContainer" id="loginContainer">
	<div class="form-container sign-up-container">
		<form action="insert.php" method="post">
			<h1 class="mt-5">Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" class="inputField " name="name" placeholder="Name" />

			<input type="email" class="inputField "  name="email" placeholder="Email" />
			<input type="password" class="inputField " name="password" placeholder="Password" />


			<select name="gender" class="inputField text-secondary ">
				<option selected disabled>Select Gender</option>
           		 <option  value="male">Male</option>
                <option  value="female">Female</option>
               
                
            </select>

			<select name="role" class="inputField text-secondary ">
				<option selected disabled>Select Role</option>
           		 <option  value="teacher">Teacher</option>
                <option  value="student">Student</option>
            </select>

            
			<button id="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		
		<form action="signup.php" method="GET">
			
			<h1 class="mt-5">LOGIN</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
		
			<?php if(isset($_GET['check'])&&($_GET['check']==false)) {?>
				<span class="text-danger">invalid email or password</span>
			<?php } ?>
			 
    		 <input type="text" name="email" id="email"  class="inputField " placeholder="Email" />
			

			<input type="password" name="password" id="password" placeholder="Password" class="inputField" />

			
				
			

             <div class="forcheckbox text-secondary">
          
            		<label>Select Role </label>

            			<label>
					    <input type="checkbox" id="role1" name="role[]" value="teacher"> Teacher
					</label>

					<label>    
					    <input type="checkbox" id="role2" name="role[]" value="student"> Student
					</label>

					<label>
					    <input type="checkbox" id="role3" name="role[]" value="staff"> Staff
					</label>

					<label>
					    <input type="checkbox" id="role4" name="role[]" value="admin"> Admin
					</label>
	
            	
            </div>
			<a href="#">Forgot your password?</a>
			<button id="signin">Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Login</buttton>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and Join Our Epda</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

		 </div>
		 <!-- end login form -->

			 <!-- start footer -->

			 <div id="footer" class="" style="position: absolute; top: 100vh; left: 0;">
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
<script type="text/javascript" src="../js/loginJavascript.js"></script>

<!--custom jquery js -->
<script src="../js/app.js" type="text/javascript"></script>

<!-- <script>
$(function(){
    $('#signin').click(function(e){

        var valid = this.form.checkValidity();
        console.log("valid");

        if(valid){
            var name = $('#name').val();
            var password = $('#password').val();
			// var role = $('#role').val();

			 var roles = []; // Array to store selected roles
    
		    // Loop through all checkboxes with name="role[]" and check if they are checked
		    $('input[name="role[]"]:checked').each(function() {
		        roles.push($(this).val()); // Add the value of checked checkbox to the roles array
		    });

		    console.log(roles); 
        }

        e.preventDefault();

        var rolesJSON = JSON.stringify(roles);
        // $.ajax({
        //     type: 'POST',
        //     url: 'jslogin.php',
        //     data: {name: name, password: password, role: roles},
        //     success: function(data){
		// 		/* alert(data); */
        //         if($.trim(data) === "1"){
        //             setTimeout('window.location.href = "../index.php"')
		// 		}
        //     },
        //     error: function(data){
        //         alert('There were errors while doing the operation.');
        //     }
        // });


        $.ajax({
    type: 'POST',
    url: 'jslogin.php',
    data: {name: name, password: password, roles: rolesJSON}, // Send roles as a JSON string
    success: function(data){
        /* alert(data); */
        if($.trim(data) === "1"){
            setTimeout('window.location.href = "../index.php"')
        }
    },
    error: function(data){
        alert('There were errors while doing the operation.');
    }
});
    });
});

</script> -->

</body>
</html>

