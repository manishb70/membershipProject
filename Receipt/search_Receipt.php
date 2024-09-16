<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
          <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="/resources/demos/style.css">
    </script>
    <title>View Receipt Form</title>
</head>

<style>

#ui-id-1{
    background-color: #e1dfdf;
    padding: 5px;
    cursor: pointer;
}

</style>
<body>
    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
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
                            <input type="text"   id="membership_name"  name="membership_name"
                                class=" w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="button"
                            onclick="setDataToMemebershiptAreaByname()"
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
                            <input type="nu" id="next_amount_due" name="next_amount_due"
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



















    <div id="dataTableFees" class="mt-3  hidden  p-5 rounded-lg mx-5">
        <h1 class="text-center underline uppercase text-3xl mb-2 font-bold">View Financial Year Fees</h1>




        <div class="relative  overflow-x-auto mt-5" id="">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Member
                            ship ( New/ Renew)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Year
                            of Membership
                        </th>
                        <th scope="col" class="px-6 py-3">
                            One Time
                            Enrollment fee
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Yearly
                            Charges
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Share Allocated
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Amount
                        </th>
                    </tr>
                </thead>
                <tbody id="SubmitedRowDataInTableBody">
                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            New
                        </th>
                        <td class="px-6 py-4">
                            2020-21
                        </td>
                        <td class="px-6 py-4">
                            20000
                        </td>
                        <td class="px-6 py-4">
                            1200
                        </td>
                        <td class="px-6 py-4">
                            67
                        </td>
                        <td class="px-6 py-4">
                            22000
                        </td>
                    </tr> -->

                </tbody>
            </table>
        </div>


        <center>
        <button type="submit"
        class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button>
        </center>
    </div>






























    

    <!-- <script>
        $(document).ready(function () {
            $('#myForm').submit(function (event) {
                event.preventDefault();
                var form = document.getElementById('myForm');
                var formData = new FormData(form);

                $.ajax({
                    url: 'action.php',
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="../js/reciept.js"></script>
<script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
<script>
  $( function() {
    var availableTags = [
     
    ]


    $.get("../phpAJax/receiptAjax.php",{getAllUsersData:"getAllUsersData"},function (data) {
        console.log(data);
// 
        // console.log(data.data);



        let nameData = data.data    


        // console.log(nam);



        Array.from(nameData).forEach(element => {

            availableTags.push(element.company_name)
        });


        
        
        console.log(availableTags);
        
    },"JSON")
    
    
    
                $( "#membership_name" ).autocomplete({
                    source:availableTags 
                });
  } );
  </script>
</html>