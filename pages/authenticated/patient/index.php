<?php
  session_start();
 $p_username = $_GET['id'];
 

?>

<form target = _parent>

<table width="100%" height = "100%"cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="patientPrescriptions.php?id=<?=$p_username?>" target="contentFrame">
                            <img height="48" src="../../../resources/images/logo.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="account/profile.php" target="contentFrame"><?=$_SESSION['patient_name']?></a>&nbsp;|
                        <a href="../logout.php">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="200" align="center">
            

                <a href="patientPrescriptions.php?id=<?=$p_username?>" target="contentFrame">Dashboard</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="account/profile.php" target="contentFrame">View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="account/edit_profile.php" target="contentFrame">Edit Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="account/picture.html" target="contentFrame">Change Profile Picture</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="account/change_password.html" target="contentFrame">Change Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                 
                <a href="search.php" target="contentFrame">Find Doctor </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="patientPrescriptions.php?id=<?= $p_username?>" target="contentFrame">Prescriptions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <iframe align = "center" name="contentFrame" frameborder="0" width="100%" height="100%" src="patientPrescriptions.php?id=<?= $p_username?>"> </iframe>
            
                
            
        </td>
        
    </tr>
    <tr>
        <td height = "10%" colspan="2" align="center">
            Copyright &copy; 2017
        </td>
    </tr>
</table>

</form>