<?php

include("../db.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $membership_no = $_POST['membership_no'];



    $sql = "SELECT * FROM membership_project.member_table where membership_no = $membership_no;";


    $result = mysqli_query($conn, $sql);



    $row = mysqli_fetch_assoc($result);

    // echo var_dump($row);
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>View Membershio Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>
</head>

<body>
    <?php include("./navbar.php");  ?>
    <div id="create_section" class="mt-5 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline  text-3xl mb-3 font-bold">View Membership Details Form

        </h1>
        <div id="myForm">
            <div class="">
                <div class="flex flex-wrap gap-x-8 justify-center">
                    <fieldset class="w-1/6 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Membership Details</legend>
                        <form action="#" method="post">
                            <label for="email"
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                No :
                            </label>
                            <input type="text" id="membership_no" name="membership_no" value="<?php echo isset($membership_no) ? $membership_no : ""   ?>" placeholder="Enter serial number"
                                class="relative w-48 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            <button type="submit"

                                class="absolute py-2.5 px-3 ms-text-sm ml-2 font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>


                        </form>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Creation
                                Date : </label>
                            <input type="date" name="creation_date" id="creation_date" value="<?php echo isset($membership_no) ? $row['creation_date'] : ""   ?>"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Starting
                                FY : </label>
                            <input type="date" name="starting_fy" id="starting_fy" value="<?php echo isset($membership_no) ? $row['starting_fy'] : ""   ?>"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                        </div>
                    </fieldset>
                    <fieldset class="w-4/6 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Company Details</legend>
                        <div class="flex flex-wrap justify-around">
                            <div class="">
                                <label for=""
                                    class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                    Name :
                                </label>
                                <input type="text" name="company_name" id="company_name" placeholder="Enter company name"
                                    value="<?php echo isset($membership_no) ? $row['company_name'] : ""   ?>"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                <button type="button"
                                    class="absolute py-2.5 px-3 ms-text-sm ml-2 font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                    Address : </label>
                                <input type="text" name="company_address" id="company_address" placeholder="Enter company address"
                                    value="<?php echo isset($membership_no) ? $row['company_address'] : ""   ?>"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                            </div>
                        </div>


                        <div class="flex flex-wrap justify-around">
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                    Email id : </label>
                                <input type="text" name="company_email_id" id="company_email_id" placeholder="Enter company email id"
                                    value="<?php echo isset($membership_no) ? $row['company_email_id'] : ""   ?>"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Category
                                    : </label>
                                <input type="text" id="category" name="category" placeholder="Enter category"
                                    <?php echo isset($membership_no) ? $row['category'] : ""   ?>
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div>
                <div class="flex flex-wrap gap-x-8 mt-5 justify-center">
                    <fieldset class="w-1/6 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Company Person Details</legend>
                        <div>
                            <label for="email"
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                Contact Person name :
                            </label>
                            <input type="text" name="person_name" id="person_name" placeholder="Enter person name"
                                <?php echo isset($membership_no) ? $row['person_name'] : ""   ?>
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                                Person Email id : </label>
                            <input type="text" name="person_email_id" id="person_email_id" placeholder="Enter perosn email id"
                                value="<?php echo isset($membership_no) ? $row['person_email_id'] : ""   ?>"

                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />

                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                                Person Phone Number : </label>
                            <input type="text" name="person_phone_no" id="person_phone_no" placeholder="Enter perosn  phone number"
                                value="<?php echo isset($membership_no) ? $row['person_phone_no'] : ""   ?>"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                        </div>
                    </fieldset>
                    <fieldset class="w-4/6 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Statutory Details</legend>
                        <div class="flex flex-wrap justify-around">
                            <div class="">
                                <label for="email"
                                    class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">UDAYAM
                                    Aadhar Card :
                                </label>
                                <input type="text" name="udayam_aadhar_card" id="udayam_aadhar_card"
                                    value="<?php echo isset($membership_no) ? $row['udayam_aadhar_card'] : ""   ?>"
                                    placeholder="Enter udayam aadhar card number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Old
                                    Membership Number : </label>
                                <input type="text" id="old_membership_number" name="old_membership_number"
                                    value="<?php echo isset($membership_no) ? $row['old_membership_number'] : ""   ?>"
                                    placeholder="Enter old membership number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                            </div>
                        </div>


                        <div class="flex flex-wrap justify-around">
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">PAN
                                    No : </label>
                                <input type="text" name="pan_no" id="pan_no" placeholder="Enter pan number"
                                    value="<?php echo isset($membership_no) ? $row['pan_no'] : ""   ?>"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">GST
                                    No : </label>
                                <input type="text" name="gst_no" id="gst_no" placeholder="Enter GST number"
                                    value="<?php echo isset($membership_no) ? $row['gst_no'] : ""   ?>"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled />
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="w-full mt-5 flex flex-wrap justify-around">
                <!-- <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
                <button type="submit"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button> -->
                <button type="text" onclick="showReceipt()"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Receipt
                    Details</button>
            </div>
        </div>






    </div>


    <div id="reciept_detaial" class="mt-3 hidden border border-gray-900 p-5 rounded-lg mx-5">
        <div id="dataTableFees" class="mt-3     p-5 rounded-lg mx-5">
            <h1 class="text-center  uppercase text-3xl mb-2 font-bold">View Receipt Detail</h1>




            <div class="relative  overflow-x-auto mt-5" id="">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Reciept number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Memebershipn no.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                membership_name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                year of membership
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Membership (New/ Renew)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                One Time Enrollment fee :
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Yearly Charges :

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Share Allocated :
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment Method :
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount paid :
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date of Amount Paid :
                            </th>
                            <th scope="col" class="px-6 py-3">
                                UTR No :
                            </th>
                            <th scope="col" class="px-6 py-3">

                                Transaction Date :
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Balance :
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Next Amount Due :

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>

                        </tr>
                    </thead>
                    <tbody class="whitespace-nowrap" id="SubmitedRowDataInTableBody">



                        <?php


                        if (isset($membership_no)) {

                            $sql = "SELECT * FROM membership_project.receipt_details where member_id = $membership_no;;";


                            $result = mysqli_query($conn, $sql);




                            while ($row = mysqli_fetch_assoc($result)) {



                        ?>




                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        
                                    </th>
                                    <td class="px-6 py-4">
                                        <?php echo $row['id']   ?>
                                    </td>
                                    <td class="px-6 py-4">

                                        <?php echo $row['member_id']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php echo $row['id']   ?>
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php echo $row['year_of_membership']   ?>
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['membership_type']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                         
                                        <?php echo $row['one_time_enrollment_fee']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['yearly_charges']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['share_allocated']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['total_amount']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['payment_method']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['paid_amount']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['date_amount_paid']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                         
                                        <?php echo $row['utr_no']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['transaction_date']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['balance']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['next_amount_due']   ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                        <?php echo $row['status']   ?>
                                    </td>

                                </tr>



                        <?php

                            }
                        }

                        ?>

                    </tbody>
                </table>
            </div>

<!-- 
            <center>
                <a type="text" onclick="updateSubmitData()"
                    style="margin-top: 10px;"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 mt-10 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</a>
            </center> -->
        </div>

    </div>
    <!-- <script>
        $(document).ready(function () {
            $('#myForm').submit(function (event) {
                event.preventDefault();
                var form = document.getElementById('myForm');
                var formData = new FormData(form);

                $.ajax({
                    url: 'create_action.php',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        alert('Your form has been sent successfully.');
                    },
                    error: function (xhr, status, error) {
                        alert('Your form was not sent successfully.');
                        console.error(error);
                    }
                });
                var form = document.getElementById('myForm').reset();
            });
        });
    </script> -->
</body>



<script src="../js/reciept.js">




</script>

<script>
    function showReceipt() {
        console.log("hello");

        $("#reciept_detaial").slideDown(2000)

    }
</script>



</html>