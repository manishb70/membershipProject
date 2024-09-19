<?php include("./navbar.php")     ?>


<?php


include("../db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



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


    $fess_creation = isset($_POST['fess_creation']) ? 1 : 0;
    $fees_search = isset($_POST['fees_search']) ? 1 : 0;




    $sql = "INSERT INTO user_info (user_name, password, mobile_no, emai_id, effective_from_date, effective_to_date, membership_id, description, days) 

VALUES ('$user_name', '$password', '$mobile_no', '$emai_id', '$effective_from_date', '$effective_to_date', '$membership_id', '$description', '$days')";




    if ($conn->query($sql) === TRUE) {
        echo    "<script>alert('User created success fully')</script>";

        $user_id = $conn->insert_id;



        $sql2 = "INSERT INTO user_role(user_id, user_creation, user_creation_from_date, user_creation_to_date, user_search, user_search_from_date, user_search_to_date, membership_create, membership_create_from_date, membership_create_to_date, membership_search, membership_search_from_date, membership_search_to_date, membership_report, membership_report_from_date, membership_report_to_date, receipt_creation, receipt_creation_from_date, receipt_creation_to_date, receipt_search, receipt_search_from_date, receipt_search_to_date, receipt_report, receipt_report_from_date, receipt_report_to_date,fees_search,fess_creation)
VALUES ('$user_id','$user_creation', '$user_creation_from_date', '$user_creation_to_date','$user_search', '$user_search_from_date', '$user_search_to_date', '$membership_create', '$membership_create_from_date', '$membership_create_to_date', '$membership_search', '$membership_search_from_date', '$membership_search_to_date', '$membership_report', '$membership_report_from_date', '$membership_report_to_date', '$receipt_creation', '$receipt_creation_from_date', '$receipt_creation_to_date', '$receipt_search', '$receipt_search_from_date', '$receipt_search_to_date', '$receipt_report', '$receipt_report_from_date', '$receipt_report_to_date','$fees_search','$fess_creation')";

        if ($conn->query($sql2) === TRUE) {
            echo "<script>alert('User role assign successfully')</script>";
        } else {
            // echo "Error: " . $sql2 . "<br>" . $conn->error;
            echo "<script>alert('Error '<br>' . $conn->error')</script>";
        }
    } else {


        echo "<script>alert('Error '<br>' . $conn->error')</script>";
        echo "Error: " . $conn->error;
    }
}







?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

    <title>Create User Form</title>
</head>

<body>
    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold">Create User Form</h1>
        <form action="#" method="post">
            <div class="flex gap-x-20 border border-gray-500 p-5 rounded-md flex-wrap justify-center">
                <div class="">
                    <div class="flex gap-x-20 flex-wrap">
                        <div>
                            <label for="email"
                                class=" block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                Name :
                            </label>
                            <input type="text" name="user_name" id="username" required
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Passowrd
                                : </label>
                            <input type="text" name="user_password" required
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="flex gap-x-20 flex-wrap">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Mobile
                                Number
                                :
                            </label>
                            <input type="text" name="mobile_no" required
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Email
                                Id
                                : </label>
                            <input type="text" name="emai_id" required
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>



                <div>
                    <div class="flex gap-x-20 flex-wrap">
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                Id
                                :
                            </label>
                            <input type="text" name="membership_id"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Description
                                : </label>
                            <input type="text" name="description" required
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                    </div>

                    <div class="flex gap-x-20 flex-wrap">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Effective From Date : </label>
                            <input type="date" name="effective_from_date" required
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Effective To Date : </label>
                            <input type="date" name="effective_to_date" required
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="border border-gray-900 mt-4 p-4">
                <h2 class="font-bold underline mb-4">Password Expiration</h2>

                <div class="">
                    <input type="radio" name="password" id="" class="mr-3">
                    <label class="w-14 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                        Days : </label>
                    <input type="text" name="days"
                        class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <!-- <div class="">
                            <input type="radio" name="password" id="" class="mr-3">
                            <label
                            class="w-14 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Access : </label>
                            <input type="text"
                            class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div> -->
                <div class="">
                    <input type="radio" name="password" id="" class="mr-3" required>
                    <label class="w-15 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                        None </label>
                </div>
            </div>

            <div class="border border-gray-700 mt-5 p-5">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                        data-tabs-toggle="#default-styled-tab-content"
                        data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                        data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                        role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                                data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Direct Responsibilites</button>
                        </li>
                    </ul>
                </div>
                <div id="default-styled-tab-content">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <!-- <div class="">
                            <div>
                                <label class="text-sm">User View</label>
                                <input id="user_view" type="checkbox" name="user_view" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                <div id="view_date" style="display: none;">
                                    <label class="text-sm block mt-3">From Date</label>
                                    <input type="date" name="effective_to_date"
                                        class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    <label class="text-sm block">From Date</label>
                                    <input type="date" name="effective_to_date"
                                        class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div>

                                <label class="text-sm">User Edit</label>
                                <input id="" type="checkbox" name="user_edit" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Admin View</label>
                                <input id="" type="checkbox" name="admin_view" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Admin Write</label>
                                <input id="" type="checkbox" name="admin_write" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Store Request Genrate</label>
                                <input id="" type="checkbox" name="store_request_genrate" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Store Manager</label>
                                <input id="" type="checkbox" name="store_manager" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Store Issue</label>
                                <input id="" type="checkbox" name="store_issue" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div> -->

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-10 py-3">
                                            Role
                                        </th>
                                        <th scope="col" class="px-10 py-3">
                                            Permission
                                        </th>
                                        <th scope="col" class="px-10 py-3">
                                            Start Date
                                        </th>
                                        <th scope="col" class="px-10 py-3">
                                            End Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            User Creation Form
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="user_creation" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_creation_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_creation_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            User Search Form
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="user_search" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_search_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_search_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            View User Report
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="user_report" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                >

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                 />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                 />
                                        </td>
                                    </tr> -->
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Create
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="membership_create" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_create_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_create_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Search
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="membership_search" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_search_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_search_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            View Membership Report
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="membership_report" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Receipt Creation
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="receipt_creation" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_creation_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_creation_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Receipt Search
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="receipt_search" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_search_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_search_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            View Membership Receipt Report
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="receipt_report" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Year fees Creation
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="fess_creation" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Fees Search
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="fees_search" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <!-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                    content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                    swaps
                    classes to control the content visibility and styling.</p>
                </div> -->
                    <!-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                    content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                    swaps
                    classes to control the content visibility and styling.</p>
                </div> -->
                </div>
            </div>


            <div class="w-full mt-5 flex justify-around">
                <button type="text"
                    class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Clear
                    Form</button>
                <button type="text"
                    class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
                <div>
                    <button type="submit"
                        class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit
                        Now</button>
                </div>
            </div>
        </form>
    </div>



    <script src="script.js"></script>
    <SCRipt>





    </SCRipt>
</body>


<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
<script>
  $( function() {
      
      
      
      
          var availableTags = [
          
          ];
        

    $.getJSON("../phpAjax/userAjax.php", {getUSersNameDetails:"getUSersNameDetails"},
        function (data) {


            console.log(data);

            if(data.success){

                data.usernames_data.forEach(name => {
                    console.log(name.user_name);

                    availableTags.push(name.user_name)



                });




            }


        }
    ).fail(error=>{
        console.log(error);
    })



    $( "#username" ).autocomplete({
      source: availableTags
    });
 











} );
  </script>






</html>