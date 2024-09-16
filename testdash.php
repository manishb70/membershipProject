<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Dashboard</title>
</head>


<body>


    <div>


        <?php include("./navBar.php"); ?>

        <div>



            <div class="flex">



                <div style="max-width: 20rem;"
                    class="relative flex h-[calc(100vh-2rem)] w-full max-w-[20rem] flex-col rounded-xl bg-white bg-clip-border p-4 text-gray-700 shadow-xl shadow-blue-gray-900/5">
                    <div class="p-4 mb-2">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Forms.
                        </h5>
                    </div>
                    <nav
                        class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
                        <div class="relative block w-full">
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button"
                                onclick="userFormShowHide()"
                                    class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                    <i class="fa-solid fa-user"></i>
                                            <path fill-rule="evenodd"
                                                d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
                                        User form
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-180">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                
                                </button>
                                
                            </div>
                            <div class="overflow-hidden  hidden " id="user-li-area">
                                <div
                                    class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav
                                    name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
                                        
                                        <a  href="./User/create_User.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Creation Form
                                        </a>  
                                       
                                        <a  href="./User/search_User.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            User Search Report
                                        </a>  
                                       
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="relative block w-full">
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button"
                                onclick="membershipFormShowHide()"
                                    class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                    <i class="fa-solid fa-receipt"></i>
                                            <path fill-rule="evenodd"
                                                d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
                                        Membership Form
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-180">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                
                                </button>
                                
                            </div>
                            <div class="overflow-hidden hidden " id="membership-li-area">
                                <div
                                    class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav
                                    name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
                                        
                                        <a  href="./membership/create_Membership.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Membership Creation Form
                                        </a>  
                                       
                                        <a  href="./membership/search_Membership.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Membership
                                    Search Report
                                        </a>  
                                       
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="relative block w-full">
                            
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button"
                                onclick="memeberreciptFormShowHide()"
                                    class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
                                        Membership Receipt
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-180">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                
                                </button>
                                
                            </div>
                            <div class="overflow-hidden hidden " id="memberRecipt-li-area">
                                <div
                                    class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav
                                    name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
                                        
                                        <a  href="./Receipt/create_Receipt.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Receipt Creation Form
                                        </a>  
                                       
                                        <a  href="./Receipt/search_Receipt.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Receipt
                                            Search Report
                                        </a>  
                                       
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="relative block w-full">

                            
                            <div role="button"
                                class="flex items-center w-full p-0 leading-tight transition-all rounded-lg outline-none bg-blue-gray-50/50 text-start text-blue-gray-700 hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                <button type="button"
                                onclick="feesFormShowHide()"
                                    class="flex items-center justify-between w-full p-3 font-sans text-xl antialiased font-semibold leading-snug text-left transition-colors border-b-0 select-none border-b-blue-gray-100 text-blue-gray-900 hover:text-blue-gray-900">
                                    <div class="grid mr-4 place-items-center">
                                    <i class="fa-solid fa-money-bill"></i>
                                            <path fill-rule="evenodd"
                                                d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p
                                        class="block mr-auto font-sans text-base antialiased font-normal leading-relaxed text-blue-gray-900">
                                        Define fees
                                    </p>
                                    <span class="ml-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2.5" stroke="currentColor" aria-hidden="true"
                                            class="w-4 h-4 mx-auto transition-transform rotate-180">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                                
                                </button>
                                
                            </div>
                            <div class="overflow-hidden hidden" id="fees-li-area">
                                <div
                                    class="block w-full py-1 font-sans text-sm antialiased font-light leading-normal text-gray-700">
                                    <nav
                                    name="nav"
                                        class="flex min-w-[240px] flex-col gap-1 p-0 font-sans text-base font-normal text-blue-gray-700">
                                        
                                        <a  href="./search_year_table.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Search Year Table
                                        </a>  
                                       
                                        <a  href="./year_table.php"
                                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                                            <div class="grid mr-4 place-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="3" stroke="currentColor" aria-hidden="true"
                                                    class="w-5 h-3">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </div>
                                            Year fees creation
                                        </a>  
                                       
                                    </nav>
                                </div>
                            </div>
                        </div>
                        
                        <hr class="my-2 border-blue-gray-50" />
                        <!-- <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            Inbox
                            <div class="grid ml-auto place-items-center justify-self-end">
                                <div
                                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold uppercase rounded-full select-none whitespace-nowrap bg-blue-gray-500/20 text-blue-gray-900">
                                    <span class="">14</span>
                                </div>
                            </div>
                        </div> -->
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            Profile
                        </div>
                        <div role="button"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            Settings
                        </div>
                        <a role="button"
                        href="./logout.php"
                            class="flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
                            <div class="grid mr-4 place-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            Log Out
                        </div>
                    </nav>
                </div>




                <div class="w-full border flex flex-wrap justify-center border-gray-2  00">
                    
                    <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="receipt_details"></div>
                    <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="activeMembership"></div>
                    <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="paidMmbersByYear"></div>
                    <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="paidUnpaidByYear"></div>
                    <div class="datachart border-2 bg-gray-100 " style="width:26rem; height:17rem" id="paidStatements"></div>
                </div>


            </div>








        </div>





    <!-- 
            <div class="w-full flex border border-gray-700" style=" ">
                <div class="w-1/4  custom-main-dash">

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
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Year
                                        fees creation</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="w-3/4 border border-gray-700">
                    <div id="divId"></div>
                    <div class="datachart bg-gray-100 " style="width:26rem; height:17rem" id="receipt_details"></div>
                </div>
            </div> -->
    </div>

</body>

<script src="./js/pieLoad.js"></script>
<script src="node_modules/@material-tailwind/html@latest/scripts/ripple.js"></script>

<script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

<script src="./js/dashboard.js"></script>

</html>