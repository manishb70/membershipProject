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
    <div id="create_section" class="mt-5 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline  text-3xl mb-3 font-bold">View Membership Details Form

        </h1>
        <div  id="myForm">
            <div class="">
                <div class="flex flex-wrap gap-x-8 justify-center">
                    <fieldset class="w-1/6 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Membership Details</legend>
                        <div>
                            <label for="email"
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                No :
                            </label>
                            <input type="text" id="membership_no" name="membership_no" placeholder="Enter serial number"
                                class="relative w-48 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            <button type="button"
                            onclick="setDataToMemebershiptOnlyArea()"
                                class="absolute py-2.5 px-3 ms-text-sm ml-2 font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>

                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Creation
                                Date : </label>
                            <input type="date" name="creation_date" id="creation_date"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Starting
                                FY : </label>
                            <input type="date" name="starting_fy" id="starting_fy"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
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
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"/>
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
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                            </div>
                        </div>


                        <div class="flex flex-wrap justify-around">
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Company
                                    Email id : </label>
                                <input type="text" name="company_email_id" id="company_email_id" placeholder="Enter company email id"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Category
                                    : </label>
                                <input type="text" id="category" name="category"   placeholder="Enter category"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
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
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                                Person Email id : </label>
                            <input type="text" name="person_email_id" id="person_email_id" placeholder="Enter perosn email id"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                                Person Phone Number : </label>
                            <input type="text" name="person_phone_no" id="person_phone_no" placeholder="Enter perosn  phone number"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
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
                                    placeholder="Enter udayam aadhar card number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Old
                                    Membership Number : </label>
                                <input type="text"  id="old_membership_number" name="old_membership_number"
                                    placeholder="Enter old membership number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                            </div>
                        </div>


                        <div class="flex flex-wrap justify-around">
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">PAN
                                    No : </label>
                                <input type="text" name="pan_no" id="pan_no" placeholder="Enter pan number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">GST
                                    No : </label>
                                <input type="text" name="gst_no" id="gst_no" placeholder="Enter GST number"
                                    class="w-60 rounded-md h-8 border mb-4 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" disabled/>
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
        <h1 class="text-center underline uppercase text-3xl mb-2 font-bold">View Receipt Details Form
        </h1>
        <form action="action.php" method="post" id="myForm">
            <div class="">
                <div class="w-full flex flex-wrap justify-center">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Membership Info</legend>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                No :
                            </label>
                            <input type="number" name="membership_no"
                            id="membership_no"
                                class=" w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="button"
                            onclick="setDataToMemebershiptArea()"
                                class="inline-flex items-center py-1 px-4 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search
                            </button>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                Name : </label>
                            <input type="text"  id="membership_name"  name="membership_name"
                                class=" w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="button"
                                class="inline-flex items-center py-1 px-4 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search
                            </button>
                        </div>

                    </fieldset>
                </div>
                <div class="w-full flex flex-wrap justify-center">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Receipt Details</legend>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Receipt
                                No :
                            </label>
                            <input type="text" id="receipt_no" name="receipt_no"
                                class="hidden w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Payment
                                Method : </label>
                            <select id="payment_method" name="payment_method"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Bank Trasfer">Bank Trasfer </option>
                                <option value="Cash">Cash</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Member
                                ship ( New/ Renew) : </label>
                            <select id="membership_type" name="membership_type"
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="New">New</option>
                                <option value="Renew">Renew</option>
                            </select>
                        </div>
                    </fieldset>
                </div>

                <div class="overflow-x-scroll w-3/4 m-auto mt-3">
                    <fieldset class="border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Membership Details</legend>
                        <div class="flex gap-x-14 w-auto">
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Year
                                    of Membership : </label>
                                <select id="year_of_membership" name="year_of_membership"
                                    class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Select One</option>
                                    <option value="2018-19">2018-19</option>
                                    <option value="2019-20">2019-20</option>
                                    <option value="2020-21">2020-21</option>
                                    <option value="2021-22">2021-22</option>
                                    <option value="2022-23">2022-23</option>
                                    <option value="2023-24">2023-24</option>
                                    <option value="2024-25">2024-25</option>
                                </select>
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">One
                                    Time Enrollment fee : </label>
                                <input type="text" id="one_time_enrollment_fee" name="one_time_enrollment_fee"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md hidden " />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Yearly
                                    Charges : </label>
                                <input type="text" id="yearly_charges" name="yearly_charges"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md hidden " />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                    Share Allocated : </label>
                                <input type="text" name="share_allocated" id="share_allocated"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md hidden " />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                    Total Amount : </label>
                                <input type="text" name="total_amount"
                                id="total_amount"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md hidden " />
                            </div>
                        </div>
                    </fieldset>
                </div>


                <div class="w-full flex flex-wrap justify-center mt-4">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Payment Details</legend>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Next
                                Amount Due :
                            </label>
                            <input type="date" id="next_amount_due" name="next_amount_due"
                                class="hidden w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Date of
                                Amount Paid :
                            </label>
                            <input type="date" id="date_amount_paid" name="date_amount_paid"
                                class="hidden w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">UTR No :
                            </label>
                            <input type="text" name="utr_no" id="utr_no"
                                class="hidden w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Transaction
                                Date :
                            </label>
                            <input type="date" name="transaction_date"
                            id="transaction_date"
                                class="hidden w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Balance
                                :
                            </label>
                            <input type="number" name="balance" id="balance"

                                class="hidden w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Status
                                : </label>
                            <select id="status" name="status" 
                                class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- <div class="w-full mt-5 flex flex-wrap justify-around">
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
                <button type="submit"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button>
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Receipt
                    Details</button>
            </div> -->
        </form>

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