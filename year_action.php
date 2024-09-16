<?php

$servername = "localhost";
$username = "root";
$password1 = "root";
$dbname = "membership_project";

$conn = new mysqli($servername, $username, $password1, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


$membership_type = $_POST['membership_type'];
$year_of_membership = $_POST['year_of_membership'];
$one_time_enrollment = $_POST['one_time_enrollment'];
$yearly_charges = $_POST['yearly_charges'];
$share_allocated = $_POST['share_allocated'];
$total_amount = $_POST['total_amount'];



$sql = "INSERT INTO financial_year_fees (membership_type, year_of_membership, one_time_enrollment, yearly_charges, share_allocated, total_amount) 
    VALUES ('$membership_type', '$year_of_membership', '$one_time_enrollment', '$yearly_charges', '$share_allocated', '$total_amount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>