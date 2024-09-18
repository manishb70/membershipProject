<?php

// $servername = "localhost";
// $username = "root";
// $password1 = "root";
// $dbname = "membership_project";

// $conn = new mysqli($servername, $username, $password1, $dbname);



include("./db.php");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully <br>";


$membership_type = $_POST['membership_type'];
$year_of_membership = $_POST['year_of_membership'];
$one_time_enrollment = $_POST['one_time_enrollment'];
$yearly_charges = $_POST['yearly_charges'];
$share_allocated = $_POST['share_allocated'];
$total_amount = $_POST['total_amount'];

$response['data'] = $_POST;



$sql = "INSERT INTO financial_year_fees (membership_type, year_of_membership, one_time_enrollment, yearly_charges, share_allocated, total_amount) 
    VALUES ('$membership_type', '$year_of_membership', '$one_time_enrollment', '$yearly_charges', '$share_allocated', '$total_amount')";

if ($conn->query($sql) === TRUE) {
    $response['message']="New record created successfully";
    $response['success'] = TRUE;
    $response['insert_id'] = mysqli_insert_id($conn);
}else{
    // echo "Error: " . $sql . "<br>" . $conn->error;


    $response['message']="Error: " . $sql . "<br>" . $conn->error;
    $response['success'] = false;

}



echo  json_encode($response)?>