<?php include "../service/patient_service.php"; ?> 
<?php
	//for login

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
			$username=$_POST['username'];
			$password=$_POST['password']; $p = array();
			$p = getPatientUserName($username);
			if($p['p_password']===$password and $password!=null)
			{
				
				session_start();
				//$_SESSION['loggedIn']=true;
				$_SESSION['user_name']=$p['user_name'];
				$_SESSION['patient_name']=$p['patient_name'];
				$_SESSION['e_mail']=$p['e_mail'];
				$_SESSION['gender']=$p['gender'];
				$_SESSION['DOB']=$p['DOB'];
				$_SESSION['last_login']=$p['last_login'];
				
				header("Location: authenticated/patient/index.php?id={$username}");
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