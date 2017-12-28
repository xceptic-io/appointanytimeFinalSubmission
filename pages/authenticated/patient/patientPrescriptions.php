<?php include "patient_service.php"; session_start();?> 
<?php
        $patientusername =$_SESSION['user_name'];
        if(isset($_GET['pid'])) $patientusername = $_GET['pid'];
        $patient = getPatientUserName($patientusername);
        
        $today = new DateTime(); 
        $today = $today->format('d-m-Y H:i:s');
        
        $bdate = $patient['DOB'];
        $bdate = str_replace("/","-", $bdate);
        $age = date_interval($today, $bdate);

        $presLess = array();
        $presLess = getPatientByUserName("$patientusername");
        $index = 0;

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search'])) {
        $searchKey = $_POST['search'];
    
        $presLess = getPatientByUserName($searchKey);
        $index = 0;
       
        } 

        

?>

<fieldset width = "50%">
<legend><b>Patient Profile</b></legend>

<table align = "left" width = "50%">
<tr><td><b>Name: <?=$patient['patient_name']?></b></td></tr>
<tr><td><b>Gender: <?=$patient['gender']?></b></td></tr>
<tr><td><b>DOB: <?=$patient['DOB']?></b></td></tr>
<tr><td><b>Age: <?=$age?></b></td></tr>
<tr><td><b>Phone: <?=$patient['phone']?></b></td></tr>

</table>
</fieldset>

<br>

<fieldset>
<legend><b>Prescriptions</b></legend>

<form method="post">  
  Filter By
     <select>
        <option>Any</option>
        <option>Prescription ID</option>
        <option>Patient Username</option>
        <option>Patient Name</option>
        <option>Date</option>
    </select>
  

        <input name="search"/>
        <input type="submit" value="SEARCH"/>                
</form>

    
<br>


<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="center">No</th>
        <th align="center">Prescription ID</th>
        <th align="center">Doctor Name</th>
        <th align="center">Date</th>
        <th colspan="4"></th>
    </tr>

    <?php if (count($presLess) == 0) { ?>
            <tr><td colspan="4" align = "center">NO RECORD FOUND</td></tr>
        <?php } ?>
    <tr>
    
    <?php foreach ($presLess as $presLess) { ?>
            <tr>
                <td><?=++$index?></td>
                <td><?= $presLess['prescription_id'] ?></td>
                <td><?= $presLess['doctor_name'] ?></td>
                <td><?= $presLess['prescribe_date'] ?></td>
                <td width="40"><a href="prescription.php?pid=<?= $presLess['prescription_id']?>">See P</a></td>
            </tr>
        <?php } ?>
        
</table>
</fieldset>

