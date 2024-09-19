<?php include("./navbar.php"); ?>

<?php
// $servername = "localhost";
// $username = "membership_project";
// $password = "Algo@2023";
// $dbname = "membership_project";



include("./db.php");



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM membership_project.financial_year_fees;";

$result = mysqli_query($conn, $sql);

?>

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
                            Id
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
                        <th scope="col" class="px-6 py-3">
                            Start Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            End Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;

                        ?>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $row['id'] ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $row['membership_type'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['year_of_membership'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['one_time_enrollment'] ?>
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
                                <?php echo $row['start_date'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['end_date'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $row['status'] ?>
                            </td>
                        </tr>

                        <?php

                    }

                    ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>

