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

<body>
    @include('template.navbar')
    @yield('body')
</body>

        const ChangeNavStyle = () => {
            ClickNav();
            document.getElementById("nav-container").className(ChangeStyles[Change])
        }

    </script>

    <div class="flex flex-row">
            <div class="sticky max-w-[300px] hidden flex-col px-10 pt-16 h-screen bg-[#23273C] text-[#FAFAFA] md:flex justify-between left-0 top-0">
                <div class="flex flex-col ">
                    <h3 class="w-full text-4xl font-bold text-left">FINEance</h3>
                    <ul class="pt-5 text-md ">
                        <li class="pt-5 ">Dashboard</li>
                        <li class="pt-5">Transaction</li>
                        <li class="pt-5 ">Report</li>
                        <li class="pt-5">Subscription</li>
                        <li class="pt-5">Customer Center</li>
                    </ul>
                </div>
                <div class="mb-8">Option</div>
            </div>

            <div onClick={ClickNav} class="md:hidden"  id="nav-container">
                {ChangeIcon ? <img class="w-full" src="{{ asset('assets/customer-center/Frame2766.png') }}"> : <AiOutlineClose size={20} class="transition-transform"/>}
            </div>
            <div class="hidden" onClick="ChangeNavStyle()"  id="nav-container">
                <h3 class="pt-2 text-4xl font-bold fixed bg-gray-500 ml-5">FINEance</h3>
                <ul class="pt-20 ml-5 bg-gray-500">
                    <li class=" bg-gray-500 ">HOME</li>
                    <li class="pt-3 bg-gray-500 ">ABOUT</li>
                    <li class="pt-3 bg-gray-500 ">CONTACT</li>
                    <li class="pt-3 bg-gray-500 ">SIGN IN</li>
                    <li class="pt-3 bg-gray-500 ">REGISTER</li>
                </ul>
            </div>
            <div>
                @yield('body')
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
