<?php include("data_access.php"); ?>
<?php
    function addPerson($person){
        $sql = "INSERT INTO person(id, name, email) VALUES(NULL, '$person[name]', '$person[email]')";
        $result = executeSQL($sql);
        return $result;
    }
    
    function editPerson($person){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE id=$person[id]";
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


       function book($pid, $pname, $did, $tarikh, $prob){
        $sql = "INSERT INTO booking(p_id, patient_name, d_id, date, problems) VALUES('$pid', '$pname', '$did', '$tarikh', '$prob')";
        $result = executeSQL($sql);
    
       }

       function getNumOfBookingsForDoc($did, $date1){
        $sql = $sql = "SELECT d_id, date FROM booking WHERE d_id = '$did' and date like '$date1' ";
        $result = executeSQL($sql);

        $bookings = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i)
           $bookings[$i] = $row;
        
        return $bookings;
    
    }



    
    





?>