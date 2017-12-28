<?php include "../../../../service/patient_service.php"; ?> 

<?php
        session_start();

        
        

        if ($_SERVER['REQUEST_METHOD'] == "POST"  ) 
        {
        
    
         insertDiag($_POST['test_name'], $_POST['lab'], $_POST['loc'], $_POST['fee']);
         $index = 0;
         header('Location: ../account/dashboard.php');
       
        } 

?>

<form method = "POST">
<fieldset>
    <legend>
        <b>Add Diagnosis</b>
    </legend>

<table align = "center"  border="0">
   <tr>
      <th>Diagnosis/test name</th>
      <th>Location address</th>
   </tr>

   <tr>
      <td><input type="text" name = "test_name"></td>
      <td><input type="text" name = "loc"></td>
   </tr>
    
   <tr>
      <th>Lab center name</th>
      <th>Fee</th>
   </tr>

   <tr>
      <td><input type="text" name = "lab"></td>
      <td><input type="text" name = "fee"></td>
   </tr>
   
   <tr> <td = colspan = "2"><br></td></tr>
   <tr align = "center" >
      <td colspan = "2"><input type="submit" value = "ADD"></td>
   </tr>


</table>
</fieldset>
</form>