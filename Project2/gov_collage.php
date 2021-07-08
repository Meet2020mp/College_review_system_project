
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    $_session['loggedin']=false;
    $_SESSION['username']="User";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome   <?php echo $_SESSION['username'];?></title>
    <?php
      include 'header.php';
    ?>
        <style>
        .heading{
          text-align:center;
          text-decoration:underline;
          margin-top:30px;
          font-size:35px;
       }
      </style>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="crousal.css">
</head>
<body>
    <!-- <header><nav><div class="nav3"></div></nav></header> -->
   <h1 class="heading">GOVERNMENT COLLEGES</h1>
    <div class="main">
    <div class="card">

<div class="image">
   <img src="photos/IIT_G1.jpg">
</div>
<div class="title">
 <h1>
 INDIAN INSTITUTE OF TECHNOLOGY - [IIT]</h1>
</div>
<div class="des">
 <p>NIRF: 24 || Rating: 4.4/5⭐</p>
<form action="IIT_G_info.php">
<button>Read More...</button>
</form>
</div>
</div>



<div class="card">

<div class="image">
   <img src="photos/Bg_DDU1.jpg">
</div>
<div class="title">
 <h1>
 Dharmsinh Desai University - [DDU]</h1>
</div>
<div class="des">
 <p>NIRF: 193 || Rating: 3.9/5⭐</p>
<form action="ddu_info.php">
<button>Read More...</button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="photos/SVNIT.jpeg">
</div>
<div class="title">
 <h1>
 SARDAR VALLABHBHAI NATIONAL INSTITUTE OF TECHNOLOGY</h1>
</div>
<div class="des">
 <p>NIRF: 54 |Rating: | 4/5⭐</p>
<form action="svnit_info.php">
<button>Read More...</button>
</form>
</div>
</div>
<!--cards -->





<div class="card">

<div class="image">
   <img src="photos/BVM.JPG">
</div>
<div class="title">
 <h1>
 Birla Vishvakarma Mahavidyalaya - [BVM]</h1>
</div>
<div class="des">
 <p >NIRF: 251 || Rating: 3.9/5⭐</p>
  
<form action="bvm_info.php">
<button>Read More...</button>
</form>
</div>
</div>
<!--cards -->






<div class="card">

<div class="image">
   <img src="photos/LD.jpg">
</div>
<div class="title">
 <h1>
 L D College of Engineering</h1>
</div>
<div class="des">
 <p>NIRF: 1140 || Rating: 4.3/5⭐</p>
<form action="LD_info.php">
<button>Read More...</button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="photos/MSU.jpg">
</div>
<div class="title">
 <h1>
 MSU - The Maharaja Sayajirao University</h1>
</div>
<div class="des">
 <p>NIRF: 116 || Rating: 4.1/5⭐</p>
<form action="msu_info.php">
<button>Read More...</button>
</form>
</div>
</div>
<!--cards -->
</div>
<?php
      include 'footer.php';
    ?>
</body>

</html>