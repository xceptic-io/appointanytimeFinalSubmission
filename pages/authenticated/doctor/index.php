<?php
  session_start();
 $d_username = $_SESSION['user_name'];
 $d_name = $_SESSION['doctor_name'];
 
?>



<table width="100%" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="account/dashboard.html" target="contentFrame">
                            <img height="48" src="../../../resources/images/logo.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as Doctor <a href="account/profile.html" target="contentFrame"><?=$d_name?></a>&nbsp;|
                        <a href="../logout.php">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="200" valign="top">
            <b>&nbsp;Account Settings</b><hr />
            <ul>
                <li><a href="account/dashboard.php" target="contentFrame">Dashboard</a></li>
                <li><a href="account/profile.html" target="contentFrame">View Profile</a></li>
                <li><a href="account/edit_profile.html" target="contentFrame">Edit Profile</a></li>
                <li><a href="account/picture.html" target="contentFrame">Change Profile Picture</a></li>
                <li><a href="account/change_password.html" target="contentFrame">Change Password</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
            <hr /><b>&nbsp;Doctor's Portal</b><hr />
            <ul>  
                <li><a href="portal/appointments.php" target="contentFrame">Appointments</a></li> 
                <li><a href="portal/searchPres.php" target="contentFrame">View Prescription</a></li>
                <li><a href="portal/diagnosis.php" target="contentFrame">Diagnosis/Tests</a></li>
                <li><a href="portal/medicine.html" target="contentFrame">Drugs/Medicines</a></li>          
                <li><a href="portal/searchpatient.html" target="contentFrame">Search Patients</a></li>
                <li><a href="portal/create_pres.html" target="contentFrame">Create Prescription</a></li>

            </ul>
            <hr />
        <td valign="top">
            <iframe name="contentFrame" frameborder="0" width="100%" height="530" src="account/dashboard.php"></iframe>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2017
        </td>
    </tr>
</table>