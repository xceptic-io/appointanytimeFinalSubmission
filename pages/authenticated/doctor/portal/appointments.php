<?php include "../../../../service/patient_service.php"; ?> 
<?php
        
        session_start(); 
       // $pats = array()
        $doctor_username = $_SESSION['user_name'];
        
        





        $presLess = array();
        $presLess = getBookingsForDoc2("$doctor_username");
        $index = 0;

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search'])) {
        $searchKey = $_POST['search'];
    
        $presLess = search_booking($searchKey);
        $index = 0;
       
        } 


?> 


<fieldset >
<legend><b>Appoinments</b></legend>

<form method="post">  
  Filter By
     <select>
        <option>Any</option>
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
        <th align="center">Patient Name</th>
        <th align="center">Booking Date</th>
        
        <th align="center">Details</th>
        <th colspan="4"></th>
    </tr>

    <?php if (count($presLess) == 0) { ?>
            <tr><td colspan="4" align = "center">NO RECORD FOUND</td></tr>
        <?php } ?>
    <tr>
    
    <?php foreach ($presLess as $presLess) { ?>
            <tr>
                <td><?=++$index?></td>
                <td><?= $presLess['patient_name'] ?></td>
                <td><?= $presLess['booking_date'] ?></td>
                <td><?= $presLess['problems'] ?></td>
                <td width="40"><a href="../../patient/patientPrescriptions.php?pid=<?= $presLess['p_id']?>">Details</a></td>
            </tr>
        <?php } ?>
        
</table>
</fieldset>

