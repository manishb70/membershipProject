<?php

include("../db.php");




if ($_SERVER['REQUEST_METHOD'] == 'POST') {





    if (isset($_POST['setUpdateToSubmit'])) {


        $rowIds  = $_POST['rowIds'];



        foreach ($rowIds as $id) {


            $sql  =  "UPDATE `membership_project`.`financial_year_fees` SET `status` = 'SUBMIT' WHERE (`id` = '$id');";



            $stmt = $conn->prepare($sql);

            if ($stmt->execute()) {


                $response["success"] = true;


                $response["message"] = "data updated success fully";



                
            } else {

                $response["success"] = false;

                $response["message"] = "Something went wrong please try again";

                $response["error"] = $stmt->error;

                
            }


        }
        echo json_encode($response);
    }
}
