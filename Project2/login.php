<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'dbcon.php';
  $username = $_POST["username"];
  $password = $_POST["password"]; 
  
  $sql = "Select * from users where username='$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1){
    while($row=mysqli_fetch_assoc($result)){
      if (password_verify($password, $row['password'])){ 
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['sno'] = $row['sno'];
        header("location: index.php");
      } 
      else{
        $Error = "Invalid Credentials";
        $showError=true;
      }
    }
  } 
  // else{
  //   $showError = "Invalid Credentials";
  // }
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
  <?php
      if($showError){
       echo '<div class="alert warning">
      <span class="closebtn">&times;</span> 
      <strong>Error!</strong> '. $Error.'</div>';
      }
      ?>
    
<div class="box">
<form  action=" " method="post">
  <h1>Login</h1>
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="login" value="Login">
  <p style="margin-bottom:15px;margin-top:18px;">New on Website? <a href="signup.php" style="text-decoration: underline;color:aquamarine;">click here to signup</a></p>
  <p>Forget Password? <a href="forgotpassword.php" style="text-decoration: underline;color:aquamarine;">click here</a></p>
</form>
<!-- <a href="forgotpassword.php"><div class="form"><button class="button">Forget Password</button></div></a> -->
</div>
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
