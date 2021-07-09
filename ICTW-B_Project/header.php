<?php
// session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
    $uname= $_SESSION['username'];
  }
  else{
    $loggedin = false;
    $uname="User";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="homepage.css">
    <style>
        p{
            color: white;
            font-size:16px;
        }
        .main-nav{
            display:flex;
            flex-direction:row;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            /* background-color: #333; */
        }
        
        li {
            float: left;
        }
        .right{
            /* padding-left:300px; */
            list-style-type: none;
            margin-right: 0;
            padding-right: 0;
            overflow: hidden;
            float:right;
            position: absolute;
            right: 5px;
            /* margin-right:5px; */
            /* justify-content:space-between; */
            /* right: 0; */
            /* display:flex; */
            /* flex-direction:row-reverse; */
        }
        .right1{
            list-style-type: none;
            margin-right: 0;
            padding-right: 0;
            overflow: hidden;
            float:right;
            position: absolute;
            right: 15px;
            margin-right:105px;
        }
        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            /* padding: 14px 16px; */
            text-decoration: none;
        }
        
        li a:hover, .dropdown:hover .dropbtn {
            /* background-color: red; */
            color:yellowgreen;
        }
        
        li.dropdown {
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    
    .dropdown-content a:hover {background-color: #f1f1f1;}
    
    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>
</head>
<body>  
<header>
      <nav>
       
         <div class="nav1">
              <ul>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Catogory</a>
                        <div class="dropdown-content">
                        <a href="gov_collage.php">Goverment Collages</a>
                        <a href="self_collage.php">Self financial Collages</a>
                        <a href="university.php">Universities</a>
                        </div>
                    </li>
                    <li><a href="contactus.php">Contect us</a>
                    <li><a href="about.php">About</a>
                    <!-- </ul> -->
                  <?php
                  if(!$loggedin){
                  echo '<div class="box1">
                   <li class="right1"><a href="signup.php">Signup</a></li>
                   <li class="right"><a href="login.php">Login</a></li>
                   </div>';}
                  else{
                   echo'<div class="box1">
                   <li class="right1"><b><a href="profile.php">Welcome '.$uname.'</a></b></li>
                   <li class="right"><a href="logout.php" >Logout</a></li>
                   </div>';
                  }
                  ?>
              </ul>
              <!-- <ul class="right"> -->
          </div>
     
          <div class="nav2">
              <img src="photos/Guj.uni.jpg" alt="img" style="height: 10vh;">
              <p class="GUJ_UNI"><a href="index.php">GUJARAT UNIVERSITIES!</a></p>
              <p class="search">Search collages: </p>
              <form action="search.php">
              <input class="searchinput" type="search" name="collagename" id="collagename" placeholder="Search">
              </form>
          </div>
         
      </nav>
  </header>
</body>
</html>