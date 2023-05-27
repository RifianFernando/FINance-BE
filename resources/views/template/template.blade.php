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
            <div class="sticky max-w-[300px] hidden flex-col px-10 pt-16 h-screen bg-[#23273C] text-[#FAFAFA] md:flex justify-between left-0 top-0">
                <div class="flex flex-col ">
                    <h3 class="text-4xl font-bold text-left">FINEance</h3>
                    <ul class="text-md">
                        <li class="pt-5">Dashboard</li>
                        <li class="pt-5">Transaction</li>
                        <li class="pt-5 ">Report</li>
                        <li class="pt-5">Subscription</li>
                        <li class="pt-5">Customer Center</li>
                    </ul>
                </div>
                <div class="mb-8">Option</div>
            </div>
            @yield('body')
            <div class="flex flex-col right-0 top-0 fixed py-4 px-8">
                <div onClick="ChangeNavStyle()" class="md:hidden" >
                    <button><img class="w-[30px] h-[30px]" src="{{ asset('assets/navbar/Hamburger.png') }}" id="MobileIcon"></button>
                </div>
                <div class="hidden mt-10" onClick="ChangeNavStyle()" id="nav-container" >
                    <h3 class="mt-10 text-4xl font-bold">FINEance</h3>
                    <ul class="mt-10 text-xl">
                        <li class="">HOME</li>
                        <li class="pt-8">ABOUT</li>
                        <li class="pt-8">CONTACT</li>
                        <li class="pt-8">SIGN IN</li>
                        <li class="pt-8">REGISTER</li>
                    </ul>
                </div>
            </div>
        </div>


            <!-- <div class='grid max-w-[1240px] mx-auto py-16 px-4 gap-8 text-gray-800 md:grid-cols-6'>
                <div class='col-span-2'>
                    <h1 class='Brand w-full text-3xl font-bold font-play text-left'> Otter</h1>
                    <p class='py-4 text-xs text-left md:text-sm '>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <div class='flex flex-row md:max-w-[50%] justify-between md:hidden'>
                        <Link class = "w-[70px] h-[70px] flex items-center justify-center bg-transparent" src=''><AiOutlineInstagram class='bg-transparent  hover:bg-gray-900 rounded-md duration-500' size={35}/></Link>
                        <Link class = "w-[70px] h-[70px] flex items-center justify-center bg-transparent " src=''><AiOutlineWhatsApp class='bg-transparent hover:bg-gray-900 rounded-md duration-500' size={35}/></Link>
                        <Link class = "w-[70px] h-[70px] flex items-center justify-center bg-transparent " src=''><AiOutlineTwitter class='bg-transparent hover:bg-gray-900 rounded-md duration-500' size={35}/></Link>
                        <Link class = "w-[70px] h-[70px] flex items-center justify-center bg-transparent " src=''><AiOutlineSkype class='bg-transparent hover:bg-gray-900 rounded-md duration-500' size={35}/></Link>
                    </div>
                </div>

            <div class='lg:flex grid grid-cols-2 lg:grid-cols-4 col-span-0 md:col-span-4 justify-between md:gap-x-4 mt-6 col-span-2'>
                <div class=''>
                    <h4 class='font-bold text-left'>Resources</h4>
                    <ul>
                        <li class='text-left'>Help Center</li>
                        <li class='text-left'>Affiliate</li>
                        <li class='text-left'>Products Review</li>
                        <li class='text-left'>Services</li>
                    </ul>
                </div>

                <div class='max-w-[150px] md:px-2'> 
                    <h4 class='font-bold pb-2'>Latest News</h4>
                    <ul class='grid gap-y-2 grid-row-2'>
                        <li class='grid grid-cols-2 justify-center gap-x-3'>
                            <div class='max-w-[70px] h-[70px] row-span-2 col-span-1 ml-auto'><img src={News2} alt="" class='w-[70px] h-[70px] row-span-2'/></div>
                            <h1 class='text-left text-xs max-w-[100px]'>Introducing Bronson Shoes XI</h1>
                            <button class='underline text-left text-xs max-w-[80px]'>Learn More</button>
                        </li>
                        <li class='grid grid-cols-2 gap-x
                        <div class='max-w-[70px] h-[70px] row-span-2 col-span-1 ml-auto'><img src={News1} alt="" class='w-[70px] h-[70px] row-span-2'/></div>
                            <h1 class='text-left text-xs max-w-[100px]'>New Fabric Material Coming Soon</h1>
                            <button class='underline text-left text-xs max-w-[80px]'>Learn More</button>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class='font-bold text-left mt-4 lg:mt-0'>Navigates</h4>
                    <ul class="">
                        <li class="text-left">Home</li>
                        <li class="text-left">About</li>
                        <li class="text-left">Contact</li>
                        <li class="text-left">Sign Up</li>
                        <li class="text-left">Login</li>
                    </ul>
                </div>

                <div class='max-w-[200px] mt-4 lg:mt-0 pb-2'>
                    <h4 class='font-bold'>Instagram</h4>
                    <ul class=" grid grid-cols-3 gap-x-2 gap-y-2 ">
                        <li class="max-w-[55px]"><img src={IG1} alt="" class='w-[100%] h-[55px]'/></li>
                        <li class="max-w-[55px]"><img src={IG2} alt="" class='w-[100%] h-[55px]'/></li>
                        <li class="max-w-[55px]"><img src={IG3} alt="" class='w-[100%] h-[55px]'/></li>
                        <li class="max-w-[55px]"><img src={IG4} alt="" class='w-[100%] h-[55px]'/></li>
                        <li class="max-w-[55px]"><img src={IG5} alt="" class='w-[100%] h-[55px]'/></li>
                        <li class="max-w-[55px]"><img src={IG6} alt="" class='w-[100%] h-[55px]'/></li>
                    </ul>
                </div>
            </div>
        </div> -->
</html>
