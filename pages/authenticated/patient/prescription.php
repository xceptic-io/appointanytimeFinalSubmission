<?php include "patient_service.php"; ?> 
<?php
        $i = 0;
        $patient = array(); $doctor = array(); $medicines = array();
        $patient['patient_name'] = "               "; $patient['DOB'] = "              "; $age = "           "; $patient['phone'] ="                ";
        $doctor['hospital'] = "      "; $doctor['doctor_name'] = "      "; $doctor['genre'] = "      ";
       
        $medicines['medicine'] = "   "; $medicines['medicine_power'] = "   "; $medicines['schedule'] = "   "; $medicines['meal'] = "   ";  $medicines['course_duration'] = "   ";
        
        if(isset($_GET['pid'])){

        $p = getPatientUserNameByPrescriptionId($_GET['pid']);
        $patient_username = $p['patient_user_name'];
        $patient = getPatientUserName($patient_username);
        
        $today = new DateTime(); 
        $today = $today->format('d-m-Y H:i:s');
        
        $bdate = $patient['DOB'];
        $bdate = str_replace("/","-", $bdate);
        $age = date_interval($today, $bdate);


        $d = getDoctorUserNameByPrescriptionId($_GET['pid']);
        $doctor_username = $d['doc_user_name'];
        $doctor = getDoctorUserName($doctor_username);

        $medicines = getMedicines($_GET['pid']);

    }

?>









<fieldset><h4>Prescription</h4></fieldset>
<br>

<table width = "100%">
<tr>
<td >
<table width = "100%">
<tr><td><b><?=$doctor['hospital']?></b></td></tr>
<tr><td><b><?=$doctor['genre']?></b></td></tr>
<tr><td><b><?=$doctor['doctor_name']?></b></td></tr>
</table>
</td>
</table>

<br>

<table width = "100%">
<tr>
<td >
<fieldset width = "50%">
<legend><b>Patient: <?=$patient['patient_name']?></b></legend>
<table align = "left" width = "50%">
<tr><td><b>DOB: <?=$patient['DOB']?></b></td></tr>
<tr><td><b>Age: <?=$age?></b></td></tr>
<tr><td><b>Phone: <?=$patient['phone']?></b></td></tr>
</table>
</fieldset>
</td>

<td >
<fieldset width = "50%">
<legend><b>Info</b></legend>
<table align = "right" width = "50%">
<tr><td><b>Reffered by: <?=$p['referred_by']?></b></td></tr>
<tr><td><b>Reffered to: <?=$p['reffered_to']?></b></td></tr>
<tr><td><b>Prescribed Date: <?=$p['prescribe_date']?></b></td></tr>
</table>
</fieldset>
</td>

</table>

<br>
<fieldset>
<legend><b>Symptoms/Problem</b></legend>
<?=$p['problem']?>
</fieldset>

<br>
<fieldset>
<legend><b>Medicine</b></legend>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="center">No</th>
        <th align="center">Medicine Name</th>
        <th align="center">Strength</th>
        <th align="center">Schedule</th>
        <th align="center">Meal</th>
        <th align="center">Days</th>

    </tr>

   <?php if (count($medicines) == 0) { ?>
            <tr><td colspan="6" align = "center">NO MEDICINE FOUND</td></tr>
        <?php } ?>
    <tr>
    
    <?php foreach ($medicines as $medicine) { ?>
            <tr>
                <td><?=++$i?></td>
                <td><?= $medicine['medicine'] ?></td>
                <td><?= $medicine['medicine_power'] ?></td>
                <td><?= $medicine['schedule'] ?></td>
                <td><?= $medicine['meal'] ?></td>
                <td><?= $medicine['course_duration'] ?></td>
                
            </tr>
        <?php } ?>


    
</table>

</fieldset>

<br>
<fieldset>
<legend><b>Diagnostics</b></legend>
<?=$p['diagnostics']?>
</fieldset>

</body>

