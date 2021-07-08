<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contactus.css">
    <title>Contact Us</title>
    <?php
    session_start();
    include 'header.php';
    ?>
    <style>
       /* .alert{
           background-color:Gainsboro;
           padding:10px;
           color:dimgray;
           margin-bottom:8px;
       }
       .alert b{
           color:red;
       }
       .success {
           background-color:Gainsboro;
           padding:10px;
           color:dimgray;
           margin-bottom:8px;
       }
       .success b{
         color:green;
       } */
       .alert {
  padding: 20px;
  margin-top: 0px;
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
    <!-- <div class="container"> -->
                <!-- <div class="card"> -->
                    <div class="card-body">
                        <form action="contact_us_fun.php" method="post" class="box">
                            <h1>Contact Us</h1>
                            <input type="text" name="UName" placeholder="User Name">
                            <input type="email" name="Email" placeholder="Email" required>
                            <input type="text" name="Subject" placeholder="Subject" required>
                            <textarea name="msg"  placeholder="Write The Message"></textarea>
                            <input type="submit" name="send" value="Send"> 
                        </form>
                    </div>
                <!-- </div> -->
    <!-- </div> -->
    <?php 
        $Msg = "";
        if(isset($_GET['error']))
        {
            $Msg = " Please Fill in the Blanks ";
                                // echo '<div class="alert"><b>Error!</b>'.$Msg.'</div>';
          echo '<div class="alert Warning">
          <span class="closebtn">&times;</span> 
          <strong>Error!</strong> '.$Msg.'
         </div>';
        }
       if(isset($_GET['success']))
        {
         $Msg = " Your Message Has Been Sent ";
                                // echo '<div class="success"><b>success!</b>'.$Msg.'</div>';
        echo '<div class="alert success">
        <span class="closebtn">&times;</span> 
         <strong>Success!</strong> '.$Msg.'
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