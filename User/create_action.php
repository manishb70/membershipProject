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


$user_name = $_POST['user_name'];
$password = $_POST['user_password']; 
$mobile_no = $_POST['mobile_no'];
$emai_id = $_POST['emai_id'];
$effective_from_date = $_POST['effective_from_date'];
$effective_to_date = $_POST['effective_to_date'];
$membership_id = $_POST['membership_id'];
$description = $_POST['description'];
$days = $_POST['days'];



$user_creation = isset($_POST['user_creation']) ? 1 : 0;
$user_creation_from_date = $_POST['user_creation_from_date'];
$user_creation_to_date = $_POST['user_creation_to_date'];


$user_search = isset($_POST['user_search']) ? 1 : 0;
$user_search_from_date = $_POST['user_search_from_date'];
$user_search_to_date = $_POST['user_search_to_date'];


$membership_create = isset($_POST['membership_create']) ? 1 : 0;
$membership_create_from_date = $_POST['membership_create_from_date'];
$membership_create_to_date = $_POST['membership_create_to_date'];


$membership_search = isset($_POST['membership_search']) ? 1 : 0;
$membership_search_from_date = $_POST['membership_search_from_date'];
$membership_search_to_date = $_POST['membership_search_to_date'];


$membership_report = isset($_POST['membership_report']) ? 1 : 0;
$membership_report_from_date = $_POST['membership_report_from_date'];
$membership_report_to_date = $_POST['membership_report_to_date'];


$receipt_creation = isset($_POST['receipt_creation']) ? 1 : 0;
$receipt_creation_from_date = $_POST['receipt_creation_from_date'];
$receipt_creation_to_date = $_POST['receipt_creation_to_date'];


$receipt_search = isset($_POST['receipt_search']) ? 1 : 0;
$receipt_search_from_date = $_POST['receipt_search_from_date'];
$receipt_search_to_date = $_POST['receipt_search_to_date'];


$receipt_report = isset($_POST['receipt_report']) ? 1 : 0;
$receipt_report_from_date = $_POST['receipt_report_from_date'];
$receipt_report_to_date = $_POST['receipt_report_to_date'];







$sql = "INSERT INTO user_info (user_name, password, mobile_no, emai_id, effective_from_date, effective_to_date, membership_id, description, days) 

VALUES ('$user_name', '$password', '$mobile_no', '$emai_id', '$effective_from_date', '$effective_to_date', '$membership_id', '$description', '$days')";




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";

            $user_id = $conn->insert_id;


    
$sql2 = "INSERT INTO user_role(user_id, user_creation, user_creation_from_date, user_creation_to_date, user_search, user_search_from_date, user_search_to_date, membership_create, membership_create_from_date, membership_create_to_date, membership_search, membership_search_from_date, membership_search_to_date, membership_report, membership_report_from_date, membership_report_to_date, receipt_creation, receipt_creation_from_date, receipt_creation_to_date, receipt_search, receipt_search_from_date, receipt_search_to_date, receipt_report, receipt_report_from_date, receipt_report_to_date)
VALUES ('$user_id','$user_creation', '$user_creation_from_date', '$user_creation_to_date','$user_search', '$user_search_from_date', '$user_search_to_date', '$membership_create', '$membership_create_from_date', '$membership_create_to_date', '$membership_search', '$membership_search_from_date', '$membership_search_to_date', '$membership_report', '$membership_report_from_date', '$membership_report_to_date', '$receipt_creation', '$receipt_creation_from_date', '$receipt_creation_to_date', '$receipt_search', '$receipt_search_from_date', '$receipt_search_to_date', '$receipt_report', '$receipt_report_from_date', '$receipt_report_to_date')";

    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql2 . "<br>" . $conn->error;
}

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>