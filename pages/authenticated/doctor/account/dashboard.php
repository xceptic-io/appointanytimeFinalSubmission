<?php include "../../../../service/patient_service.php"; ?> 

<?php

session_start();
$patients = count(getNumOfPatients($_SESSION['user_name']));

?>

<table>
<tr>
<table align="center" style="width:1050px">
<tr>
<td colspan="5">
<fieldset style="width:350px">
<legend><font size="10">Patients</legend>
<input type="button" value="View Details">
<font size="6"><?=$patients?></

</fieldset>
</td>
<td colspan="5">
<fieldset style="width:350px">
<legend><font size="10">Prescriptions</legend>

<input type="button" value="View Details">

<font size="6">200 Prescriptions

</fieldset>
</td>
<td colspan="5">
<fieldset style="width:350px">
<legend><font size="10">Drugs</legend>
<input type="button" value="View Details">
<font size="6">32 Drugs
</fieldset>
</td>
</tr>
</table>
</tr>
<tr>
<table align="center" border="0"  style="width:1050px">
<tr>
<td style="width:500px">
<fieldset style="width:530px">
<legend><font size="7">Appointment list</legend>




<table style="width:530px" border="1">
<tr>
<td style="width:100px" colspan="1" border="1"> Serial   </td>
<td style="width:200px" colspan="3" border="1">Patient Name    </td>
<td  style="width:200px" colspan="3" border="1">Date - Time    </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 01   </td>
<td style="width:200px" colspan="3" border="1">John Hammond    </td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 7.00pm   </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 02   </td>
<td style="width:200px" colspan="3" border="1">Anthony Hopkins   </td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 7.15pm    </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 03  </td>
<td style="width:200px" colspan="3" border="1">Emma Stone   </td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 7.30pm      </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 04   </td>
<td style="width:200px" colspan="3" border="1">Blake Lively  </td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 7.45pm     </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 05  </td>
<td style="width:200px" colspan="3" border="1">Gal Gadot </td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 8.00pm     </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 06   </td>
<td style="width:200px" colspan="3" border="1">Bruce Wayne</td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 8.15pm     </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 07   </td>
<td style="width:200px" colspan="3" border="1">Vera Farmiga</td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 8.30pm     </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 08  </td>
<td style="width:200px" colspan="3" border="1">Chris Pratt</td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 8.15pm     </td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> 09   </td>
<td style="width:200px" colspan="3" border="1">Nicole Kidman</td>
<td  style="width:200px" colspan="3" border="1">12.12.17 - 8.30pm     </td>
</tr>

</table>

</fieldset>


</td>



<td style="width:550px">
<fieldset style="width:550px">
<legend><font size="7">Recent Prescriptions </legend>

<table style="width:550px" border="1">
<tr>
<td style="width:100px" colspan="1" border="1"> Name   </td>
<td style="width:100px" colspan="3" border="1">Date    </td>
<td  style="width:250px" colspan="3" border="1">Problem   </td>
<td  style="width:100px" colspan="3" border="1">Appointment Number</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Jack Snyder </td>
<td style="width:100px" colspan="3" border="1">11.12.17   </td>
<td  style="width:250px" colspan="3" border="1"> Coronary Bronchitis</td>
<td  style="width:100px" colspan="3" border="1">17</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Mr.Y </td>
<td style="width:100px" colspan="3" border="1">11.12.17 </td>
<td  style="width:250px" colspan="3" border="1"> High Pressure</td>
<td  style="width:100px" colspan="3" border="1">18</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Mr.z</td>
<td style="width:100px" colspan="3" border="1">11.12.17 </td>
<td  style="width:250px" colspan="3" border="1">Allergy</td>
<td  style="width:100px" colspan="3" border="1">15</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Mr.Bob </td>
<td style="width:100px" colspan="3" border="1">11.12.17 </td>
<td  style="width:250px" colspan="3" border="1"> </td>
<td  style="width:100px" colspan="3" border="1">05</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Hannah Defeos </td>
<td style="width:100px" colspan="3" border="1">11.12.17 </td>
<td  style="width:250px" colspan="3" border="1"> Constipation</td>
<td  style="width:100px" colspan="3" border="1">12</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Mr.M </td>
<td style="width:100px" colspan="3" border="1">15.12.17 </td>
<td  style="width:250px" colspan="3" border="1"> Migrane</td>
<td  style="width:100px" colspan="3" border="1">02</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Mr.Hopkins </td>
<td style="width:100px" colspan="3" border="1">14.12.17 </td>
<td  style="width:250px" colspan="3" border="1"> </td>
<td  style="width:100px" colspan="3" border="1">06</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Mr.Lively</td>
<td style="width:100px" colspan="3" border="1">09.12.17 </td>
<td  style="width:250px" colspan="3" border="1"> Allergy </td>
<td  style="width:100px" colspan="3" border="1">12</td>
</tr>
<tr>
<td style="width:100px" colspan="1" border="1"> Mr.Reynolds </td>
<td style="width:100px" colspan="3" border="1">10.12.17 </td>
<td  style="width:250px" colspan="3" border="1"> </td>
<td  style="width:100px" colspan="3" border="1">10</td>
</tr>
</table>

</fieldset>
</td>

</table>
</tr>
</table>

