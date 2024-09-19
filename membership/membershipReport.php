<?php

    
    session_start();

// include("db_connection.php");
include('../db.php');

$con = $conn;
if (!isset($_SESSION["username"])) {
    header("location: login.php");
}
// $user_info = $_GET["user_info"];




// $sql = "SELECT * from user_management     where user_id='$user_info' or user_name='$user_info' ";
$sql = "SELECT * FROM membership_project.member_table order by membership_no DESC;";




$result = mysqli_query($con, query: $sql);
// $row = mysqli_fetch_array($result);


// echo mysqli_num_rows($result);

// while ($row2 = mysqli_fetch_assoc($result)) {

//     echo $row2["user_name" ]."<br>";
// }

// // echo var_dump($result);

$isEditable = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (isset($_POST["add_new_user_admin"])) {




            $user_id = $_POST["user_id"];
            $username = $_POST["username"];
            $email = $_POST["email_id"];
            $password = $_POST["password"];
            $updataed_by = $_POST["updataed_by"];
            $phone = $_POST["mobile_number"];
            $person_id  = $_POST["person_id"];
            $start_date = $_POST["start_date"];
            $end_date = $_POST["end_date"];

            $createdBy = $_POST["createdBy"];
            $updataed_by = $_POST["updataed_by"];
            $updated_date = date("Y-m-d");
            $created_date = date("Y-m-d");
            $role  =  $_POST["role"];


            echo "the selected user is :" . $user_id;


            $create_sql = "INSERT INTO `for_office`.`user_management` (`user_id`, `user_name`, `updataed_by`, `createdBy`, `created_date`, `updated_date`, `mobile_number`, `email_id`, `person_id`, `password`, `start_date`, `end_date`, `role`) VALUES ('$user_id', '$username', ' $updataed_by', '$createdBy', '$created_date', '$updated_date', '$phone', '$email', '$person_id', '$password', '$start_date', '$end_date', '$role');
";

            $result_2 = mysqli_query($con, $create_sql);


            if ($result_2) {

                echo "new user created successfyly";

                $findNewAdminId = "SELECT * FROM  user_management where user_name='$username' ";

                $result_3 = mysqli_query($con, $findNewAdminId);
                $row1 = mysqli_fetch_assoc($result_3);
                $newUserId = $row1["user_id"];

                $sqlForAdminRoles = "insert into admin_roles (admin_id) values($newUserId)";

                if (mysqli_query($con, $sqlForAdminRoles)) {


                    echo "user success fully registered";
                } else {
                    echo "user is not registered please check admon role database";
                }
            } else {

                echo "<br>err user not registered<br>";
            }
        }


        if (isset($_POST["search_button"])) {

            echo "<br>" . date('Y-m-d');
            $search_query = $_POST["search_query"];
            $date = $_POST["search_date"];

            $sql2 = "SELECT * FROM user_info WHERE fullname='$search_query' OR id='$search_query' OR user_email='$search_query' OR membership='$search_query'OR pincode='$search_query'OR user_type='$search_query'OR user_email='$search_query'OR area='$search_query' OR name_of_company ='$search_query'OR adhaar_number='$search_query' OR bank_branch_name='$search_query' OR membership_renewed='$search_query' OR gender='$search_query' OR bank_name='$search_query'  OR user_phoneNumber='$search_query'  OR age='$search_query'   OR gender='$search_query' OR date_birth='$date' ";

            $result = mysqli_query($con, $sql2);


            // if (mysqli_num_rows($result) > 0) {
            //     echo "<br>data Updated success fully<br>";
            // } else {
            //     echo "errrrorr is comun from srever";
            // }
        } else if (isset($_POST["update_data"])) {

            echo "clicked on update button";

            // echo $_POST["user_id"];


            $user_id = $_POST["user_id"];
            $username = $_POST["username"];
            // $email = $_POST["email_id"];
            // $password = $_POST["password"];
            // $updataed_by = $_POST["updataed_by"];
            // $phone = $_POST["mobile_number"];
            // $person_id  = $_POST["person_id"];
            // $start_date = $_POST["start_date"];
            // $end_date = $_POST["end_date"];

            $createdBy = $_POST["createdBy"];
            $updataed_by = $_POST["updataed_by"];
            $updated_date = date("Y-m-d");
            $created_date = $_POST["created_date"];
            $role  =  $_POST["role"];

            $sql2 = "UPDATE `for_office`.`user_management` SET `user_name` = '$username', `email_id` = '$email', `password` = '$password', `updataed_by` = '$updataed_by', `mobile_number` = '$phone', `person_id` = '$person_id', `start_date` = '$start_date', `end_date` = '$end_date', `createdBy` = '$createdBy', `updated_date` = '$updated_date', `role` = '$role' WHERE (`user_id` = '$user_id')";


            $result2 = mysqli_query($con, $sql2);

            // echo $result2;

            // if (mysqli_query($conn, $sql)) {
            //     echo "New record created successfully";
            //   } else {
            //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            //   }

            if ($result2) {
                echo "data updated success fully";
            } else {

                echo "something Erro while updating data";
            }

            // echo "hello from update form ";

        } else if (isset($_POST["search"])) {


            // echo date("Y-m-d");
            $search_query = $_POST["search_query"];



            $sql = "SELECT * FROM membership_project.member_table WHERE membership_no='$search_query' OR company_name='$search_query' ";

            $result = mysqli_query($con, $sql);


            if (mysqli_num_rows($result) > 0) {
                echo "";
            } else {
                echo "User not found 0";
            }
        } else if (isset($_POST["update_admin_roles"])) {



            // echo $_POST["admin_id"];



            echo "<br>hey this admin roles form <br>";
            $admin_id = $_POST["admin_id"];
            $userviewOnly = isset($_POST["user_viewOnly"]) ? 1 : 0;
            $user_write = isset($_POST["user_write"]) ? 1 : 0;
            $admin_viewOnly = isset($_POST["admin_viewOnly"]) ? 1 : 0;
            $admin_write = isset($_POST["admin_write"]) ? 1 : 0;
            $user_write_start_date = $_POST["user_write_start_date"];
            $user_write_end_date = $_POST["user_write_end_date"];
            $user_view_start_date = $_POST["user_view_start_date"];
            $user_view_end_date = $_POST["user_view_end_date"];
            $admin_write_start_date = $_POST["admin_write_start_date"];
            $admin_write_end_date = $_POST["admin_write_end_date"];
            $admin_view_start_date = $_POST["admin_view_start_date"];
            $admin_view_end_date = $_POST["admin_view_end_date"];
            $store_manager = isset($_POST["store_manager"]) ? 1 : 0;
            $store_issue = isset($_POST["store_isseuer"]) ? 1 : 0;
            $store_genrate = isset($_POST["genrateStoreRequest"]) ? 1 : 0;
            $PO_appover = isset($_POST["PO_approver"]) ? 1 : 0;
            // $sql_for_role = "INSERT INTO admin_roles (
            //     admin_id, 
            //     user_viewOnly, 
            //     user_write, 
            //     admin_viewOnly, 
            //     admin_write, 
            //     user_write_start_date, 
            //     user_write_end_date, 
            //     user_view_start_date, 
            //     user_view_end_date, 
            //     admin_write_start_date, 
            //     admin_write_end_date, 
            //     admin_view_start_date, 
            //     admin_view_end_date
            // ) VALUES (
            //     $admin_id, 
            //     $userviewOnly, 
            //     $user_write,
            //     $admin_viewOnly,
            //     $admin_write, 
            //     '$user_write_start_date',
            //     '$user_write_end_date', 
            //     '$user_view_start_date', 
            //     '$user_view_end_date', 
            //     '$admin_write_start_date', 
            //     '$admin_write_end_date', 
            //     '$admin_view_start_date', 
            //     '$admin_view_end_date'
            // )";



            $sql_for_role = "UPDATE admin_roles SET user_viewOnly = $userviewOnly, user_write = $user_write, admin_viewOnly = $admin_viewOnly, admin_write = $admin_write, user_write_start_date = '$user_write_start_date', user_write_end_date = '$user_write_end_date', user_view_start_date = '$user_view_start_date', user_view_end_date = '$user_view_end_date', admin_write_start_date = '$admin_write_start_date', admin_write_end_date = '$admin_write_end_date', admin_view_start_date = '$admin_view_start_date', store_manager='$store_manager', store_genrate='$store_genrate', store_isseuer='$store_issue',admin_view_end_date = '$admin_view_end_date'   ,PO_appover = $PO_appover  WHERE admin_id = $admin_id";



            if (mysqli_query($con, $sql_for_role)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_for_role . "<br>" . mysqli_error($conn);
            }
        }
    }
}







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">

    <title>Admin update</title>
