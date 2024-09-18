<?php include("./navbar.php")     ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Search User Form</title>
</head>

<body>
    <div id="create_section" class="mt-3 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold">View User Details Form</h1>
        <div >
            <div class="flex gap-x-20 border border-gray-500 p-5 rounded-md flex-wrap ">
                <div class="">
                    <div class="flex gap-x-20 flex-wrap">
                        <div>
                            <label for="email"
                                class=" block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">User
                                Name :
                            </label>
                            <input type="text" name="user_name" id="user_name"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="submit" onclick="getUSerDataByUserName()"
                                class="py-1.5 px-3 ms- text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                Id
                                :
                            </label>
                            <input type="text" name="peron_id"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="button"
                                class="py-1.5 px-3 ms- text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Membership
                                Name
                                :
                            </label>
                            <input type="text" name="peron_id"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            <button type="button"
                                class="py-1.5 px-3 ms- text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-x-20 border border-gray-500 p-5 rounded-md flex-wrap mt-4">
                <div class="">
                    <div class="flex gap-x-20 flex-wrap">
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Passowrd
                                : </label>
                            <input type="text" name="password" id="password" 
                                    class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md "
                                disabled />
                        </div>
                        <div class="">
                            <label
                                class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Description
                                : </label>
                            <input type="text" name="description" id="description"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                disabled />
                        </div>
                    </div>
                    <div class="flex gap-x-20 flex-wrap">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Mobile
                                Number
                                :
                            </label>
                            <input type="text" name="mobile_no" id="mobile_no"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                disabled />
                        </div>

                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Email
                                Id
                                : </label>
                            <input type="text" name="emai_id" id="emai_id"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                disabled />
                        </div>
                    </div>
                </div>



                <div>

                    <div class="flex gap-x-20 flex-wrap">
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Effective From Date : </label>
                            <input type="date" name="effective_from_date" id="effective_from_date"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                disabled />
                        </div>
                        <div class="">
                            <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                                Effective To Date : </label>
                            <input type="date" name="effective_to_date" id="effective_to_date"
                                class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                disabled />
                        </div>
                    </div>
                </div>
            </div>


            <div class="border border-gray-900 mt-4 p-4">
                <h2 class="font-bold underline mb-4">Password Expiration</h2>

                <div class="">
                    <input type="radio" name="password" id="" class="mr-3" disabled>
                    <label class="w-14 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                        Days : </label>
                    <input type="text" name="days" id="days-access"
                        class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                        disabled />
                </div>

                <!-- <div class="">
                            <input type="radio" name="password" id="" class="mr-3">
                            <label
                            class="w-14 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Access : </label>
                            <input type="text"
                            class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div> -->
                <div class="">
                    <input type="radio" name="password" id="" class="mr-3" disabled>
                    <label class="w-15 inline-block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                        None </label>
                </div>
            </div>

            <div class="border border-gray-700 mt-5 p-5">
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                        data-tabs-toggle="#default-styled-tab-content"
                        data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                        data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                        role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                                data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Direct Responsibilites</button>
                        </li>
                    </ul>
                </div>
                <div id="default-styled-tab-content">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <!-- <div class="">
                            <div>
                                <label class="text-sm">User View</label>
                                <input id="user_view" type="checkbox" name="user_view" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                                <div id="view_date" style="display: none;">
                                    <label class="text-sm block mt-3">From Date</label>
                                    <input type="date" name="effective_to_date"
                                        class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                    <label class="text-sm block">From Date</label>
                                    <input type="date" name="effective_to_date"
                                        class="w-40 rounded-md border text-xs border-gray-500 mb-3 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div>

                                <label class="text-sm">User Edit</label>
                                <input id="" type="checkbox" name="user_edit" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Admin View</label>
                                <input id="" type="checkbox" name="admin_view" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Admin Write</label>
                                <input id="" type="checkbox" name="admin_write" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Store Request Genrate</label>
                                <input id="" type="checkbox" name="store_request_genrate" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Store Manager</label>
                                <input id="" type="checkbox" name="store_manager" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div>
                                <label class="text-sm">Store Issue</label>
                                <input id="" type="checkbox" name="store_issue" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div> -->


                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-10 py-3">
                                            Role
                                        </th>
                                        <th scope="col" class="px-10 py-3">
                                            Permission
                                        </th>
                                        <th scope="col" class="px-10 py-3">
                                            Start Date
                                        </th>
                                        <th scope="col" class="px-10 py-3">
                                            End Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            User Creation Form
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="user_creation" id="user_creation" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_creation_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_creation_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            User Search Form
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="user_search" id="user_search" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_search_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_search_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            View User Report
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="user_report" id="user_report" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="user_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Create
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="membership_create" id="membership_create" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_create_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_create_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Search
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="membership_search" id="membership_search" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_search_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_search_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            View Membership Report
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="membership_report" id="membership_report" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="membership_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Receipt Creation
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="receipt_creation" id="receipt_creation" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_creation_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_creation_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Membership Receipt Search
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="receipt_search" id="receipt_search" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_search_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_search_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            View Membership Receipt Report
                                        </th>
                                        <td class="px-10 py-4">
                                            <input name="receipt_report" id="receipt_report" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                disabled>

                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_from_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                        <td class="px-10 py-4">
                                            <input type="date" name="receipt_report_to_date"
                                                class="w-40 rounded-md text-xs bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                disabled />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                    </div>
                    <!-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                    content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                    swaps
                    classes to control the content visibility and styling.</p>
                </div> -->
                    <!-- <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel"
                aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                content</strong>.
                Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                        swaps
                        classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                    class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                    content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                    swaps
                    classes to control the content visibility and styling.</p>
                </div> -->
                </div>
            </div>


            <div class="w-full mt-5 flex justify-around">
                <button type="text"
                    class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Clear
                    Form</button>
                <!-- <button type="text"
                    class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>
                <div>
                    <button type="submit"
                        class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit
                        Now</button>
                </div> -->
            </div>
        </div>
    </div>



    <script src="./js/script.js"></script>
</body>

</html>