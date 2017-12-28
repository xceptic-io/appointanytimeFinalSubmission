<?php 
include "../../../../service/patient_service.php";
session_start(); 
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name = $_POST['name'] ;
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $dob = $_POST['dob'];
   $id = $_SESSION['user_name'];
   $p = array();
   $p = editPatient($id, $name, $email, $gender, $dob);
   

   $_SESSION['user_name'] = $p['user_name'];
   $_SESSION['patient_name'] = $p['patient_name'];
   $_SESSION['e_mail'] = $p['e_mail'];
   $_SESSION['gender'] = $p['gender'];
   $_SESSION['DOB'] = $p['DOB'];
   $_SESSION['last_login'] = $p['last_login'];
}


?>



<fieldset>Edit you profile</fieldset>
<br />
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form method = "post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value = "<?=$_SESSION['patient_name']?>" /> </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="<?=$_SESSION['e_mail']?>" />
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>				
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>   
                    <input name="gender" type="radio" value = "Male" <?php if($_SESSION['gender'] 
                    == "Male" ) echo "checked" ?> />Male
                    <input name="gender" type="radio" value = "Female" <?php if($_SESSION['gender'] 
                    == "Female" ) echo "checked" ?> / >Female
                    <input name="gender" type="radio" value = "Other" <?php if($_SESSION['gender'] 
                    == "Other" ) echo "checked" ?> />Other
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text" value= "<?=$_SESSION['DOB']?>" />
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </td>
                <td></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" value="Save">	
        <a href="dashboard.php">Dashboard</a>
    </form>
</fieldset>