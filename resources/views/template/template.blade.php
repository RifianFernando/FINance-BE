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
        var image = document.querySelector('#MobileIcon');
        let ChangeStyles = [
            'fixed flex flex-col text-center left-[-100%] top-0 h-full border-r border-r-gray-900 bg-gray-500',
            'fixed flex flex-col text-center left-0 top-0 h-full border-r border-r-gray-900 bg-gray-500 ease-in-out duration-500 w-[100%]'
        ];

        let url = [
            "{{ asset('assets/navbar/Hamburger.png') }}",
            "{{ asset('assets/navbar/Close.png') }}"
        ]

        function ClickNav() {
            Index = (Index+1) % ChangeStyles.length;
        }

        function ChangeNavStyle(){
            ClickNav();
            document.getElementById("nav-container").className = ChangeStyles[Index];
            image.src = url[Index];
        }

    </script>

    <div class="flex flex-row">
            <div class="sticky max-w-[300px] hidden flex-col px-10 pt-16 h-screen bg-[#23273C] text-[#FAFAFA] md:flex justify-between left-0 top-0 font-poppins">
                <div class="flex flex-col">
                    <h3 class="text-4xl font-bold text-left">FINEance</h3>
                    <ul class="mt-8 text-sm">
                        <li class="pt-5 hover:scale-110 hover:pl-1"><a href="">Home</a></li>
                        <li class="pt-5 hover:scale-110 hover:pl-1"><a href="">Transaction</a></li>
                        <li class="pt-5 hover:scale-110 hover:pl-1"><a href="">Report</a></li>
                        <li class="pt-5 hover:scale-110 hover:pl-1">Subscription</li>
                        <li class="pt-5 hover:scale-110 hover:pl-1">Customer Center</li>
                    </ul>
                </div>
                <div class="mb-8 flex items-center">
                    <img class="w-[25px] h-[25px] text-white" src="{{ asset('assets/navbar/Settings.png') }}" id="MobileIcon">
                    <p class="mx-2">Option</p>
                </div>
            </div>
            @yield('body')
            <div class="flex flex-col right-0 top-0 fixed py-4 px-8 font-poppins">
                <div onClick="ChangeNavStyle()" class="md:hidden" >
                    <button><img class="w-[30px] h-[30px]" src="{{ asset('assets/navbar/Hamburger.png') }}" id="MobileIcon"></button>
                </div>
                <div class="hidden mt-10" onClick="ChangeNavStyle()" id="nav-container" >
                    <h3 class="mt-10 text-4xl font-bold">FINEance</h3>
                    <ul class="mt-10 text-xl">
                        <li class="">HOME</li>
                        <li class="pt-8">ABOUT</li>
                        <li class="pt-5">CONTACT</li>
                        <li class="pt-5">SIGN IN</li>
                        <li class="pt-5">REGISTER</li>
                        <li class="pt-5">OPTION</li>
                    </ul>
                </div>
            </div>
        </div>


            <div class='grid max-w-full mx-auto py-16 px-10 gap-8 gap-y-10 md:grid-cols-5 bg-[#383A40] text-[#EDEDF3] lg:gap-y-0 font-poppins'>
                <div class='col-span-1'>
                    <h1 class='Brand w-full text-3xl font-bold font-play text-left'>FINEance</h1>
                    <p class='py-4 text-xs text-left md:text-sm '></p>
                    <div class='flex flex-row md:max-w-[50%] justify-between mt-4'>
                        <img class="w-[30px] h-[30px]" src="{{ asset('assets/footer/Facebook.png') }}">
                        <img class="w-[30px] h-[30px]" src="{{ asset('assets/footer/Instagram.png') }}">
                        <img class="w-[30px] h-[30px]" src="{{ asset('assets/footer/Twitter.png') }}">
                        <img class="w-[30px] h-[30px]" src="{{ asset('assets/footer/Youtube.png') }}">
                    </div>
                </div>

                <div class='lg:flex grid grid-cols-2 lg:grid-cols-4 col-span-0 md:col-span-4 justify-between md:gap-x-4 mt-6 col-span-2'>
                    <div class=''>
                        <h4 class='font-bold text-left text-lg'>Resources</h4>
                        <ul>
                            <li class='text-left test-xs'>Help Center</li>
                            <li class='text-left test-xs'>Affiliate</li>
                            <li class='text-left test-xs'>Products Review</li>
                            <li class='text-left test-xs'>Services</li>
                        </ul>
                    </div>

                    <div class=''>
                        <h4 class='font-bold text-left text-lg'>Resources</h4>
                        <ul>
                            <li class='text-left test-xs'>Help Center</li>
                            <li class='text-left test-xs'>Affiliate</li>
                            <li class='text-left test-xs'>Products Review</li>
                            <li class='text-left test-xs'>Services</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class='font-bold text-left mt-4 lg:mt-0'>Navigates</h4>
                        <ul class="">
                            <li class="text-left test-xs">Home</li>
                            <li class="text-left test-xs">About</li>
                            <li class="text-left test-xs">Contact</li>
                            <li class="text-left test-xs">Sign Up</li>
                            <li class="text-left test-xs">Login</li>
                        </ul>
                    </div>

                    <div class=" flex flex-col gap-y-2 mt-4 lg:mt-0">
                        <div class= "w-full col-span-5 md:col-span-2 flex justify-start">
                            <p class="text-left font-bold">Sign Up To Our Newletter</span></p>
                        </div>

                        <div className=" bg-gray-500 col-span-2">
                            <input type="email" name="" id="" placeholder="Fill Your Email!" class="text-xs md:text-lg w-4/5 text-left outline-none focus:bg-slate-200 bg-white rounded-md flex py-2"/>
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
