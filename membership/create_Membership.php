<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Create Membershio Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>
</head>

<body>
    <div id="create_section" class="mt-5 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline uppercase text-3xl mb-3 font-bold">Membership Registration Form

        </h1>
        <form action="" method="post" id="myForm">
            <div class="">
                <div class="flex flex-wrap gap-x-8 justify-center">
                    <fieldset class="w-1/6 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Membership Details</legend>
                        <div>
                            <label for="email"
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                No :
                            </label>
                            <input type="text" name="membership_no" id="membership_number" disabled
                                placeholder="Enter serial number"
                                class="w-60 rounded-md border hidden h-8 mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Creation
                                Date : </label>
                            <input type="date" name="creation_date"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Starting
                                FY : </label>
                            <input type="date" name="starting_fy"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </fieldset>
                    <fieldset class="w-4/6 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Company Details</legend>
                        <div class="flex flex-wrap gap-x-20">
                            <div class="">
                                <label for=""
                                    class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                    Name :
                                </label>
                                <input type="text" name="company_name" placeholder="Enter company name"
                                    class="w-56 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-56 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                    Address : </label>
                                <input type="text" name="company_address" placeholder="Enter company address"
                                    class="w-56 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-56 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Start
                                    date: </label>
                                <input type="text" name="start_date" placeholder="Start date"
                                    class="w-56 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>


                        <div class="flex flex-wrap gap-x-20">
                            <div class="">
                                <label
                                    class="block w-56 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                    Email id : </label>
                                <input type="text" name="company_email_id" placeholder="Enter company email id"
                                    class="w-56 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-56 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Category
                                    : </label>
                                <input type="text" name="category" placeholder="Enter category"
                                    class="w-56 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-56 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">End
                                    date :
                                    : </label>
                                <input type="text" name="End_date" placeholder="End Date"
                                    class="w-56 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Status:
                                : </label>
                            <!-- <input type="txt" name="status" placeholder="Status"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" /> -->
                            <select
                                name="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                id="">


                                <option selected disabled hidden>Select</option>
                                <option value="Active">Active</option>
                                <option value="inactive">Inactive</option>


                            </select>
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
                            <input type="text" name="person_name" placeholder="Enter person name"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                                Person Email id : </label>
                            <input type="text" name="person_email_id" placeholder="Enter perosn email id"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                                Person Phone Number : </label>
                            <input type="text" name="person_phone_no" placeholder="Enter perosn  phone number"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                                <input type="text" name="udayam_aadhar_card"
                                    placeholder="Enter udayam aadhar card number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Old
                                    Membership Number : </label>
                                <input type="text" name="old_membership_number"
                                    placeholder="Enter old membership number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>


                        <div class="flex flex-wrap justify-around">
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">PAN
                                    No : </label>
                                <input type="text" name="pan_no" placeholder="Enter pan number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">GST
                                    No : </label>
                                <input type="text" name="gst_no" placeholder="Enter GST number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="w-full mt-5 flex flex-wrap justify-around">
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
                <button type="submit"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button>
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Receipt
                    Details</button>
            </div>
        </form>

    </div>
    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (event) {
                event.preventDefault();
                var form = document.getElementById('myForm');
                var formData = new FormData(form);

                $.ajax({
                    url: 'create_action.php',
                    method: 'POST',
                    data: formData,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        alert('Your form has been sent successfully.');

                        membership_number
                        $("#membership_number").val(response.return_id)

                        $("#membership_number").fadeIn(1000)
                        console.log(response);




                    },
                    error: function (error) {
                        alert('Your form was not sent successfully.');
                        console.error(error.responseText);
                    }
                });
                var form = document.getElementById('myForm').reset();
            });
        });
    </script>
    <script src="../js/reciept.js"></script>

</body>

</html>