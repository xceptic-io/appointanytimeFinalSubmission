<?php include "../service/patient_service.php"; ?> 

<?php
      // echo  var_dump($_POST);
    if($_SERVER['REQUEST_METHOD']== "POST"){ 
        if($_POST['name']!="" and $_POST['password']!="" and $_POST['userName']!="" and $_POST['dob']!="" and $_POST['email']!="" and $_POST['gender']!="" )
        {
            $name=$_POST['name'];
            $password=$_POST['password'];
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $last_login = date('Y-m-d');
            $dob = $_POST['dob']; $phone = $_POST['phone']; $userName = $_POST['userName'];
          
            $specialist =$_POST['specialist']; $degree  =$_POST['degree'];$institution  =$_POST['institution'];$hospital  =$_POST['hospital'];$available_time  =$_POST['available_time'];$max_patient  =$_POST['max_patient']; $address  =$_POST['address'];


            if(str_word_count($name)< 2 or !preg_match('/^[a-zA-Z ]+$/', $name))
            {
                echo'<script>
                        alert("Name can contain at least two word and \ncan have upper case and or lower case letter!!");
                    </script>';
            }
            else if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$email)){
                echo'<script>
                        alert("Invalid Email Address!!");
                    </script>';
            }
            else if(strlen($password)<6 or !preg_match('/^[a-zA-Z0-9]+$/',$password))
            {
                echo'<script>
                        alert("Passwor must be greater than 6 character\n and can conatin letters and number!!");
                    </script>';
            }
            else{
                     $add = array(); $add = addDoctor($userName, $name, $password,$email, $gender, $specialist, $degree, $dob, $institution, $hospital, $phone, $available_time, $max_patient, $address, " ", " ");

                    if(count($add)){ 
                        
                       // header('Window-target: _parent');
                        header("Location: authenticated/doctor/index.html?id={$userName}" );
                        //header( ) ;

                        echo'<script>
                                        alert("Registration successful!!");
                            </script>';
                        
                    }else
                    {
                        echo'<script>
                                        alert("Not successful!!");
                            </script>';
                    }
                }
        }
        else
        {
            echo'<script>
                    alert("No filed can not be empty!!");
                </script>';
        }
    }
?>