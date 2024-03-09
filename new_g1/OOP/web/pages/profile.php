<?php 
	
	require_once("user.php");

	if (!empty($_GET['id'])) {
		// code...
		$id = $_GET['id']??'';

     $users = User::find($id);

     

	}
	

    $chng = $_REQUEST['changeprofile'] ?? '';
 ?>

 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
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

	 <!-- google font api -->
	 <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet"> -->
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
								         <li class="nav-item d-flex circular-picture">
								          <!-- <i class="fa-solid fa-circle-user mt-4"></i><a class="nav-link active" href="login.php">Login</a> -->

								          <a href="profile.php?id=<?= $id ?>" class="circle-container"><img src="../image/fe.jpg"></a>
								        </li>
								      </ul>
								    </div>
									
		  			</div>
				</nav>

		</header>


				<div class="afterHover ">
					<table cellpadding="10px" cellspacing="50px" class="mb-5  afertable" >
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


		 <!-- start profile -->
		 <div class="bg-primary w-100 bgblue"></div>
		 <div class="profile-page ">

			  <div class="content">
			    <div class="content__cover">
			      <div class="content__avatar"></div>
			      <div class="content__bull"><span></span><span></span><span></span><span></span><span></span>
			      </div>
			    </div>
			    
			    <div class="content__title ">
			    	
			    	<?php if (isset($_GET)) {

			    			if ($chng==="1") { ?>
			    			<span>Edit your profile</span><br>
			    			<form action="editprofile.php" method="GET">

			    		<label form="name" class="mt-3 " class="proedit">Name :</label><br>
			    		<input type="text" name="id" value="<?=$id?>" hidden >
			    		<input type="text" id="name" name="name" placeholder="<?=$users->name?>" class="profileinput mb-4" value="<?=$users->name?>"><br>
			    		<label form="email" class="mt-3 " class="proedit">Email :</label><br>

			    		<input type="text" id="email" name="email" placeholder="<?=$users->email?>" class="profileinput mb-4" value="<?=$users->email?>"><br>

			    		<label form="password" class="mt-3 " class="proedit">Password :</label><br>
			    		<input type="text" id="password" name="password" placeholder="<?=$users->password?>" class="profileinput mb-4" value="<?=$users->password?>"><br>

						

			    		
			    	<?php }else { ?>

			     	 <h1><?=$users->name?></h1>
			     	  <span>This is your profile</span>
				  <?php } } ?>


				  <?php if (isset($_GET)) {

			    			if ($chng==="1") { ?>
			    			<label form="gender" class="mt-3 " style="font-size: 15px;">Gender :</label><br>
					 		<select name="gender" class=" text-secondary w-50 p-2 mb-4" style="font-size: 18px; background-color: #f4f6ff; border: 1px solid gray;" value="<?=$users->gender?>" required>
							<option selected disabled>Select Gender</option>
							<option  value="male">Male</option>
							<option  value="female">Female</option>
								               
								                
					  </select><br>

					  <label form="gender" class="mt-3 " style="font-size: 15px;">Role :</label><br>

					  <div class="forcheckbox d-flex text-secondary  w-50" style="margin-left: 25%; background-color: #f4f6ff !important;">
            
            		

            			
					    <input type="checkbox" id="role1" name="role[]" value="teacher" style="font-size: 13px;padding: 5px;"> Teacher
					

					   
					    <input type="checkbox" id="role2" name="role[]" value="student" style="margin-left:20px;font-size: 13px;padding: 5px;"> Student
				

					
					    <input type="checkbox" id="role3" name="role[]" value="staff" style="margin-left:20px;font-size: 13px;padding: 5px;"> Staff
					

					
					    <input type="checkbox" id="role4" name="role[]" value="admin" style="margin-left:20px;font-size: 13px;padding: 5px;"> Admin
					
	
            	
            </div>
						

			    		
			    	<?php }else { ?>

			     	   </div>
			    <div class="content__description">
			    	<span></span><span></span><span></span><span></span>

			    	<p>Gmail - <?=$users->email?></p>
			     
			      <p>Password - <?=$users->password?></p>
			       <p>Gender - <?=$users->gender?></p>
			      <p>Role - <?=$users->role?></p>
			    </div>
				  <?php } } ?>

				 


			  
			    
			    <div class="content__button">
			    	
			    		 
						  <?php if (isset($_GET)) {

			    			if ($chng==="1") { ?>
			    				<div class="d-flex align-item-center justify-content-center">

			    		
						  	<button class="btn btn-outline-primary p-3" >Save Changes  </button>
						  </form>
						 <form action="profile.php" method="GET">
						  	<button class="btn btn-outline-primary p-3" name="id" value="<?=$id?>">Back</button>
						  </form>
 							</div>

			    		<style type="text/css">
			    			.bg{
			    				display: none;
			    			}

			    			.content{
/*			    				border: 100px solid darkblue;*/
/*								width: ;*/
			    			}

			    		</style>

			    		 <div class="bg bg-primary">
			    <div><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
			    </div>

			  </div>
			    		
			    	<?php }else { ?>
			    			<form action="../index.php" method="POST">
			    				<button class="btn btn-outline-secondary p-3 mb-5" name="logout" value="1">Log Out </button>
			    			</form>
			    			<form action="" method="POST">
						  	<button class="btn btn-primary p-3" name="changeprofile" value="1">Change Profile  </button>
						  </form>


			     	
				  <?php } } ?>
			       
			</div>
			  </div>
			  <div class="bg">
			    <div><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
			    </div>

			  </div>
			  

			    		
			    	
			  <div class="theme-switcher-wrapper" id="theme-switcher-wrapper"><span>Themes color</span>
			    <ul>
			      <li><em class="is-active" data-theme="orange"></em></li>
			      <li><em data-theme="green"></em></li>
			      <li><em data-theme="purple"></em></li>
			      <li><em data-theme="blue"></em></li>
			    </ul>
			  </div>
			  <!-- <div class="theme-switcher-button" id="theme-switcher-button">
			    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
			      <path fill="currentColor" d="M352 0H32C14.33 0 0 14.33 0 32v224h384V32c0-17.67-14.33-32-32-32zM0 320c0 35.35 28.66 64 64 64h64v64c0 35.35 28.66 64 64 64s64-28.65 64-64v-64h64c35.34 0 64-28.65 64-64v-32H0v32zm192 104c13.25 0 24 10.74 24 24 0 13.25-10.75 24-24 24s-24-10.75-24-24c0-13.26 10.75-24 24-24z"></path>
			    </svg>
			  </div> -->
			 
			</div>

		 <!-- end profile -->

		 <!-- start footer -->

			 <div id="footer" class="" style="position: absolute; top: 150vh; left: 0;">
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
<!-- <script type="text/javascript" src="../js/loginJavascript.js"></script> -->

<!--custom jquery js -->
<script src="../js/app.js" type="text/javascript"></script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('name').focus();
});

$(function(){
    $('#signin').click(function(e){

        var valid = this.form.checkValidity();

        if(valid){
            var name = $('#name').val();
            var password = $('#password').val();
			var role = $('#role').val();
        }

        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'jslogin.php',
            data: {name: name, password: password, role: role},
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

</script>
</body>
</html>


<?php 

	$chng = $_REQUEST['changeprofile']??'';
	// echo($chng);

	// echo $id;
	 // echo($users->name);
	 

echo "this is in the profile.php which call find function";
     // var_dump($users->role);
     // foreach($users as $u){
     // 	var_dump($u['role']);
     // }


	
 ?>