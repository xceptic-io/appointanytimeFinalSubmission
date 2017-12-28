

create database appointanytime;

use appointanytime;


CREATE TABLE `booking` (
  `p_id` varchar(20) NOT NULL,
  `patient_name` varchar(80) NOT NULL,
  `d_id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20),
  `booking_confirmation` varchar(20) ,
  `problems` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


drop table booking

CREATE TABLE `doctor` (
  `user_name` varchar(20) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `d_password` varchar(20) NOT NULL,
  `e-mail` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `contact no.` varchar(30) NOT NULL,
  `available_time` varchar(30) NOT NULL,
  `max_patient` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `last_login` varchar(50) NOT NULL,
  `last_pass_upgrade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `pres_medicine` (
  `prescription_id` varchar(10) NOT NULL,
  `medicine` varchar(30) NOT NULL,
  `medicine_power` varchar(30) NOT NULL,
  `schedule` varchar(30) NOT NULL,
  `meal` varchar(10) NOT NULL,
  `course_duration` varchar(7) NOT NULL
)

INSERT INTO pres_medicine
VALUES('1', 'Esonix', '250', '0+0+1', 'Before', '10')

prescription_id, medicine, medicine_power, meal, course_duration

ALTER TABLE prescription
DROP COLUMN schedule

ALTER TABLE booking
DROP COLUMN gender

ALTER TABLE booking
add COLUMN problems varchar(100)

CREATE TABLE `patient` (
  `user_name` varchar(20) NOT NULL,
  `patient_name` varchar(40) NOT NULL,
  `p_password` varchar(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `e-mail` varchar(40) NOT NULL,
  `last_login` varchar(50) NOT NULL,
  `last_pass_upgrade` varchar(50) NOT NULL,
  `booking_confirmation` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

drop table booking;
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`diagnosis_name`);
  
ALTER TABLE `pres_medicine`
  ADD PRIMARY KEY (prescription_id, medicine, medicine_power, schedule, meal, course_duration);
  
ALTER TABLE patient DROP COLUMN booking_confirmation;
  
select * from doctor
select * from patient

CREATE TABLE `booking` (
  `p_id` varchar(10) NOT NULL,
  
  `patient_name` varchar(30) NOT NULL,
  `d_id` varchar(30) NOT NULL,
  `booking_date` varchar(30) NOT NULL,
  `booking_confirmation` varchar(30),
  `time` varchar(30),
  `problems` varchar(30)
  
)

CREATE TABLE `diagnosis` (
  `diagnosis_name` varchar(10) NOT NULL,
  `lab_name` varchar(30) NOT NULL,
  `loc` varchar(30) NOT NULL,
  `fee` varchar(30) NOT NULL
  
)



ALTER TABLE booking DROP PRIMARY KEY;
CREATE TABLE `prescription` (
  `prescription_id` int(20) NOT NULL,
  `patient_user_name` varchar(20) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `doc_user_name` varchar(20) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `prescribe_date` date NOT NULL,
  `problem` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `schedule` varchar(60) NOT NULL,
  `reffered_to` varchar(30) NOT NULL,
  `referred_by` varchar(30) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `diagnostics` varchar(40) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  `medicine_power` varchar(30) NOT NULL,
  `course_duration` int(30) NOT NULL
)

ALTER TABLE `booking`
  ADD PRIMARY KEY (`tarikh`);
  
ALTER TABLE `booking`
  MODIFY `tarikh` int(20) NOT NULL;
  
  ALTER TABLE booking CHANGE `date` `tarikh` varchar(20);
  
ALTER TABLE prescription
MODIFY COLUMN prescribe_date varchar(30);

ALTER TABLE doctor
MODIFY COLUMN institution varchar(150);
  
ALTER TABLE patient
ADD phone varchar(20);

INSERT INTO patient
VALUES ('uvaskar', 'Nirvar Roy Vaskar', '123456', 'Male', '16/7/1994', 'nirvarroy@hotmail.com', '24/12/17', '12/12/17','Yes');

INSERT INTO patient(phone)
VALUES ('01720019736');

prescriptionprescriptionUPDATE patient SET phone='01720019736' WHERE user_name='uvaskar'