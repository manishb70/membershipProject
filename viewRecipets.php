<?php


include("./navBar.php");



include("./db.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $membership_id = $_POST['membership_no'];


    $sql = "SELECT * FROM membership_project.receipt_details where member_id  like '%$membership_id%' ;";
    $result = mysqli_query($conn, $sql);

}





?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Document</title>

</head>

<body>







    <div class=" overflow-x-auto h-full shadow-md sm:rounded-lg">


        <form method="POST" action="#" class="w-full flex flex-wrap justify-center">
            <fieldset class="w-3/4 flex flex-wrap gap-x-14  border-gray-200 border-2 p-5 rounded-lg">
                <legend class="font-bold">Membership Info</legend>
                <div>
                    <label for=""
                        class="block  mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                        No :
                    </label>
                    <input type="number" name="membership_no" id="membership_no"

                    value="<?php echo isset($membership_id)?$membership_id :""  ?>" 
                        class=" w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />


                </div>
                <div class="">
                    <label
                        class="block w-60 mb-1 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                        Name : </label>
                    <input type="text" id="membership_name" name="membership_name"
                        class=" w-60 rounded-md border h-8 mb-3 text-xs border-gray-500 bg-white py-3 p-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <button type="submit"
                    class="inline-flex items-center py-1 px-4 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search
                </button>

            </fieldset>
        </form>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
?>
        

        <table
            class="w-3/4 border-gray-200 border-2 overflow-x-auto mx-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>




                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        receipt_no
                    </th>
                    <th scope="col" class="px-6 py-3">
                        payment_method
                    </th>
                    <th scope="col" class="px-6 py-3">
                        membership_type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        year_of_membership
                    </th>
                    <th scope="col" class="px-6 py-3">
                        one_time_enrollment_fee
                    </th>
                    <th scope="col" class="px-6 py-3">
                        yearly_charges
                    </th>
                    <th scope="col" class="px-6 py-3">
                        share_allocated
                    </th>
                    <th scope="col" class="px-6 py-3">
                        total_amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        next_amount_due
                    </th>
                    <th scope="col" class="px-6 py-3">
                        date_amount_paid
                    </th>
                    <th scope="col" class="px-6 py-3">
                        utr_no
                    </th>

                    <th scope="col" class="px-6 py-3">
                        transaction_date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        balance
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>





                </tr>
            </thead>
            <tbody>



                <?php

                while ($row = mysqli_fetch_assoc($result)) {




                    ?>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $row['id'] ?>
                        </th>
                        <td class="px-6 py-4">
                            <?php echo $row['receipt_no'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['payment_method'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['membership_type'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['year_of_membership'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['one_time_enrollment_fee'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['yearly_charges'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['share_allocated'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['total_amount'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['next_amount_due'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['date_amount_paid'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['utr_no'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['transaction_date'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['balance'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['status'] ?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="./Receipt/search_Receipt.php" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                        </td>
                    </tr>


                    <?php

                }

                ?>
            </tbody>
        </table>

<?php

}

        ?>

    </div>














</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
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