<?php



if ($_SERVER['REQUEST_METHOD'] == "GET") {

    if (isset($_GET['getUSerDataByUserName'])) {


        include('../db.php');


        $user_name = $_GET['username'];






        $sql = "SELECT * FROM membership_project.user_info a JOIN  user_role b  ON a.id = b.user_id  where a.user_name = '$user_name' ; ";





        $result = mysqli_query($conn, $sql);



        if ($result) {





            $data = [];



            while ($row = mysqli_fetch_assoc($result)) {







                $data[] = $row;
            };



            $response['success'] = true;
            $response['data'] = $data;
        } else {
            $response['success'] = false;
            $response['message'] = mysqli_error($conn);
        }






        echo json_encode($response);
    }




    if (isset($_GET['getUSersNameDetails'])) {




        include('../db.php');




        $sql = "SELECT user_name FROM membership_project.user_info;";




        $result = mysqli_query($conn, $sql);


        if ($result) {



            $data = [];



            while ($row = mysqli_fetch_assoc($result)) {



                $data[] = $row;
            }


            $response['success'] = true;

            $response['usernames_data'] = $data;
        } else {
            $response['success'] = false;
            $response['error'] = mysqli_error($conn);
            $response['message'] = "data not found having some error";
        }



        echo json_encode($response);
    }
}
