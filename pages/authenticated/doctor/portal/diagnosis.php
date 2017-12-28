<?php include "../../../../service/patient_service.php"; ?>  
<?php
        //session_start();

        $presLess = array();
        $presLess = getAllDiag();
        $index = 0;

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search'])) {
        $searchKey = $_POST['search'];
    
        $presLess = searchDiag($searchKey);
        $index = 0;
       
        } 

        

?>



<br>

<fieldset>
<legend><b>Diagnosis</b></legend>

<form method="post"> 

  Filter By
     <select>
        <option>Any</option>
        <option>Diagnosis Name</option>
        <option>Lab Name</option>
        <option>Location</option>
        <option>Fee</option>
    </select>
  

        <input type = "text" name="search"/>
        <input type="submit" value="SEARCH"/> <br> <br>

        <a href="adddiagnosis.php">Add New Diagnosis</a>               
</form>

    
<br>


<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="center">Diagnosis Name</th>
        <th align="center">Lab</th>
        <th align="center">Location</th>
        <th align="center">Fee</th>
        <th colspan="4"></th>
    </tr>

    <?php if (count($presLess) == 0) { ?>
            <tr><td colspan="4" align = "center">NO RECORD FOUND</td></tr>
        <?php } ?>
    <tr>
    
    <?php foreach ($presLess as $presLess) { ?>
            <tr>
                
                <td><?= $presLess['diagnosis_name'] ?></td>
                <td><?= $presLess['lab_name']?></td>
                <td><?= $presLess['loc'] ?></td>
                <td><?= $presLess['fee'] ?></td>
                
            </tr>


        <?php } ?>
        
</table>
</fieldset>

