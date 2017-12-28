<?php include "../service/patient_service.php"; ?> 
<?php
	//for login

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
			$username=$_POST['username'];
			$password=$_POST['password']; $p = array();
			$p = getDoctorUserName($username);
			if($p['d_password']===$password and $password!=null)
			{
				
				session_start();
				//$_SESSION['loggedIn']=true;
				$_SESSION['user_name']=$p['user_name'];
				$_SESSION['doctor_name']=$p['doctor_name'];
				$_SESSION['e_mail']=$p['e_mail'];
				$_SESSION['gender']=$p['gender'];
				$_SESSION['DOB']=$p['DOB'];
				
				header("Location: authenticated/doctor/index.php?id={$username}");
			}
			else
			{
				echo'<script>
							alert("Email or passwrod is invalid!!");
					</script>';
				header('Location: index.html');
			}
	}
?>