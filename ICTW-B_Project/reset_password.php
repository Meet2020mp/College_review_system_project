<?php
	session_start();
	if(isset($_GET['sno'])){
		$_SESSION['sno']=$_GET['sno'];
    $showAlert = false;
    $showError = false;
	}
	else{
			if($_POST['psw']!=$_POST['cpassword']){
				$showError=true;
        $showAlert=false;
			}
			else{
				require_once "dbcon.php";
				$Password = $_POST['psw'];
				$sno =  $_SESSION['sno'];
                $hash = password_hash($Password, PASSWORD_DEFAULT);
				$query = "UPDATE `users` SET `password`='$hash' WHERE `sno`=$sno";
				$result = mysqli_query($conn,$query);
        $showAlert=true;
        $showError=false;
        
				// header('Location:login.php');
			}
	}	
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Password</title>
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
     #message {
        display:none;
        background: #f1f1f1;
        color: #000;
        text-align:center;
        position: relative;
        padding: 20px;
        margin-top: 500px;
    }
    
    #message p {
        padding: 10px 35px;
        font-size: 18px;
    }
    
    .valid {
        color: green;
    }
    
    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }
    
    .invalid {
        color: red;
    }
    
    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
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
<form  action="reset_password.php" method="post">
  <h1>Reset Password</h1>
  <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
  <input type="password" name="cpassword" placeholder="ConfirmPassword">
  <input type="submit" name="login" value="Reset Password">
</form>
</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

myInput.onkeyup = function() {
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<?php
if($showAlert){
  echo '<div class="alert success">
        <span class="closebtn">&times;</span> 
        <strong>Success!</strong> You have successfully set your password <a href="login.php">click here to login</a>
         </div>'; 
}
if($showError){
  echo '<div class="alert warning">
  <span class="closebtn">&times;</span> 
  <strong>Error!</strong> Passwords are not matched.
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
