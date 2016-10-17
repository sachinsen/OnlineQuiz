
<?php
// Start the session
session_start();
$_SESSION["correct"]=0;
?>

<?php

 

if(isset($_SESSION['test'])) {
	$_SESSION['a']=1;
		
}   else{
    unset($_SESSION['a']);
    header('Location:aptiresult.php');
} 

?>
<script>
window.onbeforeunload = function() {
        return "are you sure you want to leave? your all answered will be destroyed!";
    }
</script>
<script type="text/javascript">
    function clicked() {
       if (confirm('Do you wanna to submit?')) {
           yourformelement.submit();
       } else {
           return false;
       }
    }
</script>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mocktest";
$i=0;
$quest=array();
$opta=array();
$optb=array();
$optc=array();
$optd=array();
$correct=array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM reasoning ORDER BY RAND()";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
     $i=$i+1;
         
    
    $quest[$i]=$row["ques"];
    $opta[$i]=$row["a"];
    $optb[$i]=$row["b"];
    $optc[$i]=$row["c"];
    $optd[$i]=$row["d"];
        $correct[$i]=$row["correct"];
        
    
    }
} else {
    
}

mysqli_close($conn);
?> 
<script>
  $('#btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('#btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>




<!DOCTYPE html>

<html>

<head>

<title></title>

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Overlock+SC' rel='stylesheet' type='text/css'>
   
    
</head>

<body  style="margin-top:0;background:;" >

   
    

   

    

    

  <div class="col-md-9">  

<div class="container-fluid " style="margin-top:50px;">


<!-- questions -->
<ul class="nav nav-tabs" role="tablist">
    <li class="active">
        <a href="#q11" role="tab" data-toggle="tab">1</a></li>
    <li><a href="#q12" role="tab" data-toggle="tab">2</a></li>
    <li><a href="#q13" role="tab" data-toggle="tab">3</a></li>
    <li><a href="#q14" role="tab" data-toggle="tab">4</a></li>
    <li><a href="#q15" role="tab" data-toggle="tab">5</a></li>
    <li><a href="#q16" role="tab" data-toggle="tab">6</a></li>
    <li><a href="#q17" role="tab" data-toggle="tab">7</a></li>
    <li><a href="#q18" role="tab" data-toggle="tab">8</a></li>
	<li><a href="#q19" role="tab" data-toggle="tab">9</a></li>
	<li><a href="#q20" role="tab" data-toggle="tab">10</a></li>
	<li><a href="#q21" role="tab" data-toggle="tab">11</a></li>
    <li><a href="#q22" role="tab" data-toggle="tab">12</a></li>
    <li><a href="#q23" role="tab" data-toggle="tab">13</a></li>
    <li><a href="#q24" role="tab" data-toggle="tab">14</a></li>
    <li><a href="#q25" role="tab" data-toggle="tab">15</a></li>
    <li><a href="#q26" role="tab" data-toggle="tab">16</a></li>
    <li><a href="#q27" role="tab" data-toggle="tab">17</a></li>
    <li><a href="#q28" role="tab" data-toggle="tab">18</a></li>
    <li><a href="#q29" role="tab" data-toggle="tab">19</a></li>
    <li><a href="#q30" role="tab" data-toggle="tab">20</a></li>
    <li><a href="#q31" role="tab" data-toggle="tab">21</a></li>
    <li><a href="#q32" role="tab" data-toggle="tab">22</a></li>
    <li><a href="#q33" role="tab" data-toggle="tab">23</a></li>
    <li><a href="#q34" role="tab" data-toggle="tab">24</a></li>
    <li><a href="#q35" role="tab" data-toggle="tab">25</a></li>
    <li><a href="#q36" role="tab" data-toggle="tab">26</a></li>
    <li><a href="#q37" role="tab" data-toggle="tab">27</a></li>
    <li><a href="#q38" role="tab" data-toggle="tab">28</a></li>
    <li><a href="#q39" role="tab" data-toggle="tab">29</a></li>
    <li><a href="#q40" role="tab" data-toggle="tab">30</a></li>

   
</ul>
 
<!-- questons  Content -->
 <div class="tab-content">
<div class="active tab-pane fade in" id="q11">
<h2>First</h2>
    
    
    <?php
echo $quest[1];
?>
    <form method="post" name="myForm" action="aptiresult.php">
    <div class="radio">
  <label><input type="radio" name="apt[1]" value="<?php echo $opta[1]; ?>" ><?php echo $opta[1]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[1]" value="<?php echo $optb[1]; ?>"><?php echo $optb[1]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[1]" value="<?php echo $optc[1]; ?>"><?php echo $optc[1]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[1]" value="<?php echo $optd[1]; ?>"><?php echo $optd[1]; ?></label>
</div>
        <a class="btn btn-danger " style="width:80px">Save</a>
        <a class="btn btn-primary btnNext" style="width:80px">Next</a>
        

    
</div>
<div class="tab-pane fade" id="q12">
 <h2>Second</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
     <div class="tab-pane fade" id="q13">
 <h2>third</h2>
          <?php
echo $quest[3];
?>
    <div class="radio">
  <label><input type="radio" name="apt[3]"  value="<?php echo $opta[3]; ?>"><?php echo $opta[3]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[3]"  value="<?php echo $optb[3]; ?>"><?php echo $optb[3]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[3]"  value="<?php echo $optc[3]; ?>"><?php echo $optc[3]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[3]"  value="<?php echo $optd[3]; ?>"><?php echo $optd[3]; ?></label>
</div>
      <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
      <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
     <div class="tab-pane fade" id="q14">
 <h2>forth</h2>
          <?php
echo $quest[4];
?>
    <div class="radio">
  <label><input type="radio" name="apt[4]"  value="<?php echo $opta[4]; ?>"><?php echo $opta[4]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[4]"  value="<?php echo $optb[4]; ?>"><?php echo $optb[4]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[4]"  value="<?php echo $optc[4]; ?>"><?php echo $optc[4]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[4]"  value="<?php echo $optd[4]; ?>"><?php echo $optd[4]; ?></label>
</div>
    <a class="btn btn-primary btnPrevious">Previous</a>
    <a class="btn btn-danger " style="width:80px">Save</a>
    <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
     
     <div class="tab-pane fade" id="q15">
 <h2></h2>
          <?php
echo $quest[5];
?>
    <div class="radio">
  <label><input type="radio" name="apt[5]"  value="<?php echo $opta[5]; ?>"><?php echo $opta[5]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[5]"  value="<?php echo $optb[5]; ?>"><?php echo $optb[5]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[5]"  value="<?php echo $optc[5]; ?>"><?php echo $optc[5]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[5]"  value="<?php echo $optd[5]; ?>"><?php echo $optd[5]; ?></label>
</div>
          
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
      <a class="btn btn-primary btnNext" style="width:80px" >Next</a>

</div>
     <div class="tab-pane fade" id="q16">
 <h2>Sixth</h2>
          <?php
echo $quest[6];
?>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $opta[6]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optb[6]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optc[6]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optd[6]; ?></label>
</div>
  <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
      <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
     <div class="tab-pane fade" id="q17">
 <h2>Seventh</h2>
          <?php
echo $quest[7];
?>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $opta[7]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optb[7]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optc[7]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optd[7]; ?></label>
</div>
  <a class="btn btn-primary btnPrevious">Previous</a>
  <a class="btn btn-danger " style="width:80px">Save</a>
  <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
     <div class="tab-pane fade" id="q18">
 <h2>eight</h2>
          <?php
echo $quest[8];
?>
    <div class="radio">
  <label><input type="radio" name="q1[]" value=><?php echo $opta[8]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="q1[]"><?php echo $optb[8]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="q1[]"><?php echo $optc[8]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="q"><?php echo $optd[8]; ?></label>
</div>
  <a class="btn btn-primary btnPrevious">Previous</a>
  <a class="btn btn-danger " style="width:80px">Save</a>
  <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
     <div class="tab-pane fade" id="q19">
 <h2>nine</h2>
          <?php
echo $quest[9];
?>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $opta[9]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optb[9]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optc[9]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optd[9]; ?></label>
</div>
  <a class="btn btn-primary btnPrevious">Previous</a>
  <a class="btn btn-danger " style="width:80px">Save</a>
  <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
     <div class="tab-pane fade" id="q20">
 <h2>tenh</h2>
          <?php
echo $quest[10];
?>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $opta[10]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optb[10]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optc[10]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="optradio"><?php echo $optd[10]; ?></label>
</div>
  <a class="btn btn-primary btnPrevious">Previous</a>
  <a class="btn btn-danger " style="width:80px">Save</a>
  <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q21">
 <h2>eleventh</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q22">
 <h2>twenlth</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q23">
 <h2>1</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q24">
 <h2>13th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q25">
 <h2>14th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q26">
 <h2>15th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q27">
 <h2>16th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q28">
 <h2>17th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q29">
 <h2>18th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q30">
 <h2>19th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q31">
 <h2>20th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q32">
 <h2>21th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q33">
 <h2>22th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q34">
 <h2>23th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q35">
 <h2>24th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q36">
 <h2>25th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div><div class="tab-pane fade" id="q37">
 <h2>26th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q38">
 <h2>27th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q39">
 <h2>28th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
<div class="tab-pane fade" id="q40">
 <h2>29th</h2>
     <?php
echo $quest[2];
?>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $opta[2]; ?>"><?php echo $opta[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optb[2]; ?>" ><?php echo $optb[2]; ?></label>
    </div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optc[2]; ?>"><?php echo $optc[2]; ?></label>
</div>
    <div class="radio">
  <label><input type="radio" name="apt[2]" value="<?php echo $optd[2]; ?>"><?php echo $optd[2]; ?></label>
</div>
     <a class="btn btn-primary btnPrevious">Previous</a>
     <a class="btn btn-danger " style="width:80px">Save</a>
     <a class="btn btn-primary btnNext" style="width:80px" >Next</a>
</div>
  <?php $_SESSION['rohit'] = $correct; ?>
     <script>
    $('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>
     
</div> 





 



      </div>
    </div>
    <div class="col-md-3">
        <div class="container" style="background:#2196f3;height:30px;text-align:center;margin-right:10px;width:200px;color:#000000;font-size:18px;margin-top:30px;">
        Time left
        </div>
        <div class="container" style="background:#F0F0F0;height:100px;margin-right:10px;width:200px;box-shadow: 3px 3px 5px gray">
           <h1 style="margin-left:15px;margin-top:30px;"> <!--timer-->
<?php

$timestamp = time();
$diff = 30; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;


?>
            <p id="strclock"></p>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>;

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
    if(min==0&&sec==0)
    {
document.myForm.mySubmit.click();
       
    }
 setTimeout("countdown()",1000);
 }
 countdown();
</script>
       <!-- end  timer--> </h1>
        
        
        </div>
    
           <input class="btn" style="margin-left:170px;margin-top:250px;background:#2196f3;box-shadow: 2px 2px 5px blue;width:110px" type="submit"  onclick="clicked()" name="mySubmit" value="submit">
    </div>




       

     
        


</body>

    </html>