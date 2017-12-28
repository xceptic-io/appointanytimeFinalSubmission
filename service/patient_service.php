<?php include("data_access.php"); ?>
<?php
    function addPatient($user_name, $patient_name, $p_password, $gender, $DOB, $e_mail, $last_login, $last_pass_upgrade, $booking_confirmation, $phone){
        $sql = "INSERT INTO patient(user_name, patient_name, p_password, gender, DOB, e_mail, last_login, last_pass_upgrade, booking_confirmation, phone) VALUES('$user_name', '$patient_name', '$p_password', '$gender', '$DOB', '$e_mail', '$last_login', '$last_pass_upgrade', '$booking_confirmation', '$phone')";
        $result = executeSQL($sql);
        return $result;
    }

    

    function addDoctor($user_name, $doctor_name, $d_password, $e_mail, $gender, $genre, $degree, $DOB, $institution, $hospital, $phone, $available_time, $max_patient, $address, $last_login, $last_pass_upgrade){  
        $sql = "INSERT INTO doctor(user_name, doctor_name, d_password, e_mail, gender, genre, degree, DOB, institution, hospital, phone, available_time, max_patient, address, last_login,last_pass_upgrade) VALUES('$user_name', '$doctor_name', '$d_password', '$e_mail', '$gender', '$genre', '$degree', '$DOB', '$institution', '$hospital', '$phone', '$available_time', '$max_patient', '$address', '$last_login', 'last_pass_upgrade')";
        $result = executeSQL($sql);
        return $result;
    }


    
    function editPatient($id, $name, $email, $gender, $dob){   
        $sql = "UPDATE patient SET patient_name = '$name', e_mail='$email', gender = '$gender',
        DOB = '$dob' WHERE user_name ='$id' ";
        $result = executeSQL($sql);
        return $result;
    }
    
    function removePerson($personId){
        $sql = "DELETE FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        return $result;
    }
    
    function getAllPersons(){
        $sql = "SELECT * FROM person";        
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }
    
    function getPersonById($personId){
        $sql = "SELECT * FROM person WHERE id=$personId";        
        $result = executeSQL($sql);
        
        $person = mysqli_fetch_assoc($result);
        
        return $person;
    }
    
    function getPersonsByName($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $person = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $person[$i] = $row;
        }
        
        return $person;
    }

       function getPatientUserName($patientusername){
        $sql = "SELECT * FROM patient WHERE user_name = '$patientusername' ";        
        $result = executeSQL($sql);
        
        $patient = mysqli_fetch_assoc($result);
        
        return $patient;
    }

    function date_interval($date1, $date2){     
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        return $years. " Years " . $months . " Months " . $days . " Days";
    }

     function getPatientByUserName($patientusername){
        $sql = "SELECT * FROM prescription WHERE patient_user_name = '$patientusername' ";        
        $result = executeSQL($sql);
        
        $patient_pres = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $patient_pres[$i] = $row;
        
        return $patient_pres;
    }

    function getPatientUserNameByPrescriptionId($prescriptionid){
        $sql = "SELECT * FROM prescription WHERE prescription_id = '$prescriptionid' ";        
        $result = executeSQL($sql);
        
        $patient = mysqli_fetch_assoc($result);
        
        return $patient;
    }


     function getDoctorUserNameByPrescriptionId($prescriptionid){
        $sql = "SELECT doc_user_name FROM prescription WHERE prescription_id = '$prescriptionid' ";        
        $result = executeSQL($sql);
        
        $doctor = mysqli_fetch_assoc($result);
        
        return $doctor;
    }

     function getDoctorUserName($doctorusername){
        $sql = "SELECT * FROM doctor WHERE user_name = '$doctorusername' ";        
        $result = executeSQL($sql);
        
        $doctor = mysqli_fetch_assoc($result);
        
        return  $doctor;
    }

    function getMedicines($prescriptionid){
        $sql = "SELECT * FROM pres_medicine WHERE prescription_id = '$prescriptionid' ";        
        $result = executeSQL($sql);
        
    
        $medicine = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $medicine[$i] = $row;
        
        return $medicine;
            
    }

    function search_doc($items){
        $queried = $items; 
        $keys = explode(" ",$queried);
        $sql = "SELECT * FROM doctor WHERE doctor_name LIKE '%$queried%' OR genre LIKE '%$queried%' OR hospital LIKE '%$queried%'";

        foreach($keys as $k){
            $sql .= " OR doctor_name LIKE '%$k%' OR genre LIKE '%$k%' OR hospital LIKE '%$k%'";
        }

        
        $result = executeSQL($sql);
        $docs = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $docs[$i] = $row;
        
        return $docs;
            
    }


       function book($pid, $pname, $did, $tarikh,  $prob){
        $sql = "INSERT INTO booking(p_id, patient_name, d_id, booking_date, problems) VALUES('$pid','$pname', '$did', '$tarikh', '$prob')";
        $result = executeSQL($sql);
       
       }

       function getNumOfBookingsForDoc($did, $date1){
        $sql = "SELECT d_id, booking_date FROM booking WHERE d_id = '$did' and booking_date like '$date1' ";
        $result = executeSQL($sql);

        $bookings = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $bookings[$i] = $row;
        
        return $bookings;
    
    }

    function getBookingsForDoc2($did){
        $sql = "SELECT * FROM booking WHERE d_id = '$did' ";
        $result = executeSQL($sql);

        $bookings = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $bookings[$i] = $row;
        
        return $bookings;
    
    }

    function getNumOfPatients($did){
        $sql = "SELECT distinct patient_user_name FROM prescription WHERE doc_user_name = '$did' ";
        $result = executeSQL($sql);

        $total = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $total[$i] = $row;
        
        return $total;
    
    }


    function search_booking($items){
        $queried = $items; 
        $keys = explode(" ",$queried);
        $sql = "SELECT * FROM booking WHERE patient_name LIKE '%$queried%' OR booking_date LIKE '%$queried%' OR p_id LIKE '%$queried%'";

        foreach($keys as $k){
            $sql .= " OR patient_name LIKE '%$k%' OR booking_date LIKE '%$k%' OR p_id LIKE '%$k%'";
        }

        
        $result = executeSQL($sql);
        $bk = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $bk[$i] = $row;
        
        return $bk;
            
    }

     function getAllPres()
     {
        $sql = "SELECT * FROM prescription";
        $result = executeSQL($sql);

        $ppres = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $ppres[$i] = $row;
        
        return $ppres; 
     }

     function searchpp($items){
        $queried = $items; 
        $keys = explode(" ",$queried);
        $sql = "SELECT * FROM prescription WHERE prescription_id LIKE '%$queried%' OR patient_name LIKE '%$queried%' OR doctor_name LIKE '%$queried%'  OR prescribe_date LIKE '%$queried%'";

        foreach($keys as $k){
            $sql .= " OR prescription_id LIKE '%$k%' OR patient_name LIKE '%$k%' OR doctor_name LIKE '%$k%'
            OR prescribe_date LIKE '%$k%'";
        }

        
        $result = executeSQL($sql);
        $pk = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $pk[$i] = $row;
        
        return $pk;
            
    }

    function getAllDiag()
    {
        $sql = "SELECT * FROM diagnosis";
        $result = executeSQL($sql);

        $ppres = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $ppres[$i] = $row;
        
        return $ppres; 
    }

    function insertDiag($diagnosis_name, $lab_name, $loc, $fee)
     {
        $sql = "INSERT INTO diagnosis(diagnosis_name, lab_name, loc, fee) 
            VALUES('$diagnosis_name', '$lab_name', '$loc', '$fee')";
        $result = executeSQL($sql);
       
     }

     function searchDiag($items)
     {
        $queried = $items; 
        $keys = explode(" ",$queried);
        $sql = "SELECT * FROM diagnosis WHERE diagnosis_name LIKE '%$queried%' OR lab_name LIKE '%$queried%' OR loc LIKE '%$queried%'  OR fee LIKE '%$queried%'";

        foreach($keys as $k){
            $sql .= " OR diagnosis_name LIKE '%$k%' OR lab_name LIKE '%$k%' OR loc LIKE '%$k%'
            OR fee LIKE '%$k%'";
        }

        
        $result = executeSQL($sql);
        $dg = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $dg[$i] = $row;
        
        return $dg;
       
     }

?>