<?php session_start() ?> 


<fieldset>
    <legend><b>PROFILE</b></legend>
    <form>
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?=$_SESSION['patient_name']?></td>
                <td rowspan="7" align="center">
                    <img width="128" src="../../../../resources/images/user.png"/>
                    <br/>
                    <a href="picture.html">Change</a>
                </td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?=$_SESSION['e_mail']?></td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>			
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?=$_SESSION['gender']?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td><?=$_SESSION['DOB']?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Type</td>
                <td>:</td>
                <td>Patient</td>
            </tr>
            
           
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Last Login</td>
                <td>:</td>
                <td><?=$_SESSION['last_login']?></td>
            </tr>
        </table>	
        <hr/>
        <a href="edit_profile.html">Edit</a>
        <a href="dashboard.php">Dashboard</a>
    </form>
</fieldset>