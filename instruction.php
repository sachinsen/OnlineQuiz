<?php
error_reporting(0);
?>


<?php
session_start();
?>

<?php

$_SESSION['test']=1;
$_SESSION['login_user']=$_POST['username'];
if(isset($_SESSION['login_user']))
{
} 
else 
{
		header('Location:index.php');
}    
?>

<?php

$error=''; // Variable To Store Error Message


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mocktest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    // output data of each row

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "<script type=\"text/javascript\">window.alert('Either Username or Password left empty.');window.location.href ='./index.php';</script>";
}
else
{
    
  
// Define $username and $password
 $username=$_POST['username'];
 $password=$_POST['password'];
    
    
    //count user
     $count=  mysqli_query($conn, "select count_user from user_login where uname='$username'" );
     if (mysqli_num_rows($count) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($count)) {
        
  $count = $row["count_user"];
    }
    }
    $count=$count+1;
    mysqli_query($conn,"UPDATE user_login SET count_user='$count' WHERE uname='$username';");
    //end count user
    
    //check user
$checkuser=  mysqli_query($conn, "select check_user from user_login where uname='$username'" );
     if (mysqli_num_rows($checkuser) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($checkuser))
    {
$checkuser = $row["check_user"];
    }
}
        if($checkuser==100)
        
    {
     
        echo "<script type=\"text/javascript\">window.alert('You have entered either wrong Username or Password.');window.location.href = './index.php';</script>";}
   else{
    $checkuser=$checkuser+1;
    mysqli_query($conn,"UPDATE user_login SET check_user='$checkuser' WHERE uname='$username';");
   
    //end check user
    
    
$query = mysqli_query($conn,"select * from user_login where password='$password' AND uname='$username'");

   $rows = mysqli_num_rows($query);

if ($rows==1) {
  
$_SESSION['login_user']=$username; // Initializing Session

    
} else {
echo "<script type=\"text/javascript\">window.alert('You have entered either wrong Username or Password.');window.location.href = './index.php';</script>";
}
mysqli_close($conn); // Closing Connection
}
}
}
?>


<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Overlock+SC' rel='stylesheet' type='text/css'>
    <style>
    a:hover {
    color:black;
}
a{
    color: #2196f3 ;}
    </style>
    </head>
    <body style="margin-top:0;  ">
   <div class="container-fluid" style="background:#2196f3;height:135PX;margin:0px;box-shadow:0px 4px 10px #B6B6B6">
         <div class="col-md-2"><img src="img/SATI.png" style="width:100px;height:125px;margin-left:20px;margin-top:4px"></div>
       <div class="col-md-9"><h1 style="margin-left:30px;font-family: 'Lato', sans-serif;color:#000000 ;padding-top:12px">Samrat Ashok Technological Institute Vidisha (M.P.)</h1>
            <h5 style="text-align:center;font-size:22px">Department of Computer Science and Engineering</h5>
        </div>
        </div> 

   
    

   

    

    

  <div class="col-md-8">  

<div class="container-fluid " style="margin-top:50px;">





<!-- questions -->

<ul class="nav nav-tabs" role="tablist" style="  font-family: 'Overlock SC', cursive;font-size:20px">

 <li class="active"><a href="#q11" role="tab" data-toggle="tab">Rules</a></li>

    <li><a href="#q12" role="tab" data-toggle="tab">About Competition</a></li>

    <li><a href="#q13" role="tab" data-toggle="tab">About Us</a></li>

   

    
</ul>

 

<!-- questons  Content -->

 <div class="tab-content">

<div class="active tab-pane fade in" id="q11">
 <ul style="margin-top:50px;font-family: lato sans-serif;font-size:18px;">
    <li>You can use any programming language to solve the questions.</li>
     <li>You will be asked to submit numerical answer only.</li>
     <li>If your answer will be correct than you have to submit your programming-code(any language.)</li>
     <li>Be sure ,the code submitted is written by you.</li>
    
    </ul>


</div>

<div class="tab-pane fade" id="q12">
    <ul style="margin-top:50px;font-family:  lato sans-serif;font-size:18px;">
    <li>Competition will start on sep,28,2015.</li>
    <li>The timing of competition will be updated soon.</li>
        <li>Every participant will get participation certificate.</li>
        <li>The competition will be held in two rounds.</li>
        <li>In first round you have to compete your college-mates only.</li>
        <li>After compeletion of first round some top programmers will be selected from your college.</li>
<li>Studentts who have qualified for second round,  will have to pay 30/-(link will be provided in your profile) to be eligible for second round.</li> 
        <li>In second round all the winners of first round will compete each-other.</li>
        <li>Winners of second round will get exclusive gifts.</li>
        <li>First round winners will get "top pragrammers in college" certificate.</li>
    </ul>
 

</div>

     <div class="tab-pane fade" id="q13">

 <ul style="margin-top:100px;font-family: lato sans-serif;font-size:18px;">
         <li>About Us will be announced after competition.</li>
         </ul>



</div>
    </div></div></div>
    <div class="col-md-2">
     <div class="container btn btn-default" style="margin-top:200px;;width:300px;opacity:0.5;background:lightgray">
         <a href="mocktest.php" style="text-decoration:none;"><h1 style="margin-top:8px;margin-left:20px;box-shadow: 2px 2px 5px gray">Start Test</h1></a></div>
        </div>    
         <nav class="navbar-default navbar-fixed-bottom"> 
            <div class="col-md-4">
                <h5 style="font-family: 'Lato', sans-serif;color:#909090;"> Developed by <a href="#" style="text-decoration:none;">Rohit , Sachin , Suryansh , Vinay prakash.</a></h5> </div>  
            <div class="col-md-5"></div><div class="col-md-3"> <h5 style="text-align:right;font-family: 'Lato', sans-serif;color:#909090;">Guided by <a href="#" style="text-decoration:none;text-align:center" >Prof. Sandeep Raghuwanshi</a></h5></div>    </nav>    
    </body>