</head>

<body class="">

    <?php require("./navbar.php") ?> 
    <div>


        <form class="flex items-center  max-w-lg mx-auto mt-4" method="POST">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full mr-2">

                <input type="text" id="voice-search" name="search_query" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Details From Database..." required />

            </div>
            <button type="submit" name="search" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>Search
            </button>
        </form>

    </div>


    <div class="relative mx-auto mt-4 overflow-x-auto shadow-md sm:rounded-lg ">
        <table class=" text-sm mx-auto text-left rtl:text-right text-gray-500 dark:text-gray-400"">

            <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                membership_no
                </th>
                <th scope="col" class="px-6 py-3">
                company_address
                </th>
                <th scope="col" class="px-6 py-3">
                company_email_id
                </th>
                <th scope="col" class="px-6 py-3">
                category
                </th>
                <th scope="col" class="px-6 py-3">
                person_name
                </th>

                <th scope="col" class="px-6 py-3">
                person_email_id
                </th>
                <th scope="col" class="px-6 py-3">
                person_phone_no
                </th>

                <th scope="col" class="px-6 py-3">
                udayam_aadhar_card
                </th>
                <th scope="col" class="px-6 py-3">
                old_membership_number
                </th>
                <th scope="col" class="px-6 py-3">
                pan_no
                </th>
                <th scope="col" class="px-6 py-3">
                gst_no
                </th>
                <th scope="col" class="px-6 py-3">
                active_status
                </th>
                <th scope="col" class="px-6 py-3">
                start_date
                </th>
                <th scope="col" class="px-6 py-3">
                end_date
                </th>
             
                <!-- <th scope="col" class="px-6 py-3">
                    updated b
                </th> -->

                <!-- <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th> -->
            </tr>
            </thead>
            <tbody>



                <?php


                while ($row = mysqli_fetch_assoc($result)) {

                    echo '
    <form action="#" method="POST">
                        <input type="hidden" id="userNumber"  name="userNumber" value=' . $row["membership_no"] . '>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ' . ($isEditable ? "<input class='formInputData'  name='id' disabled style='max-width:80px' id=" . $row["membership_no"] . "  margin-left:0' value=" . $row["membership_no"] . ">" : $row["membership_no"]) . '
                    </th>
                    <td class=px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='username' disabled style='max-width:80px'  margin-left:0' value=" . $row["company_address"] . ">" : $row["company_address"]) . '
                    </td>
                    <td class="px-6 py-4">
                    
                         ' . ($isEditable ? "<input class='formInputData' name='password' disabled style='max-width:80px'  margin-left:0' value=" . $row["company_email_id"] . ">" : $row["company_email_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                    ' . ($isEditable ? "<input class='formInputData' name='mobile_number' disabled style='max-width:80px'  margin-left:0' value=" . $row["category"] . ">" : $row["category"]) . '
                    </td>
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input class='formInputData' name='email_id' disabled style='max-width:80px'  margin-left:0' value=" . $row["person_name"] . ">" : $row["person_name"]) . '
                    </td>
                
                    <td class="px-6 py-4">
                        ' . ($isEditable ? "<input  type='date' class='formInputData' name='start_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["person_email_id"] . ">" : $row["person_email_id"]) . '
                    </td>
                    <td class="px-6 py-4">
                       
                         ' . ($isEditable ? "<input class='formInputData' name='end_date' disabled style='max-width:80px'  margin-left:0' value=" . $row["udayam_aadhar_card"] . ">" : $row["udayam_aadhar_card"]) . '
                    </td>
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='role' disabled style='max-width:80px'  margin-left:0' value=" . $row["old_membership_number"] . ">" : $row["old_membership_number"]) . '
                    </td>
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updataed_by' disabled style='max-width:80px'  margin-left:0' value=" . $row["pan_no"] . ">" : $row["pan_no"]) . '
                    </td>  
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updataed_by' disabled style='max-width:80px'  margin-left:0' value=" . $row["gst_no"] . ">" : $row["gst_no"]) . '
                    </td>  
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updataed_by' disabled style='max-width:80px'  margin-left:0' value=" . $row["active_status"] . ">" : $row["active_status"]) . '
                    </td>  
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updataed_by' disabled style='max-width:80px'  margin-left:0' value=" . $row["start_date"] . ">" : $row["start_date"]) . '
                    </td>  
                     <td class="px-6 py-4">
                        
                         ' . ($isEditable ? "<input class='formInputData' name='updataed_by' disabled style='max-width:80px'  margin-left:0' value=" . $row["end_date"] . ">" : $row["end_date"]) . '
                    </td>  

                    
                    
                    
                    </tr>
                    </form>
                    
                    ';
                }  ?>

