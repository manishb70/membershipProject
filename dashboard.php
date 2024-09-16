<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
    <title>User Dashboard</title>
</head>


<body>


    <div>
       

    <?php include("./navBar.php"); ?>
        <div class="w-full flex border border-gray-700" style=" ">
            <div class="w-1/4  custom-main-dash" >

                <div style=" background-color: #FF9874; min-height:100vh;"
                    class="p-4 whitespace-nowrap 	mx-3 flex flex-col rounded">


                    <h1 class="font-bold text-2xl border-b-2 text-center uppercase"> Forms </h1>

                    <div>
                        <button type="button"
                            class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">User Form</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example1" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                            <li>
                                <a href="./User/create_User.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">User
                                    Creation Form </a>
                            </li>
                            <li>
                                <a href="./User/search_User.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">User
                                    Search Report</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button type="button"
                            class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Membership Form</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example2" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                            <li>
                                <a href="./membership/create_Membership.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Membership
                                    Creation Form </a>
                            </li>
                            <li>
                                <a href="./membership/search_Membership.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Membership
                                    Search Report</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button type="button"
                            class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Membership Receipt
                            </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example3" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                            <li>
                                <a href="./Receipt/create_Receipt.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Receipt
                                    Creation Form </a>
                            </li>
                            <li>
                                <a href="./Receipt/search_Receipt.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Receipt
                                    Search Report</a>
                            </li>
                        </ul>
                    </div>
                    <div>

                        <button type="button"
                            class="text-black w-full mt-3 bg-white flex justify-between focus:outline-none font-medium rounded-t-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            aria-controls="dropdown-example4" data-collapse-toggle="dropdown-example4">
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Define fees
                            </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example4" class="hidden py-2 space-y-2 bg-gray-100 w-full rounded-b-lg">
                            <li>
                                <a href="./search_year_table.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                    Search Year Table </a>
                            </li>
                            <li>
                                <a href="./year_table.php"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Year fees creation</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="w-3/4 border border-gray-700">
                <div id="divId"></div>
                <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="receipt_details"></div>
                <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="paidMmbersByYear"></div>
            </div>
        </div>
    </div>

</body>

    <script src="./js/pieLoad.js"></script>

    <script>
      
    </script>

</html> 