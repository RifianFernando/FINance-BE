<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vite css -->
    @vite(['resources/css/app.css'])

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Title -->
    <title>FineAnce @yield('title')</title>

    <!-- Yield -->
    @yield('head')
</head>
    <script>
        let Index=0;
        let ChangeStyles = [
            'fixed flex flex-col text-center left-[-100%] top-0 h-full border-r border-r-gray-900 bg-gray-500',
            'fixed flex flex-col text-center left-0 top-0 h-full border-r border-r-gray-900 bg-gray-500 ease-in-out duration-500 w-[100%]'
        ];

        function ClickNav() {
            Index = (Index+1) % ChangeStyles.length;
        }

        function ChangeNavStyle(){
            ClickNav();
            document.getElementById("nav-container").className = ChangeStyles[Index];
            image.src = url[Index];
        }

        let Option=0;
        let OptionStyles = [
            'fixed flex flex-col text-center left-[-100%] top-0 h-full border-r border-r-gray-900 bg-gray-500',
            'fixed flex flex-col text-center left-0 top-0 h-full bg-fin-blue ease-in-out duration-500 w-[17%]'
        ];

        function OptionClick() {
            Option = (Option+1) % OptionStyles.length;
        }

        function OptionNav(){
            OptionClick();
            document.getElementById("OptionMenu").className = OptionStyles[Option];
        }

    </script>

    <div class="flex flex-row">
        <!-- Side Menu Desktop  -->
        <div class="sticky max-w-[300px] hidden flex-col px-10 pt-16 h-screen bg-[#23273C] text-[#FAFAFA] md:flex justify-between left-0 top-0 font-poppins">
            <div class="flex flex-col">
                <h3 class="text-2xl lg:text-4xl font-bold text-left">FINEance</h3>
                <ul class="mt-8 text-sm">
                    <li class="pt-5 hover:scale-110 hover:pl-1"><a href="/dashboard" class="text-white no-underline">Dashboard</a></li>
                    <li class="pt-5 hover:scale-110 hover:pl-1"><a href="/transaction" class="text-white no-underline">Transaction</a></li>
                    <li class="pt-5 hover:scale-110 hover:pl-1"><a href="/report" class="text-white no-underline">Report</a></li>
                    <li class="pt-5 hover:scale-110 hover:pl-1"><a href="/subscription" class="text-white no-underline">Subscription</a></li>
                    <li class="pt-5 hover:scale-110 hover:pl-1"><a href="/customer-center" class="text-white no-underline">Customer Center</a></li>
                </ul>
            </div>
            <div class="mb-8 flex items-center" onClick="OptionNav()">
                <img class="w-[25px] h-[25px] text-white" src="{{ asset('assets/navbar/Settings.png') }}" id="MobileIcon">
                <p class="mx-2">Option</p>
            </div>
        </div>
        @yield('body')
        
        <!-- Burger Bar -->
        <div class="flex flex-col right-0 top-0 fixed py-4 px-8 font-poppins">
            <div onClick="ChangeNavStyle()" class="md:hidden" >
                <button><img class="w-[30px] h-[30px]" src="{{ asset('assets/navbar/Hamburger.png') }}" id="MobileIcon"></button>
            </div>
            <div class="hidden mt-10" onClick="ChangeNavStyle()" id="nav-container" >
                <h3 class="mt-10 text-4xl font-bold text-white">FINEance</h3>
                <div class="w-[100%] flex flex-col py-2 gap-y-3 justify-center items-center">
                    <hr class="h-[2px] border-0 w-[15%] bg-white">
                </div>
                <ul class="mt-10 text-xl">
                    <li class=""><a href="/dashboard" class="text-white no-underline">Dashboard</a></li>
                    <li class="pt-8"><a href="/transaction" class="text-white no-underline">Transaction</a></li>
                    <li class="pt-5"><a href="/report" class="text-white no-underline">Report</a></li>
                    <li class="pt-5"><a href="/subscription" class="text-white no-underline">Subscription</a></li>
                    <li class="pt-5"><a href="/customer-center" class="text-white no-underline">Customer Center</a></li>
                </ul>
            </div>
        </div>

        <!-- Option -->
        <div id="OptionMenu" class="hidden font-poppins" onClick="OptionNav()">
            <h3 class="mt-10 text-4xl font-bold text-white">Option</h3>
            <ul class="mt-10 text-sm">
                <li class="pt-5 hover:scale-110 hover:pl-1"><a href="#" class="text-white no-underline">Profile</a></li>
                <li class="pt-5 hover:scale-110 hover:pl-1"><a href="#" class="text-white no-underline">Log out</a></li>
            </ul>
        </div>
    </div>

    <div class='grid w-full mx-auto py-16 px-10 gap-8 gap-y-10 md:grid-cols-5 bg-[#383A40] text-[#EDEDF3] lg:gap-y-0 font-poppins'>
        <div class='col-span-1'>
            <h1 class='Brand w-full text-3xl font-bold font-play text-left'>FINEance</h1>
            <p class='py-4 text-xs text-left md:text-sm '></p>
            <div class='flex flex-row md:max-w-[50%] justify-between mt-4'>
                <img class="w-[30px] h-[30px] hover:scale-110" src="{{ asset('assets/footer/Facebook.png') }}">
                <img class="w-[30px] h-[30px] hover:scale-110" src="{{ asset('assets/footer/Instagram.png') }}">
                <img class="w-[30px] h-[30px] hover:scale-110" src="{{ asset('assets/footer/Twitter.png') }}">
                <img class="w-[30px] h-[30px] hover:scale-110" src="{{ asset('assets/footer/Youtube.png') }}">
            </div>
        </div>

        <div class='lg:flex grid grid-cols-2 lg:grid-cols-4 col-span-0 md:col-span-4 justify-between md:gap-x-4 mt-6 col-span-2'>
            <div class=''>
                <h4 class='font-bold text-left text-lg'>Navigate</h4>
                <ul class="">
                    <li class="text-left test-xs hover:scale-110"><a href="/dashboard" class="text-white no-underline">Dashboard</a></li>
                    <li class="text-left test-xs hover:scale-110"><a href="/transaction" class="text-white no-underline">Transaction</a></li>
                    <li class="text-left test-xs hover:scale-110"><a href="/report" class="text-white no-underline">Report</a></li>
                    <li class="text-left test-xs hover:scale-110"><a href="/subscription" class="text-white no-underline">Subscription</a></li>
                    <li class="text-left test-xs hover:scale-110"><a href="/customer-center" class="text-white no-underline">Customer Center</a></li>
                </ul>
            </div>            

            <div class=''>
                <h4 class='font-bold text-left text-lg'>About Us</h4>
                <ul>
                    <li class='text-left test-xs hover:scale-110'><a href="/team" class="text-white no-underline">Meet The Team</a></li>
                    <li class='text-left test-xs hover:scale-110'><a href="/faq" class="text-white no-underline">FAQ</a></li>
                    <li class='text-left test-xs hover:scale-110'><a href="/blog" class="text-white no-underline">Blog</a></li>
                </ul>
            </div>

            <div>
                <h4 class='font-bold text-left mt-4 lg:mt-0 text-lg'>Other</h4>
                <ul class="">
                    <li class="text-left test-xs hover:scale-110"><a href="/promo" class="text-white no-underline">Promo</a></li>
                    <li class="text-left test-xs hover:scale-110"><a href="/terms" class="text-white no-underline">Terms And Policy</a></li>
                </ul>
            </div>

            <div class=" flex flex-col gap-y-2 mt-4 lg:mt-0">

                <div class= "w-full col-span-5 md:col-span-2 flex justify-start">
                    <p class="text-left font-bold">Sign Up To Our Newletter</span></p>
                </div>

                <div className=" bg-gray-500 col-span-2">
                    <input type="email" name="" id="" placeholder="Fill Your Email!" class="text-xs md:text-lg w-4/5 text-left outline-none focus:bg-slate-200 bg-white rounded-md flex py-2 text-gray-500"/>
                    <button class=" bg-gray-800 text-sm text-white hover:scale-110 ease-linear duration-250 rounded-md py-2 sm:text-md md:text-xl md:p-3 my-3 px-6 md:py-2 md:px-0 md:w-[120px] duration-300">
                        Submit
                    <button>
                </div>

                <div class= " w-full col-span-5 md:col-span-2 text-xs md:text-md">
                    <p class="text-left">Your Information will be protected, see our <span class="underline">Privacy Policy</span></p>
                </div>

            </div>
        </div>
    </div>
</html>
