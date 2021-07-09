<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbcon.php';
    $username = $_POST["username"];
    $password = $_POST["psw"];
    $cpassword = $_POST["cpassword"];
    $email= $_POST["email"];
   
    $existSqlemail = "SELECT * FROM `users` WHERE email = '$email'";
    $resultemail = mysqli_query($conn, $existSqlemail);
    $numExistRowsemail = mysqli_num_rows($resultemail);
    if($numExistRowsemail > 0){
        $showError = "Email Already Exists";
    }
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        $showError = "Username Already Exists";
    }
    else{
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`, `email`) VALUES ('$username', '$hash', current_timestamp(), '$email');
            ";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
            header("Location:login.php");
        }
        else{
            $showError = "Passwords is not matching Please enter correctly.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Signup Page</title>
 <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
<?php
  include 'header.php';
?>
    <style>
     div{
         align-items: center;
     }
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
<form class="box" action="signup.php" method="post">
        <h1>Sign up</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" title="Enter your Email"required>
        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required>
        <input type="password" name="cpassword" placeholder="Confirm_Password" required>
        <input type="submit" name="submit" value="Signup">
        <p>Already Have an Account? <a href="login.php" style="text-decoration: underline;color:aquamarine;">click here to login</a></p>
    </form>
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
    // echo '<div><strong><b>Success! </b>You are successfully signed up you can now login.</strong></div>';
    echo '<div class="alert success">
    <span class="closebtn">&times;</span> 
    <strong>Success!</strong> You are successfully signed up you can now login.
     </div>';    }
    if($showError){
    // echo '<div><strong><b class=error>Error!</b></strong> '. $showError.'</div> ';
    echo '<div class="alert warning">
    <span class="closebtn">&times;</span> 
    <strong>Error!</strong> '. $showError.'</div>';
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