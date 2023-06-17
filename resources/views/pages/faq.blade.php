@extends('template.template')

@section('head')
@endsection

@section('body')
    <body>
        <?php
            $imagePath = "../assets/blog/Event1.jpg";
        ?>
        <div class="w-full h-full flex flex-col justify-center items-center relative ">
            <div class="w-full h-[70vh] bg-none" style="background-image: url('<?php echo $imagePath; ?>'); background-repeat: no-repeat; background-size: cover">
                <div class="w-full flex flex-col justify-end items-center px-4 sm:px-10 md:px-0 gap-y-5 py-36">
                    <div class=" py-8 px-8 md:px-12  max-w-[500px] flex flex-col rounded-md drop-shadow-subs-card shadow-2xl text-white md:text-fin-blue text-3xl md:text-7xl font-bold ">
                        F A Q
                    </div>
                </div>
            </div>
            <!-- News -->
            <div class="w-full flex flex-col py-10 px-4 md:px-16 ">
                <div class="border-b-2 border-gray-400 w-full text-center flex flex-col justify-center items-center pt-5 pb-10">
                    <h1 class="text-3xl py-2 font-poppins font-bold text-gray-600">Frequently Asked Question </h1>
                    <p class="max-w-[700px]">The FAQs serve as a practical resource to support individuals in obtaining immediate answers to their frequently asked questions, facilitating efficient information exchange and empowering users to make informed decisions.</p>
                </div>
                <div class="border-b-2 border-gray-400 w-full grid sm:grid-cols-2 sm:grid-rows-none grid-rows-1 grid-cols-1 py-10 gap-x-4 xl:px-20 gap-y-4">
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">consectetur adipiscing elit ?</h1>
                        <p class="max-w-[400px] py-5 text-sm lg:text-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
                        </p>
                    </div>
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">consectetur adipiscing elit ?</h1>
                        <p class="max-w-[400px] py-5 text-sm lg:text-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
                        </p>
                    </div>
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">consectetur adipiscing elit ?</h1>
                        <p class="max-w-[400px] py-5 text-sm lg:text-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
                        </p>
                    </div>
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">consectetur adipiscing elit ?</h1>
                        <p class="max-w-[400px] py-5 text-sm lg:text-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
                        </p>
                    </div>
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">consectetur adipiscing elit ?</h1>
                        <p class="max-w-[400px] py-5 text-sm lg:text-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
                        </p>
                    </div>
                    <div class="flex flex-col bg-gray-200 p-4 rounded-md ">
                        <h1 class="text-3xl font-bold font-castoro">consectetur adipiscing elit ?</h1>
                        <p class="max-w-[400px] py-5 text-sm lg:text-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
@endsection
