



<form method = "post" action="forward_doc.php" target="_parent">
<fieldset>Complete your patient registration</fieldset>
<br />
<fieldset>
    <legend><b>DOCTOR REGISTRATION</b></legend>
    <form method="post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="130"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text"></td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text">
                    <abbr title="hint: sample@example.com"></abbr>
                </td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input name="userName" type="text"></td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="password" type="password"></td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Confirm Password</td>
                <td>:</td>
                <td><input name="confirmPassword" type="password"></td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>   
                    <input name="gender" value ="Male" type="radio">Male
                    <input name="gender" value ="Male" type="radio">Female
                    <input name="gender" value ="Male" type="radio">Other
                </td>
                <td></td>
            </tr>       
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text">  
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
                </td>
                <td></td>
            </tr>

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td><input name="phone" type="text"></td>
                <td></td>
            </tr>  

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Specialization</td>
                <td>:</td>
                <td><input name="specialist" type="text"></td>
                <td></td>
            </tr>  


            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Degree</td>
                <td>:</td>
                <td><input name="degree" type="text"></td>
                <td></td>
            </tr>   

            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Institution</td>
                <td>:</td>
                <td><input name="institution" type="text"></td>
                <td></td>
            </tr>   

            <tr>
                <td>Hospital</td>
                <td>:</td>
                <td><input name="hospital" type="text"></td>
                <td></td>
            </tr>  

            <tr>
                <td>Available Time</td>
                <td>:</td>
                <td><input name="available_time" type="text"></td>
                <td></td>
            </tr> 

            

            <tr>
                <td>Max Patient</td>
                <td>:</td>
                <td><input name="max_patient" type="text"></td>
                <td></td>
            </tr>

            <tr>
                <td>Address</td>
                <td>:</td>
                <td><input name="address" type="text"></td>
                <td></td>
            </tr>


        </table>
        <hr/>
        <input type="submit" value="Submit">
        <input type="reset">
    </form>
</fieldset>
</form>