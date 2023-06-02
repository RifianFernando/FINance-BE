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
                        <img src="{{asset('assets/customer-center/pic.png')}}" class="rounded-full w-[150px] h-[150px]">
                        <div class="flex flex-col justify-between gap-y-3 text-white max-w-[350px]">
                            <h1 class="text-2xl">Hello, User</h1>
                            <p class="text-lg">Your financial state is in good condition, keep it up</p>
                        </div>
                    </div>


                    <!-- News Image Slider-->
                    <div class="flex  bg-white drop-shadow-subs-card rounded-md col-span-2 overflow-hidden">
                        <div class="ImageSlider flex flex-row">
                            <img class="w-full h-full fixed" src="{{asset('assets/dashboard/dummy1.jpeg')}}">
                            <img class="w-full h-full fixed" src="{{asset('assets/dashboard/dummy2.jpeg')}}">
                            <img class="w-full h-full fixed" src="{{asset('assets/dashboard/dummy3.jpeg')}}">
                        </div>
                        <div class="RadioList absolute top-2 right-2 flex flex-row gap-x-2">
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="grid grid-cols-5 w-full gap-x-6">

                    <!-- Income  -->
                    <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-7 rounded-md">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Income.png') }}"></div>
                            <h1 class="ml-2">Income</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro" >Rp. 100.000</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Income</span></h1>
                    </div>

                    <!-- Expense  -->
                    <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-7 rounded-md">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Expense.png') }}"></div>
                            <h1 class="ml-2">Expense</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro" >Rp. 100.000</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Expense</span></h1>
                    </div>
                    
                    <!-- Wallet  -->
                    <div class="grid col-span-3 bg-white drop-shadow-subs-card py-2 px-10 rounded-md">
                        <div class="flex flex-row justify-between text-gray-400 text-md">
                            <h1>Wallet</h1>
                            <h1>Total Balance</h1>
                        </div>
                        <div class="flex flex-row justify-between text-black font-bold text-sm py-2 font-poppins">
                            <h1 class="flex flex-row items-center text-2xl" ><img class="w-[25px] h-[25px] text-white mr-2" src="{{ asset('assets/dashboard/Wallet.png') }}"> Rifian's Wallet</h1>
                            <h1 class="text-2xl font-castoro">Rp. 100.000.000</h1>
                        </div>
                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins">
                            <a href="#" class="text-sm border-2 bg-fin-blue text-center text-white py-3 px-6 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out ">Add Transaction</a>
                        </div>
                    </div>
                </div>
                
                <!-- Third Row -->
                <div class="grid grid-cols-10 w-full gap-x-6 grid-rows-2 gap-y-2">  
                    <!-- Transaction Container -->
                    <div class="grid col-span-7 bg-white drop-shadow-subs-card py-2 px-8 rounded-md w-full row-span-2">
                        <h1 class="text-2xl pt-2" >Latest Transaction</h1>
                        <div class="w-[100%] py-2 flex flex-col gap-y-4">
                            <hr class="h-[3px] border-0 w-[5%] bg-black">
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso  </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-md">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                        </div>
                        
                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins justify-center">
                            <a href="#" class="flex flex-row items-center gap-x-2">See More<img class="w-[15px] h-[12px] text-white mr-2" src="{{ asset('assets/dashboard/SeeMoreBlack.png') }}">
                            </a>
                        </div>
                    </div>

                    <!-- Content Samting
                    <div class="col-span-3 bg-white drop-shadow-subs-card py-2 px-6 rounded-md w-full flex flex-col">

                        <h1 class="text-xl py-1" >This Month's Budget</h1>
                        <div class="w-[100%] py-2">
                            <hr class="h-[3px] border-0 w-[12%] bg-black">
                        </div>

                        Category
                        <div class="flex flex-col w-full py-1">
                            <div class="flex flex-row">
                                <div class="flex flex-col w-full gap-y-5">
                                    <div class="flex flex-row py-2 px-3 border-2 border-gray-300 rounded-md ">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[30px] h-[30px] text-white p-[3px]" src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">Budget's Left</h1>
                                            <h1 class="col-span-2 text-xl ml-2">Rp. 1.000.000</h1>
                                        </div>
                                    </div>
                                    <div class="flex flex-row py-2 px-3 border-2 border-gray-300 rounded-md">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[30px] h-[30px] text-white p-[3px]" src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">Food and Beverage</h1>
                                            <h1 class="col-span-2 text-xl ml-2">Rp. 1.000.000</h1>
                                        </div>
                                    </div>
                                    <div class="flex flex-row py-2 px-3 border-2 border-gray-300 rounded-md">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[30px] h-[30px] text-white p-[3px]" src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">Food and Beverage</h1>
                                            <h1 class="col-span-2 text-xl ml-2">Rp. 1.000.000</h1>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- Budget  -->
                        <div class="col-span-3 bg-white drop-shadow-subs-card py-3 px-6 rounded-md w-full flex flex-col row-span-1">
                            <h1 class="text-xl">This Month's Budget</h1>
                            <div class="w-[100%] py-2">
                                <hr class="h-[3px] border-0 w-[20%] bg-black">
                            </div>
                            <div class="flex flex-col w-full">
                                <div class="flex flex-row">
                                    <div class="flex flex-col w-full gap-y-2">
                                        <div class="flex flex-row rounded-md py-2">
                                            <div class=" bg-fin-blue flex justify-center items-center rounded-full px-2 py-1">
                                                <img class="w-[40px] h-[32px]" src="{{ asset('assets/dashboard/Budget.png') }}">
                                            </div>
                                            
                                            <div class="ml-2">
                                                
                                                <h1 class="font-bold text-md">Budget's Left</h1>
                                                <h1 class="text-xl font-castoro">Rp. 1.000.000</h1>
                                            </div>
                                        </div>

                                        <a href="#" class="text-sm border-2 bg-fin-blue text-center text-white py-3 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">
                                            Set Budget
                                        </a>

                                        <p class="text-xs text-gray-500 py-2">
                                        <Span class="font-bold">Reminder :</Span> 
                                        Spend no more than 
                                        <Span class="font-castoro font-bold">Rp 100.000</Span> 
                                        each day so you can keep on budget for this month
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Budget  -->
                        <div class="col-span-3 bg-white drop-shadow-subs-card py-3 px-6 rounded-md w-full flex flex-col row-span-1">
                            <h1 class="text-xl">Top Spending This Month</h1>
                            <div class="w-[100%] py-2">
                                <hr class="h-[3px] border-0 w-[20%] bg-black">
                            </div>
                            <div class="flex flex-col gap-y-3 py-2">
                                <div class="flex flex-col w-full">
                                    <div class="flex flex-row py-2 rounded-md ">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[25px] h-[25px] text-white p-[3px]" src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">Rp. 1.000.000</h1>
                                            <h1 class="text-md ml-2 text-gray-500">Food & Beverage</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col w-full">
                                    <div class="flex flex-row py-2 rounded-md ">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="w-[25px] h-[25px] text-white p-[3px]" src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="font-bold text-lg ml-2">Rp. 1.000.000</h1>
                                            <h1 class="text-md ml-2 text-gray-500">Food & Beverage</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
        
    <script>
    // JavaScript for the slider
    var Images = document.querySelectorAll('.ImageSlider img');
    var RadioBtns = document.querySelectorAll('.RadioList div');
    var currentIndex = 0;
    
    function Slide() {
        Images[currentIndex].style.display= 'flex';
        RadioBtns[currentIndex].style.backgroundColor = '#23273C';
        setInterval(next, 1000);
    }

    function next() {
        Images[currentIndex].style.display= 'none';
        RadioBtns[currentIndex].style.backgroundColor = '#F7F7FA';
        currentIndex = (currentIndex + 1) % Images.length;
        Images[currentIndex].style.display= 'flex';
        RadioBtns[currentIndex].style.backgroundColor = '#23273C';
    }

    window.onload = Slide();

    </script>

    </body>

@endsection

