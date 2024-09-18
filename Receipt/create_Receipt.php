<?php include("./navbar.php")     ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>
    <title>Create Receipt Form</title>
</head>

<body>
    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline uppercase text-3xl mb-2 font-bold">Receipt Details Form
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
                            <input type="text" name="membership_number"
                                onchange="setMembershipName(event)"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <!-- <button type="submit"
                                class="inline-flex items-center py-1 px-4 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search
                            </button> -->
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                Name : </label>
                            <input type="text" name="membership_name" id="membership_name"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <!-- <button type="submit"
                                class="inline-flex items-center py-1 px-4 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search
                            </button> -->
                        </div>
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Year
                                of Membership : </label>
                            <select id="year_of_membership" name="year_of_membership"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                                class="block w-60 mb-1 font-bold  text-xs font-medium text-gray-900 dark:text-white">Status
                            </label>
                            <input type="text" disabled name="form_status" id="form_status"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>




                    </fieldset>
                </div>
                <div class="w-full flex flex-wrap justify-center">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Receipt Details</legend>
                        <div class="hidden">
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Receipt
                                No :
                            </label>
                            <input type="text" name="receipt_no"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <!-- <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Payment
                                Method : </label>
                            <select id="countries" name="payment_method"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Bank Trasfer">Bank Trasfer </option>
                                <option value="Cash">Cash</option>
                                <option value="Other">Other</option>
                            </select>
                        </div> -->
                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Member
                                ship ( New/ Renew) : </label>
                            <select id="membership_type" onchange="getReciptDataAttr()" name="membership_type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                            <!-- <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Year
                                    of Membership : </label>
                                <select id="year_of_membership" name="year_of_membership"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected disabled>Select One</option>
                                    <option value="2018-19">2018-19</option>
                                    <option value="2019-20">2019-20</option>
                                    <option value="2020-21">2020-21</option>
                                    <option value="2021-22">2021-22</option>
                                    <option value="2022-23">2022-23</option>
                                    <option value="2023-24">2023-24</option>
                                    <option value="2024-25">2024-25</option>
                                </select>
                            </div> -->
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">One
                                    Time Enrollment fee : </label>
                                <input type="text" name="one_time_enrollment_fee" id="one_time_enrollment"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Yearly
                                    Charges : </label>
                                <input type="text" name="yearly_charges" id="yearly_charges"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                    Share Allocated : </label>
                                <input type="text" name="share_allocated" id="share_allocated"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="">
                                <label
                                    class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                    Total Amount : </label>
                                <input type="text" name="total_amount" id="total_amount"
                                    class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                        </div>
                    </fieldset>
                </div>


                <div class="w-full flex flex-wrap justify-center mt-4">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Payment Details</legend>

                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Payment
                                Method : </label>
                            <select id="countries" name="payment_method"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Bank Trasfer">Bank Trasfer </option>
                                <option value="Cash">Cash</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Amount
                                paid
                                :
                            </label>
                            <input type="paid_amount" name="paid_amount" id="paid_amount"
                                onchange="setBalanceAmountToBalance()"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Date of
                                Amount Paid :
                            </label>
                            <input type="date" name="date_amount_paid"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">UTR No :
                            </label>
                            <input type="text" name="utr_no"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Transaction
                                Date :
                            </label>
                            <input type="date" name="transaction_date"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Balance
                                :
                            </label>
                            <input type="number" name="balance" id="balance"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Next
                                Amount Due :
                            </label>
                            <input type="date" name="next_amount_due"
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <!-- <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Status
                                : </label>
                            <select id="countries" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div> -->
                        <button type="submit" style="    max-height: 36px;" form-status="SAVE" id="save-data-btn"
                            class="text-white border  mt-3 px-5 py-1 border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal rounded-md text-xs  text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Add payment reciept</button>
                    </fieldset>


                </div>

            </div>
            <div class="w-full mt-5 flex flex-wrap justify-around">
                <!-- <button type="submit" form-status="SAVE" id="save-data-btn"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Add</button> -->
                <!-- <button type="submit" form-status="SUBMIT"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button> -->
                <!-- <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Receipt
                    Details</button> -->
            </div>
        </form>

    </div>








    <div id="dataTableFees" class="mt-3  hidden   p-5 rounded-lg mx-5">
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
                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Check btn
                        </th>
                        <td class="px-6 py-4">
                            rec number
                        </td>
                        <td class="px-6 py-4">
                            membership number
                        </td>
                        <td class="px-6 py-4">
                            membership name
                        </td>
                        <td class="px-6 py-4">
                            year of membership
                        </td>
                        <td class="px-6 py-4">
                            member ship new renoew
                        </td>
                        <td class="px-6 py-4">
                            One Time Enrollment fee :
                        </td>
                        <td class="px-6 py-4">
                            Yearly Charges :
                        </td>
                        <td class="px-6 py-4">
                            Share Allocated :
                        </td>
                        <td class="px-6 py-4">
                            Total amount :
                        </td>
                        <td class="px-6 py-4">
                            Payment Method :
                        </td>
                        <td class="px-6 py-4">
                            Amount paid :
                        </td>
                        <td class="px-6 py-4">
                            Date of Amount Paid :
                        </td>
                        <td class="px-6 py-4">
                            UTR No :
                        </td>
                        <td class="px-6 py-4">
                            Transaction Date :
                        </td>
                        <td class="px-6 py-4">
                            Balance :
                        </td>
                        <td class="px-6 py-4">
                            Next Amount Due :
                        </td>
                        <td class="px-6 py-4">
                            Status
                        </td>

                    </tr> -->

                </tbody>
            </table>
        </div>


        <center>
            <a type="text" onclick="updateSubmitData()"
                style="margin-top: 10px;"
                class="text-white border border-blue-700 bg-blue-800 focus:ring-4 mt-10 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</a>
        </center>
    </div>




































    <script>
        $(document).ready(function() {


            const addRowDataToTbody = (receipt_no, membership_number, membership_name, yearofmembership, memberType, onetimeenrollementfees, yearlycharges, share_allocated, total_amount, payment_method, amount_paid, dateofamountpaid, utrnumber, transanctiondate, balance, nextamountdue, status) => {



                let tbody = document.getElementById("SubmitedRowDataInTableBody")



                let tr = document.createElement("tr")
                tr.innerHTML = ` 
                    

                   
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                             <input id="default-checkbox" row-id="${receipt_no}" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </th>
                        <td class="px-6 py-4">
            ${receipt_no}
                        </td>
                        <td class="px-6 py-4">
                            ${membership_number}
                        </td>
                        <td class="px-6 py-4">
                          ${membership_name}
                        </td>
                        <td class="px-6 py-4">
                          ${yearofmembership}
                        </td>
                        <td class="px-6 py-4">


                           
                        
                            ${memberType}
                        </td>
                        <td class="px-6 py-4">
                        
                        ${onetimeenrollementfees}
                        </td>
                        <td class="px-6 py-4">
                            
                        ${yearlycharges}
                        </td>
                        <td class="px-6 py-4">
                        
                        ${share_allocated}
                        </td>
                        <td class="px-6 py-4">
                            
                          ${total_amount}
                        </td>
                        <td class="px-6 py-4">
                            
                          ${payment_method}
                        </td>
                        <td class="px-6 py-4">
                        
                       

                        <input type="text" name="paid_amount"
                        value='${amount_paid}' disabled
                                class="w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />



                        
                       
                       
                       
                          </td>
                        <td class="px-6 py-4">
                        
                          ${dateofamountpaid}
                        </td>
                        <td class="px-6 py-4">
                        
                          ${utrnumber}
                        </td>
                        <td class="px-6 py-4">
                        
                          ${transanctiondate}
                        </td>
                        <td class="px-6 py-4">
                        
                          ${balance}
                        </td>
                        <td class="px-6 py-4">
                        
                          ${nextamountdue}
                        </td>
                        <td class="px-6 py-4">
                        
                          ${status}
                        </td>
                       
                    

                    `



                tbody.appendChild(tr)





            }























            $('button[type="submit"]').on('click', function(event) {

                event.preventDefault();



















                let status = (event.target).getAttribute("form-status")

                console.log(status)

                var form = document.getElementById('myForm');
                var formData = new FormData(form);



                console.log(formData);






                formData.append("formStatus", status)


                console.log(formData)

                $.ajax({
                    url: 'action.php',
                    method: 'POST',
                    data: formData,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert('Your form has been sent successfully.');
                        console.log(response);

                        let reqDataForTable = response.formData


                        $("#form_status").val(response.formstatus)
                        // $("#form_status")


                        addRowDataToTbody(response.receipt_no, reqDataForTable.membership_number, reqDataForTable.membership_name, reqDataForTable.year_of_membership, reqDataForTable.membership_type, reqDataForTable.one_time_enrollment_fee, reqDataForTable.yearly_charges, reqDataForTable.share_allocated, reqDataForTable.total_amount, reqDataForTable.payment_method, reqDataForTable.paid_amount, reqDataForTable.transaction_date, reqDataForTable.utr_no, reqDataForTable.transaction_date, reqDataForTable.balance, reqDataForTable.next_amount_due, response.formstatus)





                        $("#dataTableFees").slideDown(1000)







                    },
                    error: function(error) {
                        alert('Your form was not sent successfully.');
                        console.log(error.responseText);
                    }
                });
                // var form = document.getElementById('myForm').reset();
            });
        });







        const setMembershipName = (event) => {

            let id = $(event.target).val()


            let data = {
                getMembershipNameById: "getMembershipNameById",
                member_id: id
            }


            $.getJSON("../phpAjax/receiptAjax.php", data,
                function(data) {

                    if (data.success) {
                        $(membership_name).val(data.data[0]["company_name"]);
                        console.log(data.data[0]["company_name"]);
                    }



                }, "JSON"
            ).fail(error => {
                console.log(error);
            })








        }
    </script>
    <script src="../js/reciept.js"></script>


    <script>
        const setBalanceAmountToBalance = () => {

            let total_amount = parseInt($("#total_amount").val())
            // let total_amount = parseInt($("#total_amount").val())




            let balance = total_amount - parseInt($("#paid_amount").val())



            console.log(balance)


            

            $("#balance").val(balance)




        }






        const updateSubmitData = () => {



            let tbody = document.getElementById("SubmitedRowDataInTableBody")





            let rows = tbody.querySelectorAll("tr")




            let totalPaidAmount = 0;

            rows.forEach(element => {


                let input = element.querySelector("input[type='checkbox']")


           



                    let paid_amount = $("input[name='paid_amount']").val()

                    totalPaidAmount = totalPaidAmount + parseInt(paid_amount)






            })



            console.log(totalPaidAmount);





            let total_amount = $("#total_amount").val()

            if (total_amount >= totalPaidAmount) {












                console.log(rows)



                let checkedRowId = []



                rows.forEach(Element => {


                    let input = Element.querySelector("input[type='checkbox']")












                    if (input.checked) {

                        let id = input.getAttribute("row-id")

                        checkedRowId.push(id)

                    }



                    console.log(checkedRowId)


                    let data = {
                        updateSubmitData: "updateSubmitData",
                        checkedRowId: checkedRowId
                    }


                    $.get("../phpAJax/receiptAjax.php   ", data, function(response) {

                        console.log(response)



                        if (response.success) {




                            let buttons = document.querySelectorAll("button")


                            buttons.forEach(element => {
                                $(element).slideToggle(1000)
                            })



                            alert("Data submitted successfully")


                        }






                    }, "JSON").fail(error => {
                        console.log(error)
                    })








                })





            } else {


                alert("Total of amount cannot be more than net  payble amount please recheck .")



            }








        }
    </script>

</body>


</html>