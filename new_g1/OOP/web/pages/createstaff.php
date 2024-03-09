<?php  
  $create = $_GET;
?>

<!DOCTYPE html>
<head>
<title>Staff Create</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!-- title logo -->
   <link rel="icon" type="image/png" href="../image/titleLogo.jpg">

</head>

<body>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="../image/epdalogoonly.jpg" width="60px" height="60px" >

        <h4 class="modal-title  mt-2" id="exampleModalLongTitle" style="color:#011c62">Create your Staff account</h4><br>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="insert.php" method="POST">

    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name"  class="form-control text-secondary" placeholder="Enter Name" />
    </div>

    <div class="form-group">
      <label for="gender">Gender</label>
    <select name="gender" id="gender" class="form-control" >

      <option selected disabled>Select Gender</option>
      <option name="gender value="male">Male</option>
      <option name="gender value="female">Female</option>
    </select>
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" id="email"  class="form-control text-secondary" placeholder="Enter Email" />
    </div>

    <div class="form-group">
          			<label for="password">Password</label>
          			 <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>


                  </div>
            </div>
          </div>


          <div class="form-group ">
            <label>Role</label>
      <select name="role" id="role" class="inputField text-secondary ">
				<option selected disabled>Select Role</option>
        <option  value="staff">Staff</option>
      </select>
          </div>

          <div><button type="submit" id="signup" class="btn btn-primary float-right ">Submit</button></div>
    

    </form>

    </div>

<div class="modal-footer">
  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
  
  
</div>
</div>
</div>
</div>

<form action="../index.php"><button type="submit" class="btn btn-primary mt-3 ml-3 ">Back to List</button></form>
    


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<script>
// Open the Bootstrap modal when the page loads
$(document).ready(function() {
  $('#exampleModalCenter').modal('show');
});
</script>


<script>
$(document).ready(function() {
$('#togglePassword').on('click', function() {
const passwordField = $('#password');
const passwordFieldType = passwordField.attr('type');
if (passwordFieldType === 'password') {
  passwordField.attr('type', 'text');
  $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
} else {
  passwordField.attr('type', 'password');
  $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
}
});
});
</script>

</body>

</html>