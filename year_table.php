<!DOCTYPE html>
<html lang="en"><?php include("./navBar.php"); ?>

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
        <h1 class="text-center underline uppercase text-3xl mb-2 font-bold">Financial Year Fees</h1>
        <form action="" method="post" id="myForm">
            <div class="">

                <div class="w-full flex flex-wrap justify-center">
                    <fieldset class="w-3/4 flex flex-wrap gap-x-14 border-2 border-gray-900 p-5 rounded-lg">
                        <legend class="font-bold">Receipt Details</legend>
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
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Member
                                ship ( New/ Renew) : </label>
                            <select id="membership_type" name="membership_type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-8 pl-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Select One</option>
                                <option value="New">New</option>
                                <option value="Renew">Renew</option>
                            </select>
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">One Time
                                Enrollment fee :
                            </label>
                            <input type="number" name="one_time_enrollment" id="one_time_enrollment"
                                onchange="setTotalAmount()"
                                class="w-60 rounded-md border h-8 mb-5 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="">
                            <label
                                class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Yearly
                                Charges : </label>
                            <input type="number" onchange="setTotalAmount()" name="yearly_charges" id="yearly_charges"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Share Allocated : </label>
                            <input type="number" name="share_allocated" id="share_allocated" onchange="setTotalAmount()"
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Total Amount : </label>
                            <input type="text" name="total_amount" id="total_amount" disabled
                                class="w-60 rounded-md h-8 border mb-3 text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </fieldset>
                </div>

            </div>
            <div class="w-full mt-5 flex flex-wrap justify-around">
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
                <!-- <button type="submit"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit</button> -->
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-1 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Receipt
                    Details</button>
            </div>
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



</body>
<script>

    $(document).ready(function () {


        const addTableRowToTbody = (membership_type, year_of_membership, one_time_enrollment, yearly_charges, share_allocated, total_amount) => {


            let tbody = document.getElementById("SubmitedRowDataInTableBody")



            let tr = document.createElement("tr")
            tr.innerHTML = ` <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
        ${membership_type}
                        </th>
                        <td class="px-6 py-4">
                        ${year_of_membership}
                        </td>
                        <td class="px-6 py-4">
                            ${one_time_enrollment}
                        </td>
                        <td class="px-6 py-4">
                            ${yearly_charges}
                        </td>
                        <td class="px-6 py-4">
                            ${share_allocated}
                        </td>
                        <td class="px-6 py-4">
                            ${total_amount}
                        </td>
                    </tr>`


            tbody.appendChild(tr)



        }







        $('#myForm').submit(function (event) {

            event.preventDefault();
            var form = document.getElementById('myForm');
            var formData = new FormData(form);

            let membership_type = $("#membership_type").val()
            let year_of_membership = $("#year_of_membership").val()
            let one_time_enrollment = $("#one_time_enrollment").val()
            let yearly_charges = $("#yearly_charges").val()
            let share_allocated = $("#share_allocated").val()
            let total_amount = $("#total_amount").val()









            $.ajax({
                url: 'year_action.php',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    alert('Your form has been sent successfully.');

                    addTableRowToTbody(membership_type, year_of_membership, one_time_enrollment, yearly_charges, share_allocated, total_amount)

                    $("#dataTableFees").slideDown(1000)





                },
                error: function (xhr, status, error) {
                    alert('Your form was not sent successfully.');
                    console.error(error);
                }
            });
            var form = document.getElementById('myForm').reset();
        });
    });



    const setTotalAmount = () => {


        let share_allocated = $("#share_allocated").val();
        let yearly_charges = $("#yearly_charges").val();
        let one_time_enrollment = $("#one_time_enrollment").val();



        let totalAmount = parseInt(share_allocated) + parseInt(yearly_charges) + parseInt(one_time_enrollment)




        console.log(totalAmount)




        $(total_amount).val(totalAmount)


    }










</script>

</html>