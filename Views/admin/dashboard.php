<?php
$total = new ProductController();
$total_price = $total->getTotal();
$total_quantity = $total->getTotalQuantitySold();
$total = new OrdersController();
$pending_order = $total->getWaitingOrders();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>



</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
                     Admin Dashboard
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="https://github.com/AmineElazzab.png"> <span class="hidden md:inline-block">Hi</span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline"><?php echo $_SESSION["fullname"]; ?></a></li>
                                <li><a href="<?php echo BASE_URL; ?>logout" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="<?php echo BASE_URL; ?>dashboard" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="<?php echo BASE_URL; ?>ShowProduct" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                            <i class="fas fa-tasks fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Products</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="<?php echo BASE_URL; ?>orders" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                            <i class="fa fa-envelope fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Orders</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="<?php echo BASE_URL; ?>Clients" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 ">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Clients</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200" style="margin-top: 200px;">
                    <div class="container mx-auto px-6 py-8">
                        <div class="mt-4">
                            <div class="flex flex-wrap -mx-6">
                                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                        <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="white" class="bi bi-cash" viewBox="0 0 16 16">
                                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                                            </svg>
                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700"><?php echo $total_price->total ?> MAD</h4>
                                            <div class="text-gray-500">Total Sold</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                        <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                            <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z" fill="currentColor"></path>
                                                <path d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z" fill="currentColor"></path>
                                                <path d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z" fill="currentColor"></path>
                                            </svg>
                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700"><?php echo $total_quantity->total ?></h4>
                                            <div class="text-gray-500">Products Sold</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                        <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="white" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                                <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                            </svg>
                                        </div>

                                        <div class="mx-5">
                                            <h4 class="text-2xl font-semibold text-gray-700"><?php echo $pending_order->total ?></h4>
                                            <div class="text-gray-500">Pending Orders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">

                        </div>

                        
                    </div>
                </main>

           

   
                <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //User Menu
        if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else { userMenuDiv.classList.add("invisible"); }
            } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
            }
        }

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else { navMenuDiv.classList.add("hidden"); }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) { return true; }
            t = t.parentNode;
        }
        return false;
    }
    </script>



</body>

</html>
