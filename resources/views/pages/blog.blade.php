@extends('template.template')

@section('head')
@endsection

@section('body')
    <?php
    $imagePath = '../assets/blog/Event1.jpg';
    ?>

    <body>
        <div class="w-full h-full flex flex-col justify-center items-center relative ">
            <div class="w-full h-[70vh] bg-none"
                style="background-image: url('<?php echo $imagePath; ?>'); background-repeat: no-repeat; background-size: cover">
                <div class="w-full flex flex-col justify-end items-center px-4 sm:px-10 md:px-0 gap-y-5 py-36">
                    <div
                        class=" py-8 px-8 md:px-12  max-w-[500px] flex flex-col rounded-md drop-shadow-subs-card shadow-2xl text-white md:text-fin-blue text-3xl md:text-7xl font-bold ">
                        E V E N T S
                    </div>
                    <div class="font-poppins text-sm lg:text-lg max-w-[500px] text-center text-white md:text-fin-blue">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <!-- News -->
            <div class="w-full flex flex-col py-10 px-4 md:px-16 ">
                <div class="border-b-2 border-gray-400">
                    <h1 class="text-2xl pt-5 pb-10 font-poppins font-bold text-gray-600">Recent Events</h1>
                </div>
                <div
                    class="border-b-2 border-gray-400 w-full flex py-10 flex-col sm:flex-row gap-x-10 px-2 md:px-5 xl:px-20 gap-y-4">
                    <img src="{{ asset('assets/blog/Event1.jpg') }}" alt="" class="w-[200px] lg:w-[350px]">
                    <div class="flex flex-col">
                        <h1 class="text-3xl font-bold font-castoro">Lorem Ipsum</h1>
                        <h4>05/06/2023</h4>
                        <p class="max-w-[500px] py-5 text-xs md:text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
                <div
                    class="border-b-2 border-gray-400 w-full flex py-10 flex-col sm:flex-row gap-x-10 px-2 md:px-5 xl:px-20 gap-y-4">
                    <img src="{{ asset('assets/blog/Event1.jpg') }}" alt="" class="w-[200px] lg:w-[350px]">
                    <div class="flex flex-col">
                        <h1 class="text-3xl font-bold font-castoro">Lorem Ipsum</h1>
                        <h4>05/06/2023</h4>
                        <p class="max-w-[500px] py-5 text-xs md:text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
                <div
                    class="border-b-2 border-gray-400 w-full flex py-10 flex-col sm:flex-row gap-x-10 px-2 md:px-5 xl:px-20 gap-y-4">
                    <img src="{{ asset('assets/blog/Event1.jpg') }}" alt="" class="w-[200px] lg:w-[350px]">
                    <div class="flex flex-col">
                        <h1 class="text-3xl font-bold font-castoro">Lorem Ipsum</h1>
                        <h4>05/06/2023</h4>
                        <p class="max-w-[500px] py-5 text-xs md:text-md">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    @endsection
