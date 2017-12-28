<?php include "../../../service/patient_service.php"; ?> 
<?php
    session_start();
    $cnt = array(); 
    //echo var_dump($_GET);
    if(isset($_GET['btn']))
     {      
        $date = $_GET['date'];
         //echo var_dump($date);
       // $a = explode(" ",$date);
        $cnt = count(getNumOfBookingsForDoc($_GET['did'], $date));
       // var_dump($cnt);
        $d = getDoctorUserName($_GET['did']);
        if((int)$cnt < (int)$d['max_patient'])
        {
             
             book($_SESSION['user_name'], $_GET['patient_name'], $_GET['did'], $_GET['date'], $_GET['problems']);  
             //echo'<script> alert("Appointment successful!!");</script>';
              //header('Location: patientPrescriptions.php' );
           }

        else echo'<script> alert("Appointment successful!!");</script>';
      }

      


        $doc = array();
        $doc['doctor_name'] = $doc['degree'] = $doc['genre'] = $doc['institution'] = $doc['hospital'] = $doc['address'] = $doc['phone'] = " ";


    
    if(isset($_GET['did']))
     {      
        $doc = getDoctorUserName($_GET['did']);
     }



?>


<!DOCTYPE html>   
<html>
<body>
<table>
<tr>
<table align="center" style="width:1050px">
<td>

<form style="width: 500px" method="GET">
 <fieldset>
  <legend><font size="6">Personal Information:</legend>
  <font size="3">Name: Dr. <?=$doc['doctor_name']?><br>
  Degree: <?=$doc['degree']?><br>
  Designation: <?=$doc['genre']?><br>
  COLLEGE: <?=$doc['institution']?><br>
 </fieldset>
</form>
</td>

<td>
<form style="width: 500px" >

 <fieldset>
  <legend><font size="6">Booking Details:</legend>
  <font size="3">

  Patient Name: <input type="text" name = "patient_name"><br>
  Date: <input type="date" name="date"><br>

  Brief Problems: <input type="text" name = "problems"><br>
  <input type="hidden" name="did" value = <?=$_GET['did']?> >
  <button type="submit" name = "btn" > CONFIRM</button>
 </fieldset>
</form>


</td>
</tr>

<tr>
<td>
<form style="width: 500px" align="right">
 <fieldset>
  <legend><font size="6">Address</legend>
  <font size="3">

  Hospital: <?=$doc['hospital']?> <br>
  Area: <?=$doc['address']?> <br>
  Consulting Time: <?=$doc['available_time']?> <br>
  Contact No: <?=$doc['phone']?><br>
 </fieldset>
</form>
</td>
</tr>

</body>
</html>