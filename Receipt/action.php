<?php

$receipt_no = $_POST['receipt_no'];
$payment_method = $_POST['payment_method'];
$membership_type = $_POST['membership_type'];
$year_of_membership = $_POST['year_of_membership'];
$one_time_enrollment_fee = $_POST['one_time_enrollment_fee'];
$yearly_charges = $_POST['yearly_charges'];
$share_allocated = $_POST['share_allocated'];
$total_amount = $_POST['total_amount'];
$next_amount_due = $_POST['next_amount_due'];
$date_amount_paid = $_POST['date_amount_paid'];
$utr_no = $_POST['utr_no'];
$transaction_date = $_POST['transaction_date'];
$balance = $_POST['balance'];
// $balance =  19;
// $status = $_POST['status'];
$membership_number = $_POST['membership_number'];
$formStatus = $_POST['formStatus'];


// echo "\n";

// echo $formStatus;

// echo "Statics";









// echo "balance is" . $balance;

if ($balance == 0) {

    $status = 'Paid';

} else if ($balance > 0 && $balance < 10000) {


    $status = 'Partial';

} else {

    $status = "";


}






// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "membership_project";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);



include('../db.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}




// echo "Connected successfully <br>";





$sql = "INSERT INTO receipt_details(receipt_no, payment_method, membership_type, year_of_membership, one_time_enrollment_fee, yearly_charges, share_allocated, total_amount, next_amount_due, date_amount_paid, utr_no, transaction_date, balance, status ,member_id,recieipt_form_status) 

values('$receipt_no', '$payment_method', '$membership_type', '$year_of_membership', '$one_time_enrollment_fee', '$yearly_charges', '$share_allocated', '$total_amount', '$next_amount_due', '$date_amount_paid', '$utr_no', '$transaction_date', '$balance', '$status', '$membership_number','$formStatus')";


if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";

    $response['success'] = true;
    $response['message'] = "New record created successfully";
    $response["receipt_no"] = $conn->insert_id;
    $response['formstatus'] = $formStatus;
    $response['formData'] = $_POST;
    
    


    




} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $response['success'] = false;
    $response['message'] = "Error: " . $sql . "<br>" . $conn->error;

}

echo json_encode($response);


?>