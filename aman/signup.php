<?php

$error="";
$success = "";
session_start();

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "students";

$con = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$con) {
     echo "Connection failed!";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style_signup.css">
</head>
<body>
     <form method="post">
     	<h2>Student Registration Form</h2>
     	<?php if (isset($_GET['error'])) { 
               if ($_GET['error'] == 'error_password') {
                    $error = "Password & confirm password must be same.";
               }
               if ($_GET['error'] == 'email') {
                    $mail = $_GET['mail'];
                    $error = "Account is already registered with E-mail address ".$mail;
               }
               if ($_GET['error'] == 'wrong') {
                    $error = "Something went wrong. Please try again later.";
               }
          ?>
     		<p class="error"><?= $error ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { 
               if ($_GET['success'] == 'success') {
                    $success = "Account created successfully.";
               }
          ?>

               <p class="success"><?= $success ?></p>
          <?php } ?>

          <label>First-Name</label>
          <input class="input" type="text" name="fname" placeholder="Name" required><br>

          <label>Last-Name</label>
          <input class="input" type="text" name="lname" placeholder="Username" required><br>

          <label for="country">Course</label></br>
          <select class="input" id="country" name="course" required>  
               <option value="BCA">BCA</option>  
               <option value="BBA">BBA</option>  
               <option value="B.Tech">B.Tech</option>  
               <option value="MBA">MBA</option>  
               <option value="MCA">MCA</option>  
               <option value="M.Tech">M.Tech</option>  
          </select></br>

          <div>  
               <label>Gender</label><br><br>
               <input type="radio" id="male" value="Male" name="gender" checked > 
               <label for="male">Male</label>   
               <input type="radio" id="female" value="Female" name="gender">
               <label for="female">Female</label>   
               <input type="radio" id="other" value="Other" name="gender">
               <label for="other">Other</label>  
          </div><br><br>


          <label>Phone-Number</label>
          <input class="input" type="text" name="phone" placeholder="+91 9999999999" required><br>

          <label>Address</label>
          <input class="input" type="text" name="address" placeholder="Address" required><br>

          <label>Email-Address</label>
          <input class="input" type="email" name="email" placeholder="Email-Address" required><br>


     	<label>Password</label>
     	<input class="input" type="password" name="password" placeholder="Password" required><br>

          <label>Confirm-Password</label>
          <input class="input" type="password" name="cpassword" placeholder="Confirm-Password" required><br>

     	<button type="submit" name="register">Register</button>
          <a href="index.php" class="ca">Already Registered?</a>
     </form>
</body>
</html>
<?php 

if(isset($_POST['register'])){
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $course = $_POST['course'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $password = md5($_POST['password']);
     $cpassword = md5($_POST['cpassword']);

     if($password == $cpassword){

          $sql = "SELECT * FROM users WHERE email='$email'";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) {
               header("Location: signup.php?error=email&mail=$email");
             exit();
          }else {
               $sql2 = "INSERT INTO users(fname, lname, course, gender, phone, email, password, address) VALUES ('$fname', '$lname', '$course', '$gender', '$phone', '$email', '$password', '$address')";

               $result2 = mysqli_query($con, $sql2);
               if($result2){
                    header("Location: signup.php?success=success");
               } else {
                    header("Location: signup.php?error=wrong");
               }
          }

     }else{
          echo "<script>window.location.href='signup.php?error=error_password';</script>";
     }
     
}

?>


