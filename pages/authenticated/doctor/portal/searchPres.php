<?php include "../../../../service/patient_service.php"; ?>  
<?php
        session_start();

        $presLess = array();
        $presLess = getAllPres();
        $index = 0;

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search'])) {
        $searchKey = $_POST['search'];
    
        $presLess = searchpp($searchKey);
        $index = 0;
       
        } 

?>



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
        <th align="center">Prescription ID</th>
        <th align="center">Patient Name</th>
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
                
                <td><?= $presLess['prescription_id'] ?></td>
                <td><?=$presLess['patient_name']?></td>
                <td><?= $presLess['doctor_name'] ?></td>
                <td><?= $presLess['prescribe_date'] ?></td>
                <td width="40"><a href="../../patient/prescription.php?pid=<?= $presLess['prescription_id']?>">See P</a></td>
            </tr>
        <?php } ?>
        
</table>
</fieldset>

