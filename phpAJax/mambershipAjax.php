<?php

include('../db.php');


$con = $conn;






if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    if (isset($_GET['checkPan'])) {


        $panNumber =  $_GET['panNumber'];






        // $sql = "SELECT * FROM membership_project.member_table where pan_no = '$panNumber';";
        $sql = "SELECT * FROM membership_project.member_table where pan_no = '$panNumber';";


        $result = mysqli_query($con, $sql);



        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);

            $response['rows'] = mysqli_num_rows($result);


            
            $response['message'] = "pan  found";
            $response['mamber_name'] = $row['company_name'];
            $response['mamber_number'] = $row['membership_no'];


            $response['pan_is_available'] = true;


        } else {

            $response['message'] = "pan not found";


            $response['is_available'] = false;
        }























        $response["success"] = true;
        $response["data"] = $panNumber;


        echo json_encode($response);
    }
}













?>