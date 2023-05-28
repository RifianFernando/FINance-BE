@extends('template.template')

@section('head')

@endsection
    
@section('body')

    <body> 
        <div class="flex flex-col justify-evenly items-center w-full h-full bg-darker-white py-3">
            
            <div>
                <h1 class="font-castoro text-5xl">Subscription</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <div class="grid grid-rows-1 lg:grid-cols-2 xl:grid-cols-3 justify-center items-center font-castoro gap-x-10 gap-y-10 p-4 py-10">

                <a href="#" class="flex flex-col w-[300px] h-auto rounded-[10px] bg-white drop-shadow-subs-card px-10 md:px-8 py-6 focus:bg-gray-100 focus:scale-110 duration-500 ease-in-out">
                    <h1 class=" text-subs-brown text-left text-2xl font-bold">BASIC</h1>
                    <h1 class="text-[48px] flex items-end h-1/6 font-bold">Free <span class="text-sm text-gray-500 ml-2">/ month</span></h1>
                    <p class="text-sm text-gray-500 mt-2">Free financial plan for all users</p>
                    <h2 class="text-xl border-2 bg-fin-blue  text-center text-white py-2 my-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">SIGN UP NOW</h2>
                    <p class="text-md text-gray-500 font-bold">Features:</p>
                    <ul class="text-[20px] pt-4 flex flex-col gap-y-4 text-gray-500">
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                    </ul>
                </a>

                <a href="#" class="flex flex-col w-[300px] h-auto rounded-[10px] bg-white drop-shadow-subs-card px-10 md:px-8 py-6 focus:bg-gray-100 focus:scale-110 duration-500 ease-in-out">
                    <h1 class=" text-subs-brown text-left text-2xl font-bold">AD-FREE</h1>
                    <h1 class="text-[48px] flex items-end h-1/6 font-bold">$15 <span class="text-sm text-gray-500 ml-2">/ month</span></h1>
                    <p class="text-sm text-gray-500 mt-2">Free financial plan for all users</p>
                    <h2 class="text-xl border-2 bg-fin-blue  text-center text-white py-2 my-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">SIGN UP NOW</h2>
                    <p class="text-md text-gray-500 font-bold">Features:</p>
                    <ul class="text-[20px] pt-4 flex flex-col gap-y-4 text-gray-500">
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                    </ul>
                </a>

                <a href="#" class="flex flex-col w-[300px] h-auto rounded-[10px] bg-white drop-shadow-subs-card px-10 md:px-8 py-6 focus:bg-gray-100 focus:scale-110 duration-500 ease-in-out">
                    <h1 class=" text-subs-brown text-left text-2xl font-bold">PROFESSIONAL</h1>
                    <h1 class="text-[48px] flex items-end h-1/6 font-bold">$99 <span class="text-sm text-gray-500 ml-2">/ month</span></h1>
                    <p class="text-sm text-gray-500 mt-2">Free financial plan for all users</p>
                    <h2 class="text-xl border-2 bg-fin-blue  text-center text-white py-2 my-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">SIGN UP NOW</h2>
                    <p class="text-md text-gray-500 font-bold">Features:</p>
                    <ul class="text-[20px] pt-4 flex flex-col gap-y-4 text-gray-500">
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Fitur 1</p>
                        </li>
                    </ul>
                </a>
            </div>

        </div>

        
        <script src="">

        </script>
    </body>
@endsection
