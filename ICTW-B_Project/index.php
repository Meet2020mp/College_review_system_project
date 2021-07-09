
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    // header("location: login.php");
    $loggedin = false;
    $_SESSION['username']="User";
    // exit;
}
else{
   $loggedin= true;
   $uname= $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome   <?php echo $_SESSION['username'];?></title>

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php
      include 'header.php';
    ?>
      
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="crousal.css"> -->
      <style>
        .heading{
          text-align:center;
          text-decoration:underline;
          margin-top:30px;
          font-size:35px;
       }
      </style>
    <style media="screen">
      .carousel-cell {
         width: 100%;
         /* height:450px; */
         }
         .carousel-cell img{
            width:100%;
            height:440px;
         }
         /* cell number */
         .carousel-cell:before {
            display: block;
         }
  </style>
</head>
<body>
    <!-- <header><nav><div class="nav3"></div></nav></header> -->
    <!-- <div> -->
     <div class="carousel" data-flickity='{"autoPlay": true, "imagesLoaded":true,"groupCells":true }'>
       <div class="carousel-cell">
         <img class="w3-image" src="photos/svnit_info.jpg">
       </div>
       <div class="carousel-cell">
         <img class="w3-image" src="photos/DDU_slider.jpg">
       </div>
       <div class="carousel-cell">
         <img class="w3-image" src="photos/MSU.jpg">
       </div>
       <!-- <div class="carousel-cell">
         <img class="w3-image" src="https://smash-images.photobox.com/original/a422aed1a721e933961b19ea9e47e07fc71e0699_Acrylic-Prints-lifestyle-3_1-2600.jpg">
       </div> -->
     </div>
   <!-- </div> -->
     <h1 class="heading">Collages</h1>
    <div class="main">

 <!--cards -->

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
<!--cards -->


<div class="card">

<div class="image">
   <img src="photos/Bg_DDU1.jpg">
</div>
<div class="title">
 <h1>
 Dharmsinh Desai University - [DDU]</h1>
</div>
<div class="des">
 <p>NIRF: 193 || Rating: 4.0/5⭐</p>
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
   <img src="photos/daiict1.jpg">
</div>
<div class="title">
 <h1>
 Dhirubhai Ambani Institute of Information and Communication Technology</h1>
</div>
<div class="des">
 <p>NIRF: 111 || Rating: 4.6/5⭐</p>
<form action="daiict_info.php">
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
   <img src="photos/nirma1.jpg">
</div>
<div class="title">
 <h1>
 Institute of Technology, Nirma University</h1>
</div>
<div class="des">
 <p>NIRF: 131 || Rating: 4.2/5⭐</p>
<form action="nirma_info.php">
<button>Read More...</button>
</form>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="photos/CSPIT1.jpg">
</div>
<div class="title">
 <h1>
 Chandubhai S Patel Institute of Technology - [CSPIT]</h1>
</div>
<div class="des">
 <p>NIRF: 151 || Rating: 4.2/5⭐</p>
<form action="cspit_info.php">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>