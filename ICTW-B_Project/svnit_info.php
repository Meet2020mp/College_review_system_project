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
    
    <link rel="stylesheet" href="svnit_info.css">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <?php include 'header.php'; ?> 
    <div class="img">
    <div class="name"><img src="photos/svnit_logo.png" alt="IIT" style=""><h1>SARDAR VALLABHBHAI NATIONAL INSTITUTE OF TECHNOLOGY - [SVNIT], SURAT</h1></div>
    </div>
   <div class="placement">
   <div class="placement1"><h1>SARDAR VALLABHBHAI NATIONAL INSTITUTE OF TECHNOLOGY - [SVNIT], SURAT PLACEMENTS</h1></div>
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
    <td width="490">70%</td>
    
  </tr>
  <tr>
    <td width="490">2019</td>
    <td width="490">80%</td>
    
  </tr>
  <tr>
    <td width="490">2018</td>
    <td width="490">65%</td>
    
  </tr>
  <tr>
    <td width="490">2017</td>
    <td width="490">75%</td>
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
   <div class="course1"><h1>SVNIT - SURAT FEES</h1></div>
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
    <td width="490">₹95,000 (1st Year Fees)</td>
    
  </tr>
  <tr>
  <td width="490">B.Tech</td>
    <td width="490">₹1.5 Lakhs (1st Year Fees)</td>
    
  </tr>
  <tr>
  <td width="490">B.Sc + M.Sc</td>
    <td width="490">₹87,500 (1st Year Fees)</td>
    
  </tr>
  <tr>
  <td width="490">Ph.D</td>
    <td width="490">₹40,000 (1st Year Fees)</td>
    
  </tr>
  
  </tbody>
</table>
   </div>
   </div>

   <div class="course">
   <div class="course1"><h1> SVNIT - SURAT ELIGIBILITY</h1></div>
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
    <td width="490">Pass in Graduation + GATE</td>
    
  </tr>
  <tr>
  <td width="490">B.Tech</td>
    <td width="490">10+2 with 75% + JEE Main</td>
    
  </tr>
  <tr>
  <td width="490">B.Sc + M.Sc</td>
    <td width="490">10+2</td>
    
  </tr>
  <tr>
  <td width="490">Ph.D</td>
    <td width="490">Post Graduation</td>
    
  </tr>
  
  </tbody>
</table>
   </div>
   </div>
   <a href="https://www.svnit.ac.in/" target="_blank"><div class="form"><button class="button">For More Information</button></div></a> 
   <?php
   require_once "dbcon.php";
   ?>
    <?php
   $name="Sardar Vallabhbhai National Institute of Technology";
   $sql = "SELECT `college_id` FROM `colleges` WHERE college_name='$name'";
   $result = mysqli_query($conn,$sql);
    if( $row = mysqli_fetch_assoc($result)){
     $id=$row['college_id'];
     echo '<a href="threadlist.php?catid='.$id.'"><div class="form" style="margin-bottom: 30px;"><button class="button">Give Review for '.$name.'</button></div></a>';
     }
   ?>   
</body>
</html>