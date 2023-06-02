@extends('template.template')

@section('head')
@endsection

@section('body')

    <body>

        <div class="flex flex-col items-center w-full bg-darker-white">

            <div>
                <h1 class="font-castoro text-5xl mt-2">Dashboard</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <!-- Container -->
            <div class="flex flex-col py-4 w-full px-10 gap-y-5">
                <!-- First Row -->
                <div class="grid grid-cols-5 w-full gap-x-5">

                    <!-- Balance -->
                    <div class="flex flex-row justify-around items-center w-full py-4 bg-fin-blue rounded-[10px] col-span-3">
                        <img src="{{ asset('assets/customer-center/pic.png') }}" class="rounded-full w-[150px] h-[150px]">
                        <div class="flex flex-col justify-between gap-y-3 text-white max-w-[350px]">
                            <h1 class="text-2xl">Hello, {{ $Data['FirstName'] }}</h1>
                            <p class="text-lg">Your financial state is in good condition, keep it up</p>
                        </div>
                    </div>


                    <!-- News Image Slider-->
                    <div class="flex  bg-white drop-shadow-subs-card rounded-md col-span-2">
                        <div class=" flex flex-row" id="image-slide">
                            <img class="w-full h-full fixed" src="{{ asset('assets/customer-center/pic.png') }}">
                            <img class="w-full h-full fixed" src="{{ asset('assets/register/illustration-signup.jpg') }}">
                            <img class="w-full h-full fixed" src="{{ asset('assets/customer-center/pic.png') }}">
                        </div>
                        <div class="absolute top-0 right-2" id="radio-list">
                            <input type="radio" id="Radio1" checked>
                            <input type="radio" id="Radio2">
                            <input type="radio" id="Radio3">
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="grid grid-cols-5 w-full gap-x-6">

                    <!-- Income  -->
                    <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-7 rounded-md">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img
                                    class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Income.png') }}"></div>
                            <h1 class="ml-2">Income</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">Rp{{ $Data['Income'] }}</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Income</span></h1>
                    </div>

                    <!-- Expense  -->
                    <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-7 rounded-md">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img
                                    class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Expense.png') }}"></div>
                            <h1 class="ml-2">Expense</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">Rp. 100.000</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Expense</span></h1>
                    </div>

                    <!-- Wallet  -->
                    <div class="grid col-span-3 bg-white drop-shadow-subs-card py-2 px-10 rounded-md">
                        <div class="flex flex-row justify-between text-gray-400 text-md">
                            <h1>Wallet</h1>
                            <h1>Total Balance</h1>
                        </div>
                        <div class="flex flex-row justify-between text-black font-bold text-sm py-2 font-poppins">
                            <h1 class="flex flex-row items-center text-2xl"><img class="w-[25px] h-[25px] text-white mr-2"
                                    src="{{ asset('assets/dashboard/Wallet.png') }}"> {{ $Data['FirstName'] }}'s Wallet</h1>
                            <h1 class="text-2xl font-castoro">Rp. 100.000.000</h1>
                        </div>
                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins">
                            <a href="#"
                                class="text-sm border-2 bg-fin-blue text-center text-white py-3 px-6 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out ">Add
                                Transaction</a>
                        </div>
                    </div>
                </div>

                <!-- Third Row -->
                <div class="grid grid-cols-10 w-full gap-x-6">
                    <!-- Transaction Container -->
                    <div class="grid col-span-7 bg-white drop-shadow-subs-card py-2 px-8 rounded-md w-full">
                        <h1 class="text-2xl pt-2">Latest Transaction</h1>
                        <div class="w-[100%] py-2 flex flex-col gap-y-4">
                            <hr class="h-[3px] border-0 w-[5%] bg-black">
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-lg">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-lg text-red-600">- Rp 200,000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-lg">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-lg text-red-600">- Rp 200,000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-lg">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-lg text-red-600">- Rp 200,000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-lg">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-lg text-red-600">- Rp 200,000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-lg">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-lg text-red-600">- Rp 200,000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-lg">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-lg text-red-600">- Rp 200,000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-lg">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-lg text-red-600">- Rp 200,000</h1>
                            </div>
                        </div>

                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins justify-center">
                            <a href="#" class="flex flex-row items-center gap-x-2">See More<img
                                    class="w-[15px] h-[12px] text-white mr-2"
                                    src="{{ asset('assets/dashboard/SeeMoreBlack.png') }}">
                            </a>
                        </div>
                    </div>

                    <!-- Content Samting -->
                    <div
                        class="col-span-3 bg-white drop-shadow-subs-card py-2 px-6 rounded-md w-full flex flex-col items-center">

                        <h1 class="text-xl pt-2">Top Spending This Month</h1>
                        <div class="w-[100%] py-2 flex flex-col gap-y-4 justify-center items-center">
                            <hr class="h-[3px] border-0 w-[20%] bg-black">
                        </div>

                        <!-- Category -->
                        <div class="flex flex-col w-full py-3">
                            <div class="flex flex-row justify-center">
                                <div class="flex flex-col">
                                    <div class="flex flex-row items-center py-5 border-b-2 border-gray-200">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[30px] h-[30px] text-white p-[3px]"
                                                src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">Food & Beverage</h1>
                                            <h1 class="col-span-2 text-xl ml-2">Rp 1,000,000.00</h1>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center py-5 border-b-2 border-gray-200">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[30px] h-[30px] text-white p-[3px]"
                                                src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">House Bill</h1>
                                            <h1 class="col-span-2 text-xl ml-2">Rp 800,000.00</h1>
                                        </div>
                                    </div>
                                    <div class="flex flex-row items-center py-5 border-b-2 border-gray-200">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[30px] h-[30px] text-white p-[3px]"
                                                src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">Transportation</h1>
                                            <h1 class="col-span-2 text-xl ml-2">Rp 300,000.00</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            const Images = getImage.querySelectorAll('#image-slide img');

            const Radios = document.querySelectorAll('#radio-list input[type="radio"]');

            const ImageLength = Images.length;
            const RadioLength = Radios.length;
            let ArrayRadio[]
            let selectedIndex = -1;

            function ImageSlider() {
                Images.forEach(function(image) {
                    image.style.display = 'none';
                });

                Radios.forEach(function(radio, index) {
                    if (radio.checked) {
                        selectedIndex = index;
                    }
                });

                Radios.forEach(function(radio) {
                    radio.checked = false;
                });

                const specificImage = images[selectedIndex];
                specificImage.style.display = 'block';

            }

            let counter = 1;

            setInterval(function() {
                document.getElementById('Radio' + counter).checked = true;
                counter++;
                if (counter > 3) {
                    counter = 1;
                }
            }, 1000);
        </script>

    </body>
@endsection
