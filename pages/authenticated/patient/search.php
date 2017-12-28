<?php include "patient_service.php"; ?> 

<?php
    $docs = array();
   if(isset($_POST['searchText']))
     {      
        $docs = search_doc($_POST['searchText']);
     }
?>

<fieldset>
    <legend>
        <b>Search Doctor</b>
    </legend>
<form method="post">  
    Filter By
    <select>
        <option>Any</option>
        <option>Doctor Name</option>
        <option>Specialization</option>
        <option>Hospital Name</option>
    </select>
    <input type="text" name = "searchText"/>
    <input type="submit" value="Search" />
    
</form>
<br> 


<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
        <th align="left">NAME</th>
        <th align="left">SPECIALIZATION</th>
        <th align="left">HOSPITAL</th>
        <th colspan="3"></th>
    </tr>


    <?php if (count($docs) == 0) { ?>
            <tr><td colspan="4" align = "center">NO RECORD FOUND</td></tr>
        <?php } ?>
    <tr>
    
    <?php foreach ($docs as $doc) { ?>
            <tr>
                
                <td><?= $doc['doctor_name'] ?></td>
                <td><?= $doc['genre'] ?></td>
                <td><?= $doc['hospital'] ?></td>
                <td width="40"><a href="bookNow.php?did=<?=$doc['user_name']?>">Appointment</a></td>
            </tr>
        <?php } ?>
   
</table>

</fieldset>
