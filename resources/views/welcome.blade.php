<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashpro by BuildWithAngga</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="font-['Poppins'] bg-[#f5f5f5]">

    <!-- menu on navbar mobile view -->
    <div class="flex flex-row justify-between lg:hidden bg-white p-5">
        <div class="logo flex flex-row justify-center items-center gap-x-2">
            <svg id="logo-85" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="ccustom" fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 0C15.5228 0 20 4.47715 20 10V0H30C35.5228 0 40 4.47715 40 10C40 15.5228 35.5228 20 30 20C35.5228 20 40 24.4772 40 30C40 32.7423 38.8961 35.2268 37.1085 37.0334L37.0711 37.0711L37.0379 37.1041C35.2309 38.8943 32.7446 40 30 40C27.2741 40 24.8029 38.9093 22.999 37.1405C22.9756 37.1175 22.9522 37.0943 22.9289 37.0711C22.907 37.0492 22.8852 37.0272 22.8635 37.0051C21.0924 35.2009 20 32.728 20 30C20 35.5228 15.5228 40 10 40C4.47715 40 0 35.5228 0 30V20H10C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM18 10C18 14.4183 14.4183 18 10 18V2C14.4183 2 18 5.58172 18 10ZM38 30C38 25.5817 34.4183 22 30 22C25.5817 22 22 25.5817 22 30H38ZM2 22V30C2 34.4183 5.58172 38 10 38C14.4183 38 18 34.4183 18 30V22H2ZM22 18V2L30 2C34.4183 2 38 5.58172 38 10C38 14.4183 34.4183 18 30 18H22Z"
                    fill="#5417D7"></path>
            </svg>
            <h2 class="font-bold logo text-2xl text-indigo-950">
                DashPro
            </h2>
        </div>
        <a href="#" id="btn-dropdown" class="flex flex-row items-center p-2 border border-gray-300 rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 7H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
                <path d="M3 12H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
                <path d="M3 17H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
            </svg>
        </a>
    </div>
    <!-- end menu mobile -->

    <!-- floating menu navigation on mobile -->
    <div id="dropdown-menu"
        class="lg:hidden hidden flex fixed  flex-col gap-y-16 absolute left-0 top-[160px] bg-white w-screen h-screen p-10 z-20">
        <div class="flex flex-col md:flex-row gap-x-24 gap-y-10">
            <div class="flex flex-col gap-y-4 ">
                <h6 class="text-sm text-gray-400 font-semibold">
                    GENERAL
                </h6>
                <ul class="flex flex-col gap-y-7">
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.44"
                                    d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            My Overview
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.0008 22H16.0008C20.0208 22 20.7408 20.39 20.9508 18.43L21.7008 10.43C21.9708 7.99 21.2708 6 17.0008 6H7.0008C2.7308 6 2.0308 7.99 2.3008 10.43L3.0508 18.43C3.2608 20.39 3.9808 22 8.0008 22Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <g opacity="0.4">
                                    <path
                                        d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z"
                                        stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32"
                                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M2.61914 11.2695C4.86914 12.8095 7.40914 13.7395 9.99914 14.0295"
                                        stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>


                            Post Jobs
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            Special Rewards
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0005 12C13.8305 12 15.1805 10.51 15.0005 8.68L14.3405 2H9.67048L9.00048 8.68C8.82048 10.51 10.1705 12 12.0005 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.3108 12C20.3308 12 21.8108 10.36 21.6108 8.35L21.3308 5.6C20.9708 3 19.9708 2 17.3508 2H14.3008L15.0008 9.01C15.1708 10.66 16.6608 12 18.3108 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M5.64037 12C7.29037 12 8.78037 10.66 8.94037 9.01L9.16037 6.8L9.64037 2H6.59037C3.97037 2 2.97037 3 2.61037 5.6L2.34037 8.35C2.14037 10.36 3.62037 12 5.64037 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <g opacity="0.4">
                                    <path
                                        d="M3.00977 11.2197V15.7097C3.00977 20.1997 4.80977 21.9997 9.29977 21.9997H14.6898C19.1798 21.9997 20.9798 20.1997 20.9798 15.7097V11.2197"
                                        stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z"
                                        stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>


                            Manage Stores
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-y-4">
                <h6 class="text-sm text-gray-400 font-semibold">
                    OTHERS
                </h6>
                <ul class="flex flex-col gap-y-7">
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.16055 10.87C9.06055 10.86 8.94055 10.86 8.83055 10.87C6.45055 10.79 4.56055 8.84 4.56055 6.44C4.56055 3.99 6.54055 2 9.00055 2C11.4505 2 13.4405 3.99 13.4405 6.44C13.4305 8.84 11.5405 10.79 9.16055 10.87Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4"
                                    d="M16.4093 4C18.3493 4 19.9093 5.57 19.9093 7.5C19.9093 9.39 18.4093 10.93 16.5393 11C16.4593 10.99 16.3693 10.99 16.2793 11"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M4.1607 14.56C1.7407 16.18 1.7407 18.82 4.1607 20.43C6.9107 22.27 11.4207 22.27 14.1707 20.43C16.5907 18.81 16.5907 16.17 14.1707 14.56C11.4307 12.73 6.9207 12.73 4.1607 14.56Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4"
                                    d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>



                            Admin Groups
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.6707 14.3L21.2707 19.3C21.1207 20.83 21.0007 22 18.2907 22H5.71074C3.00074 22 2.88074 20.83 2.73074 19.3L2.33074 14.3C2.25074 13.47 2.51074 12.7 2.98074 12.11C2.99074 12.1 2.99074 12.1 3.00074 12.09C3.55074 11.42 4.38074 11 5.31074 11H18.6907C19.6207 11 20.4407 11.42 20.9807 12.07C20.9907 12.08 21.0007 12.09 21.0007 12.1C21.4907 12.69 21.7607 13.46 21.6707 14.3Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" />
                                <path opacity="0.4"
                                    d="M3.5 11.4298V6.27979C3.5 2.87979 4.35 2.02979 7.75 2.02979H9.02C10.29 2.02979 10.58 2.40979 11.06 3.04979L12.33 4.74979C12.65 5.16979 12.84 5.42979 13.69 5.42979H16.24C19.64 5.42979 20.49 6.27979 20.49 9.67979V11.4698"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M9.42969 17H14.5697" stroke="#292D32" stroke-width="2"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>



                            All Directories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.34"
                                    d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="promotion-box w-fit">
            <div class="relative p-5 rounded-2xl bg-indigo-950 flex flex-col gap-y-5">
                <div class="bg-violet-700 rounded-full -top-5 w-fit absolute z-10 p-3">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.02 2.83992L3.63 7.03992C2.73 7.73992 2 9.22992 2 10.3599V17.7699C2 20.0899 3.89 21.9899 6.21 21.9899H17.79C20.11 21.9899 22 20.0899 22 17.7799V10.4999C22 9.28992 21.19 7.73992 20.2 7.04992L14.02 2.71992C12.62 1.73992 10.37 1.78992 9.02 2.83992Z"
                            stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M10.5 18H13.5C15.15 18 16.5 16.65 16.5 15V12C16.5 10.35 15.15 9 13.5 9H10.5C8.85 9 7.5 10.35 7.5 12V15C7.5 16.65 8.85 18 10.5 18Z"
                            stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 9V18" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M7.5 13.5H16.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>

                </div>
                <div class="pt-5">
                    <h3 class="text-white text-lg font-semibold mb-2"> Upgrade Pro</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Install all robust features to grow your big SaaS.
                    </p>
                </div>
                <a href="#" class="text-center font-semibold px-5 bg-violet-700 text-white rounded-full py-2 text-base">
                    Buy Now
                </a>
            </div>
        </div>
    </div>
    <!-- end menu navigation -->

    <div class="flex flex-row justify-start">
        <div class="h-screen fixed left-sidebar flex-none bg-white py-6 px-4 w-[250px] lg:block hidden">
            <div class="flex flex-col justify-between h-full">
                <div class="logo flex flex-row justify-center items-center gap-x-2">
                    <svg id="logo-85" width="40" height="40" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="ccustom" fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 0C15.5228 0 20 4.47715 20 10V0H30C35.5228 0 40 4.47715 40 10C40 15.5228 35.5228 20 30 20C35.5228 20 40 24.4772 40 30C40 32.7423 38.8961 35.2268 37.1085 37.0334L37.0711 37.0711L37.0379 37.1041C35.2309 38.8943 32.7446 40 30 40C27.2741 40 24.8029 38.9093 22.999 37.1405C22.9756 37.1175 22.9522 37.0943 22.9289 37.0711C22.907 37.0492 22.8852 37.0272 22.8635 37.0051C21.0924 35.2009 20 32.728 20 30C20 35.5228 15.5228 40 10 40C4.47715 40 0 35.5228 0 30V20H10C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM18 10C18 14.4183 14.4183 18 10 18V2C14.4183 2 18 5.58172 18 10ZM38 30C38 25.5817 34.4183 22 30 22C25.5817 22 22 25.5817 22 30H38ZM2 22V30C2 34.4183 5.58172 38 10 38C14.4183 38 18 34.4183 18 30V22H2ZM22 18V2L30 2C34.4183 2 38 5.58172 38 10C38 14.4183 34.4183 18 30 18H22Z"
                            fill="#5417D7"></path>
                    </svg>
                    <h2 class="font-bold logo text-2xl text-indigo-950">
                        DashPro
                    </h2>
                </div>
                <div class="flex flex-col gap-y-10">
                    <div class="flex flex-col gap-y-4">
                        <h6 class="text-sm text-gray-400 font-semibold">
                            GENERAL
                        </h6>
                        <ul class="flex flex-col gap-y-7">
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.44"
                                            d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    My Overview
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0008 22H16.0008C20.0208 22 20.7408 20.39 20.9508 18.43L21.7008 10.43C21.9708 7.99 21.2708 6 17.0008 6H7.0008C2.7308 6 2.0308 7.99 2.3008 10.43L3.0508 18.43C3.2608 20.39 3.9808 22 8.0008 22Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <g opacity="0.4">
                                            <path
                                                d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M2.61914 11.2695C4.86914 12.8095 7.40914 13.7395 9.99914 14.0295"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>


                                    Post Jobs
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    Special Rewards
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0005 12C13.8305 12 15.1805 10.51 15.0005 8.68L14.3405 2H9.67048L9.00048 8.68C8.82048 10.51 10.1705 12 12.0005 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.3108 12C20.3308 12 21.8108 10.36 21.6108 8.35L21.3308 5.6C20.9708 3 19.9708 2 17.3508 2H14.3008L15.0008 9.01C15.1708 10.66 16.6608 12 18.3108 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.64037 12C7.29037 12 8.78037 10.66 8.94037 9.01L9.16037 6.8L9.64037 2H6.59037C3.97037 2 2.97037 3 2.61037 5.6L2.34037 8.35C2.14037 10.36 3.62037 12 5.64037 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <g opacity="0.4">
                                            <path
                                                d="M3.00977 11.2197V15.7097C3.00977 20.1997 4.80977 21.9997 9.29977 21.9997H14.6898C19.1798 21.9997 20.9798 20.1997 20.9798 15.7097V11.2197"
                                                stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z"
                                                stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>


                                    Manage Stores
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <h6 class="text-sm text-gray-400 font-semibold">
                            OTHERS
                        </h6>
                        <ul class="flex flex-col gap-y-7">
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16055 10.87C9.06055 10.86 8.94055 10.86 8.83055 10.87C6.45055 10.79 4.56055 8.84 4.56055 6.44C4.56055 3.99 6.54055 2 9.00055 2C11.4505 2 13.4405 3.99 13.4405 6.44C13.4305 8.84 11.5405 10.79 9.16055 10.87Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M16.4093 4C18.3493 4 19.9093 5.57 19.9093 7.5C19.9093 9.39 18.4093 10.93 16.5393 11C16.4593 10.99 16.3693 10.99 16.2793 11"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M4.1607 14.56C1.7407 16.18 1.7407 18.82 4.1607 20.43C6.9107 22.27 11.4207 22.27 14.1707 20.43C16.5907 18.81 16.5907 16.17 14.1707 14.56C11.4307 12.73 6.9207 12.73 4.1607 14.56Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    Admin Groups
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.6707 14.3L21.2707 19.3C21.1207 20.83 21.0007 22 18.2907 22H5.71074C3.00074 22 2.88074 20.83 2.73074 19.3L2.33074 14.3C2.25074 13.47 2.51074 12.7 2.98074 12.11C2.99074 12.1 2.99074 12.1 3.00074 12.09C3.55074 11.42 4.38074 11 5.31074 11H18.6907C19.6207 11 20.4407 11.42 20.9807 12.07C20.9907 12.08 21.0007 12.09 21.0007 12.1C21.4907 12.69 21.7607 13.46 21.6707 14.3Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10" />
                                        <path opacity="0.4"
                                            d="M3.5 11.4298V6.27979C3.5 2.87979 4.35 2.02979 7.75 2.02979H9.02C10.29 2.02979 10.58 2.40979 11.06 3.04979L12.33 4.74979C12.65 5.16979 12.84 5.42979 13.69 5.42979H16.24C19.64 5.42979 20.49 6.27979 20.49 9.67979V11.4698"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M9.42969 17H14.5697" stroke="#292D32" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>



                                    All Directories
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.34"
                                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="promotion-box">
                    <div class="relative p-5 rounded-2xl bg-indigo-950 flex flex-col gap-y-5">
                        <div class="bg-violet-700 rounded-full -top-5 w-fit absolute z-10 p-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.02 2.83992L3.63 7.03992C2.73 7.73992 2 9.22992 2 10.3599V17.7699C2 20.0899 3.89 21.9899 6.21 21.9899H17.79C20.11 21.9899 22 20.0899 22 17.7799V10.4999C22 9.28992 21.19 7.73992 20.2 7.04992L14.02 2.71992C12.62 1.73992 10.37 1.78992 9.02 2.83992Z"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M10.5 18H13.5C15.15 18 16.5 16.65 16.5 15V12C16.5 10.35 15.15 9 13.5 9H10.5C8.85 9 7.5 10.35 7.5 12V15C7.5 16.65 8.85 18 10.5 18Z"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 9V18" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7.5 13.5H16.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="pt-5">
                            <h3 class="text-white text-lg font-semibold mb-2"> Upgrade Pro</h3>
                            <p class="text-gray-300 text-sm leading-relaxed">
                                Install all robust features to grow your big SaaS.
                            </p>
                        </div>
                        <a href="#"
                            class="text-center font-semibold px-5 bg-violet-700 text-white rounded-full py-2 text-base">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto w-screen lg:pl-[250px]">
            <div class="w-full navbar bg-white py-4 px-7">
                <div class="flex flex-row justify-between">
                    <div class="relative w-full md:w-[500px]">
                        <form action="#">
                            <div class="-z-10">
                                <input type="text" placeholder="Search new report here"
                                    class="w-full py-3 rounded-full pl-5 pr-10 border border-gray-300">
                            </div>
                            <button
                                class="top-2 right-2 absolute z-10 flex flex-row items-center p-2 bg-violet-700 rounded-full">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M22 22L20 20" stroke="#fff" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </button>
                        </form>
                    </div>
                    <div class="user flex-row items-center gap-x-3 hidden md:flex">
                        <div class="flex flex-col text-right    ">
                            <h3 class="text-indigo-950 font-semibold text-base">
                                Shayna Xuna
                            </h3>
                            <p class="text-gray-500 text-sm">
                                @shayna
                            </p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1616325629936-99a9013c29c6?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="h-[50px] w-[50px] rounded-full object-cover">
                    </div>
                </div>
            </div>
            <section class="header px-7 pt-10">
                <div
                    class="flex flex-col gap-y-5 md:flex-row md:items-center justify-start md:justify-between header-section w-full">
                    <div class="title">
                        <h1 class="text-2xl text-indigo-950 font-bold mb-1">
                            My Overview
                        </h1>
                        <p class="text-sm text-gray-500">
                            Lorem dolor reporting easier
                        </p>
                    </div>
                    <div class="flex flex-row gap-x-3">

                        <a href=""
                            class="md:w-fit w-full text-center px-7 rounded-full text-base py-3 font-semibold text-indigo-950 bg-white">
                            Filter
                        </a>
                        <a href=""
                            class="md:w-fit w-full text-center px-7 rounded-full text-base py-3 font-semibold text-white bg-violet-700">
                            Export Data
                        </a>
                    </div>
                </div>
            </section>

            <section class="stats pt-10 px-7">
                <h3 class="text-xl font-semibold text-indigo-950 mb-3">
                    Statistics
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-x-7 gap-y-7">
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-violet-700 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.02 2.83992L3.63 7.03992C2.73 7.73992 2 9.22992 2 10.3599V17.7699C2 20.0899 3.89 21.9899 6.21 21.9899H17.79C20.11 21.9899 22 20.0899 22 17.7799V10.4999C22 9.28992 21.19 7.73992 20.2 7.04992L14.02 2.71992C12.62 1.73992 10.37 1.78992 9.02 2.83992Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10.5 18H13.5C15.15 18 16.5 16.65 16.5 15V12C16.5 10.35 15.15 9 13.5 9H10.5C8.85 9 7.5 10.35 7.5 12V15C7.5 16.65 8.85 18 10.5 18Z"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 9V18" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7.5 13.5H16.5" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-row gap-x-1 font-semibold items-center text-sm text-red-600">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 14.5L12.3 10.3L10.7 12.7L7.5 9.5" stroke="#dc2626" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.5 14.5H16.5V12.5" stroke="#dc2626" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                        stroke="#dc2626" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>



                                183%
                            </div>
                        </div>
                        <h3 class="text-2xl text-indigo-950 font-bold">
                            $59,402,199
                        </h3>
                        <p class="text-sm text-gray-500">
                            Teachers Revenue
                        </p>
                    </div>
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-blue-700 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.96 6.17004C18.96 7.56004 20.34 9.77004 20.62 12.32" stroke="#fff"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.48999 12.37C3.74999 9.82997 5.10999 7.61997 7.08999 6.21997"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M8.19 20.9399C9.35 21.5299 10.67 21.8599 12.06 21.8599C13.4 21.8599 14.66 21.5599 15.79 21.0099"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M12.06 7.70001C13.5954 7.70001 14.84 6.45537 14.84 4.92001C14.84 3.38466 13.5954 2.14001 12.06 2.14001C10.5247 2.14001 9.28003 3.38466 9.28003 4.92001C9.28003 6.45537 10.5247 7.70001 12.06 7.70001Z"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M4.82999 19.92C6.36534 19.92 7.60999 18.6753 7.60999 17.14C7.60999 15.6046 6.36534 14.36 4.82999 14.36C3.29464 14.36 2.04999 15.6046 2.04999 17.14C2.04999 18.6753 3.29464 19.92 4.82999 19.92Z"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M19.17 19.92C20.7054 19.92 21.95 18.6753 21.95 17.14C21.95 15.6046 20.7054 14.36 19.17 14.36C17.6347 14.36 16.39 15.6046 16.39 17.14C16.39 18.6753 17.6347 19.92 19.17 19.92Z"
                                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                            </div>
                            <div class="flex flex-row gap-x-1 font-semibold items-center text-sm text-green-600">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 9.5L12.3 13.7L10.7 11.3L7.5 14.5" stroke="#16a34a" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.5 9.5H16.5V11.5" stroke="#16a34a" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                        stroke="#16a34a" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                                25%
                            </div>
                        </div>
                        <h3 class="text-2xl text-indigo-950 font-bold">
                            559,302
                        </h3>
                        <p class="text-sm text-gray-500">
                            Customer Reach
                        </p>
                    </div>
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-orange-500 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.17004 7.43994L12 12.5499L20.77 7.46991" stroke="#fff    "
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 21.6099V12.5399" stroke="#fff  " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M9.92999 2.48L4.59 5.45003C3.38 6.12003 2.39001 7.80001 2.39001 9.18001V14.83C2.39001 16.21 3.38 17.89 4.59 18.56L9.92999 21.53C11.07 22.16 12.94 22.16 14.08 21.53L19.42 18.56C20.63 17.89 21.62 16.21 21.62 14.83V9.18001C21.62 7.80001 20.63 6.12003 19.42 5.45003L14.08 2.48C12.93 1.84 11.07 1.84 9.92999 2.48Z"
                                        stroke="#fff    " stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M17 13.24V9.58002L7.51001 4.09998" stroke="#fff    " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                            </div>
                            <div class="flex flex-row gap-x-1 font-semibold items-center text-sm text-green-600">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 9.5L12.3 13.7L10.7 11.3L7.5 14.5" stroke="#16a34a" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.5 9.5H16.5V11.5" stroke="#16a34a" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                        stroke="#16a34a" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                                25%
                            </div>
                        </div>
                        <h3 class="text-2xl text-indigo-950 font-bold">
                            189,391
                        </h3>
                        <p class="text-sm text-gray-500">
                            Product Purchased
                        </p>
                    </div>
                    <div class="item-stat bg-white rounded-2xl p-5">
                        <div class="flex flex-row mb-7 justify-between">
                            <div class="bg-cyan-700 rounded-full w-fit p-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 2V5" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16 2V5" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7 13H15" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7 17H12" stroke="#fff" stroke-width="2" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16 3.5C19.33 3.68 21 4.95 21 9.65V15.83C21 19.95 20 22.01 15 22.01H9C4 22.01 3 19.95 3 15.83V9.65C3 4.95 4.67 3.69 8 3.5H16Z"
                                        stroke="#fff" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                            <div class="flex flex-row gap-x-1 font-semibold items-center text-sm text-red-600">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 14.5L12.3 10.3L10.7 12.7L7.5 9.5" stroke="#dc2626" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.5 14.5H16.5V12.5" stroke="#dc2626" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                        stroke="#dc2626" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>



                                183%
                            </div>
                        </div>
                        <h3 class="text-2xl text-indigo-950 font-bold">
                            45,291
                        </h3>
                        <p class="text-sm text-gray-500">
                            Product Categories
                        </p>
                    </div>
                </div>
            </section>

            <section class="sales pt-10 px-7 grid grid-cols-1 md:grid-cols-2 gap-x-7 gap-y-7">
                <div class="flex flex-col gap-y-3">
                    <h3 class="text-xl font-semibold text-indigo-950">
                        Products
                    </h3>
                    <div class="flex flex-col bg-white rounded-2xl p-5">
                        <table>
                            <tbody class="flex flex-col gap-y-6">
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-2xl object-cover"
                                                src="https://images.unsplash.com/photo-1614031679232-0dae776a72ee?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Jiake Bunny
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Clothes</p>
                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            12,390 qty
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $50,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-2xl object-cover"
                                                src="https://images.unsplash.com/photo-1614031679232-0dae776a72ee?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Jiake Bunny
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Clothes</p>
                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            12,390 qty
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $50,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-2xl object-cover"
                                                src="https://images.unsplash.com/photo-1614031679232-0dae776a72ee?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Jiake Bunny
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Clothes</p>
                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            12,390 qty
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $50,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-2xl object-cover"
                                                src="https://images.unsplash.com/photo-1614031679232-0dae776a72ee?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Jiake Bunny
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Clothes</p>
                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            12,390 qty
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $50,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-2xl object-cover"
                                                src="https://images.unsplash.com/photo-1614031679232-0dae776a72ee?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Jiake Bunny
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Clothes</p>
                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            12,390 qty
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $50,392
                                        </p>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="flex flex-col gap-y-3">
                    <h3 class="text-xl font-semibold text-indigo-950">
                        Customers
                    </h3>
                    <div class="flex flex-col bg-white rounded-2xl p-5">
                        <table>
                            <tbody class="flex flex-col gap-y-6">
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-full object-cover"
                                                src="https://images.unsplash.com/photo-1514626585111-9aa86183ac98?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Mamate Imo
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Since 2013</p>

                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            1,382 trx
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $250,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-full object-cover"
                                                src="https://images.unsplash.com/photo-1514626585111-9aa86183ac98?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Mamate Imo
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Since 2013</p>

                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            1,382 trx
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $250,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-full object-cover"
                                                src="https://images.unsplash.com/photo-1514626585111-9aa86183ac98?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Mamate Imo
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Since 2013</p>

                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            1,382 trx
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $250,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-full object-cover"
                                                src="https://images.unsplash.com/photo-1514626585111-9aa86183ac98?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Mamate Imo
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Since 2013</p>

                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            1,382 trx
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $250,392
                                        </p>

                                    </td>
                                </tr>
                                <tr class="flex flex-row items-center 2xl:justify-start justify-between">
                                    <td class=" flex xl:basis-5/12 flex-row gap-x-3 items-center">
                                        <a href="#">
                                            <img class="h-[50px] w-[50px] rounded-full object-cover"
                                                src="https://images.unsplash.com/photo-1514626585111-9aa86183ac98?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="">
                                        </a>
                                        <div>
                                            <a href="#">
                                                <h3 class="text-indigo-950 font-semibold text-base">
                                                    Mamate Imo
                                                </h3>
                                            </a>
                                            <p class="text-sm text-gray-500">Since 2013</p>

                                        </div>
                                    </td>
                                    <td class="hidden xl:block">
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            1,382 trx
                                        </p>

                                    </td>
                                    <td>
                                        <p class="text-indigo-950 font-semibold text-sm">
                                            $250,392
                                        </p>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section class="sales pt-10 px-7 grid grid-cols-1 md:grid-cols-2 gap-x-7 pb-10 gap-y-7">
                <div class="flex flex-col gap-y-3">
                    <h3 class="text-xl font-semibold text-indigo-950">
                        Products
                    </h3>
                    <div
                        class="h-[400px] flex flex-col bg-white rounded-2xl p-5 text-center justify-center items-center">
                        <img class="h-[120px] w-[120px] rounded-3xl object-cover mb-7 bg-slate-100" src="" alt="">
                        <h3 class="text-xl font-semibold text-indigo-950 mb-2">
                            Data Not Available
                        </h3>
                        <p class="text-gray-500 text-base leading-relaxed">
                            Currently you have no latest report, <br> please come back later.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col gap-y-3">
                    <h3 class="text-xl font-semibold text-indigo-950">
                        Customers
                    </h3>
                    <div
                        class="h-[400px] flex flex-col bg-white rounded-2xl p-5 text-center justify-center items-center">
                        <img class="h-[120px] w-[120px] rounded-3xl object-cover mb-7 bg-slate-100" src="" alt="">
                        <h3 class="text-xl font-semibold text-indigo-950 mb-2">
                            Data Not Available
                        </h3>
                        <p class="text-gray-500 text-base leading-relaxed">
                            Currently you have no latest report, <br> please come back later.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btndropdown = document.getElementById('btn-dropdown');
            const dropdownmenu = document.getElementById('dropdown-menu');

            btndropdown.addEventListener("click", function () {
                dropdownmenu.classList.toggle("hidden");
            });

            document.addEventListener("click", function (event) {
                if (!btndropdown.contains(event.target) && !dropdownmenu.contains(event.target)) {
                    dropdownmenu.classList.add("hidden");
                }
            });
        });
    </script>
</body>

</html>
