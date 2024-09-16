
<?php include("./navBar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    </script>
    <title>Search Year Fees Table Form</title>
</head>

<body>
    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline uppercase text-3xl mb-2 font-bold">View Financial Year Fees</h1>




        <div class="relative overflow-x-auto mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
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
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
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
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Renew
                        </th>
                        <td class="px-6 py-4">
                            2021-22
                        </td>
                        <td class="px-6 py-4">
                            30000
                        </td>
                        <td class="px-6 py-4">
                            1500
                        </td>
                        <td class="px-6 py-4">
                            97
                        </td>
                        <td class="px-6 py-4">
                            27000
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Rerew
                        </th>
                        <td class="px-6 py-4">
                            2022-23
                        </td>
                        <td class="px-6 py-4">
                            22000
                        </td>
                        <td class="px-6 py-4">
                            1800
                        </td>
                        <td class="px-6 py-4">
                            37
                        </td>
                        <td class="px-6 py-4">
                            32000
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (event) {
                event.preventDefault();
                var form = document.getElementById('myForm');
                var formData = new FormData(form);

                $.ajax({
                    url: 'year_action.php',
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
    </script>
</body>

</html>