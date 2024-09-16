<?php

include("./db.php");

// $membership_no = $_POST['membership_no'];
$creation_date = $_POST['creation_date'];
$starting_fy = $_POST['starting_fy'];
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$company_email_id = $_POST['company_email_id'];
$category = $_POST['category'];

$person_name = $_POST['person_name'];
$person_email_id = $_POST['person_email_id'];
$person_phone_no = $_POST['person_phone_no'];
$udayam_aadhar_card = $_POST['udayam_aadhar_card'];
$old_membership_number = $_POST['old_membership_number'];
$start_date = $_POST['start_date'];
$end_date = $_POST['End_date'];

$pan_no = $_POST['pan_no'];
$gst_no = $_POST['gst_no'];





$sql = "INSERT INTO member_table ( creation_date, starting_fy, company_name, company_address, company_email_id, category, person_name, person_email_id, person_phone_no, udayam_aadhar_card, old_membership_number, pan_no, gst_no,end_date,start_date)

VALUES ( ?, ?, ?,?, ?, ?, ?, ?,? ,?,?,?,?,?,?)";





$stmt = $conn->prepare($sql);




$stmt->bind_param("sssssssssssssss", $creation_date, $starting_fy, $company_name, $company_address, $company_email_id, $category, $person_name, $person_email_id, $person_phone_no, $udayam_aadhar_card, $old_membership_number, $pan_no, $gst_no,$end_date,$start_date);



// $result = $conn->query($sql);
 $result = $stmt->execute(); 



if ($result) {


  $response['success']=true;
  $response['message']='data successfylly inserted';
  $response['return_id'] =$stmt->insert_id;



} else {
    

      $response["success"]=false;
      $response["message"]= $conn->error;
} 

echo  json_encode($response);



?>