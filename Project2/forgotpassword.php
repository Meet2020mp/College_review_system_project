<?php
$showError=false;
$showAlert=false;
session_start();
include_once 'dbcon.php';
if(isset($_POST['login']))
{
    $user_id1 = $_POST['username'];
    $result = mysqli_query($conn,"SELECT * FROM users where username='" . $_POST['username'] . "'");
    $num = mysqli_num_rows($result);
    if($num!=1){
      $showError = true;
    }
    else if($num==1){
    $row = mysqli_fetch_assoc($result); 
	$user_id2=$row['username'];
	$email_id=$row['email'];
	$sno = $row['sno'];
  if($user_id1==$user_id2) {
    $to = $email_id;
    $txt = "Hi, $user_id1. Click http://localhost/ict/Project2/reset_password.php?sno=$sno to reset the password";
    $headers = "From: meet2020mp@gmail\r\n";
    $subject = "Reset Password";
     $msg=mail($to,$subject,$txt,$headers);
    if($msg){
      $showAlert=true;
      $_SESSION['msg'] = 'password link sent';
    }
    else{
    echo "mail was not sent!!";			}
  } 
   else{
	  header("signup.php");
	 }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
<?php
include 'header.php';
?>
    <style>
      /* strong{
         background-color:#F0FFFF;
         color:blue;
         padding:8px;
         width:100%;
     } */
     b{
         color:green;
         font-weight:bold;
         font-size:20px;
     }
     b.error{
         color:red;
     }
    .form {
      text-align: center;
    }

    .button {
        background-color: rgb(152, 207, 237);
        font-size: large;
        color: currentcolor;
        font-weight: bold;
        border-radius: 14px;
    }
    .button:hover{
        background-color:black;
    }
    .alert {
  padding: 20px;
  /* background-color: #f44336; */
  color: white;
}
.alert.success {background-color: #04AA6D;}
.alert.warning {background-color: #f44336;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    </style>
  </head>
  <body>
    
<div class="box">
<form  action='' method="post">
  <h1>Password Recovery</h1>
  <input type="text" name="username" placeholder="Username">
  <input type="submit" name="login" value="GetMail">
</form>
</div>
<?php
if($showError){
  echo '<div class="alert warning">
        <span class="closebtn">&times;</span> 
        <strong>Error!</strong> Username not found please sign up first <a href="signup.php">click here to sign up</a>
         </div>'; 
}
if($showAlert){
  echo '<div class="alert success">
        <span class="closebtn">&times;</span> 
        <strong>Success!</strong> Email has been sent successfully.
         </div>'; 
}
?>
<script>
      var close = document.getElementsByClassName("closebtn");
      var i;

      for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
          var div = this.parentElement;
          div.style.opacity = "0";
          setTimeout(function(){ div.style.display = "none"; }, 600);
        }
      }
      </script>
<?php
      include 'footer.php';
    ?>
  </body>
</html>