</tbody>
</table>
</div>





<!-- // <td class="px-6 py-4 text-right">
//      <a onclick ="enableItem(event,rowId' . $row["id"] . ')" class="font-medium cursor-pointer text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
// <button id=rowId' . $row["id"] . ' name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
//   Update</button>
// </td> -->























































    <!-- this is another div or box\ -->



















</body>





<script>
    let userIsSelected = 10;




    const beforeSubmitHandle = () => {

        document.getElementById("roleUserId").disabled = false;



    }



    function enableItem(e, id) {

        //   console.log(e.target.parentElement);  
        //   console.log(((e.target.parentElement).parentElement).getElementsByTagName("input"))

        let dt = ((e.target.parentElement).parentElement).getElementsByTagName("input")
        for (let element of dt) {
            element.disabled = false;
            element.style.color = "red"


        }



        id.classList.remove("hidden")
        // console.log(id);
        e.target.style.display = "none";

        // document.getElementById(id).classList.remove("hidden")      

        // e.target.preventDefault()
        // e.target.name="update_button"
        // e.target.type="submit"

    }


    let id_1 = 1;




    const showRolesBox = (e) => {

        document.getElementById("roleUserId").value = ""

        //    console.log((e.target.parentElement).getElementByName("user_id"))


        // let selected_id = (e.target.parentElement).parentElement.getElementsByClassName("user_id");


        userIsSelected = (e.target.parentElement).parentElement.getElementsByName("userNumber").value
        console.log(userIsSelected);
        // document.getElementById("roleUserId").value = userIsSelected
        document.getElementById("roleUserId").value = 10
    }


    const openNewAdminBox = () => {

        newUserAdmin.style.display = "block"



    }
</script>


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/jquery.min.js"></script>

</html>