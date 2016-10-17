<?php
error_reporting(0);
?>

<?php
// Start the session
session_start();
$_SESSION['rohit'];

?>
<?php
unset($_SESSION['test']);
?>

<?php



if (isset($_SESSION['a']))
{

 
    for($i=1;$i<=5;$i++)
        
{
    if ($_POST["apt"][$i]==$_SESSION['rohit'][$i]  )
    {
         $_SESSION['$c']=$_SESSION['$c']+1;
       
       
      
    }
        else if($_POST["apt"][$i]==null)
        {
          echo $_SESSION['$j']=$_SESSION['$j']+1;
        }
        
 
}
        
}

?>  
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    </head>
    
    <body style="margin-top:0;background:white">
      
        <h1  style="color: #787878;text-align:center">Thank You!</h1>
        <div class="container" align="center" style="background:#F0F0F0;height:400px;margin-top:18px;margin-left:100px;margin-bottom:15px;box-shadow: 15px 15px 8px #E0E0E0          ;border:2px solid #F0F0F0 ;">
            <h2  style="color:#2196f3;text-align:center">Result</h2>
           

           <div class="container" style="margin-top:50px">
            <p style="text-align:center;font-family:source sans pro;font-size:200%">Questions Attempted:<?php echo 5-$_SESSION['$j'];?> </p>
            <p style="text-align:center;font-family:source sans pro;font-size:200%">Correct: <?php echo  $_SESSION['$c'];?></p>
            <p style="text-align:center;font-family:source sans pro;font-size:200%">Incorrect: <?php echo 5-$_SESSION['$j']-$_SESSION['$c'];?></p>
            </div></div>
    </body>
</html>