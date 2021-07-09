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
    
    <link rel="stylesheet" href="cspit_logo.css">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <?php include 'header.php'; ?> 
    <div class="img">
    <div class="name"><img src="photos/cspit_logo.png" alt="IIT" style=""><h1>CHANDUBHAI S. PATEL INSTITUTE OF TECHNOLOGY - [CSPIT], ANAND</h1></div>
    </div>
   <div class="placement">
   <div class="placement1"><h1>CHANDUBHAI S. PATEL INSTITUTE OF TECHNOLOGY - [CSPIT], ANAND PLACEMENTS</h1></div>
   <hr><hr><hr>
   <div >
   <table id="placement2">
 <thead>
 <tr>
    <th>YEAR</th>
    <th>PLACEMENTS(%)</th>
    
  </tr>
 </thead>
 <tbody>
  <tr>
    <td width="490">2020</td>
    <td width="490">90%</td>
    
  </tr>
  <tr>
    <td width="490">2019</td>
    <td width="490">94%</td>
    
  </tr>
  <tr>
    <td width="490">2018</td>
    <td width="490">92%</td>
    
  </tr>
  <tr>
    <td width="490">2017</td>
    <td width="490">93%</td>
    <!-- 50, 127, 168 -->
    <!-- 123, 50, 168 -->
    <!-- 176, 40, 160 -->
    <!-- 117, 117, 74 -->
    <!-- 74, 114, 117 -->
    <!-- 74, 96, 117 -->
    <!-- 117, 74, 74 -->
    <!-- 242, 180, 179 -->
    <!-- 242, 179, 179 -->
    <!-- 242, 104, 104 -->
  </tr>
  </tbody>
</table>
   </div>
   </div>

   <div class="course">
   <div class="course1"><h1>CSPIT - ANAND FEES</h1></div>
   <hr><hr><hr>
   <div >
   <table id="course2">
 <thead>
 <tr>
    <th>COURSE</th>
    <th>FEES</th>
    
  </tr>
 </thead>
 <tbody>
  <tr>
    <td width="490">M.Tech</td>
    <td width="490">₹1.59 Lakhs (1st Year Fees)</td>
    
  </tr>
  <tr>
  <td width="490">B.Tech</td>
    <td width="490">₹1.28 Lakhs (1st Year Fees)</td>
    
  </tr>
  
  </tbody>
</table>
   </div>
   </div>

   <div class="course">
   <div class="course1"><h1>CSPIT - ANAND ELIGIBILITY</h1></div>
   <hr><hr><hr>
   <div >
   <table id="course2">
 <thead>
 <tr>
    <th>COURSE</th>
    <th>ELIGIBILITY</th>
    
  </tr>
 </thead>
 <tbody>
  <tr>
    <td width="490">M.Tech</td>
    <td width="490">Graduation</td>
    
  </tr>
  <tr>
  <td width="490">B.Tech</td>
    <td width="490">10+2 with 45% + GUJCET</td>
    
  </tr>
 
  </tbody>
</table>
   </div>
   </div>
  <a href="https://www.charusat.ac.in/cspit/" target="_blank"><div class="form"><button class="button">For More Information</button></div></a> 
  <?php
   require_once "dbcon.php";
   ?>
    <?php
   $name="Chandubhai S Patel Institute of Technology";
   $sql = "SELECT `college_id` FROM `colleges` WHERE college_name='$name'";
   $result = mysqli_query($conn,$sql);
    if( $row = mysqli_fetch_assoc($result)){
     $id=$row['college_id'];
     echo '<a href="threadlist.php?catid='.$id.'"><div class="form" style="margin-bottom: 30px;"><button class="button">Give Review for '.$name.'</button></div></a>';
     }
   ?>  
</body>
</html>