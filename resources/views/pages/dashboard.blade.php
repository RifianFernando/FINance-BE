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
                            <h1 class="text-2xl">Hello,
                                {{ $Data['FirstName'] }}
                            </h1>
                            <p class="text-md">Your financial state is in good condition, keep it up</p>
                        </div>
                    </div>


                    <!-- News Image Slider-->
                    <div class="flex bg-white drop-shadow-subs-card rounded-md col-span-2 overflow-hidden">
                        <div class="ImageSlider flex flex-row">
                            <img class="w-full h-full fixed" src="{{ asset('assets/dashboard/Dummy2.jpeg') }}">
                            <img class="w-full h-full fixed" src="{{ asset('assets/dashboard/Dummy1.jpeg') }}">
                            <img class="w-full h-full fixed" src="{{ asset('assets/dashboard/Dummy3.jpeg') }}">
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
                    <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-4 rounded-md">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img
                                    class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Income.png') }}"></div>
                            <h1 class="ml-2">Income</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">
                            Rp {{ $Data['Income'] }}
                        </h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Income</span></h1>
                    </div>

                    <!-- Expense  -->
                    <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-4 rounded-md">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img
                                    class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Expense.png') }}"></div>
                            <h1 class="ml-2">Expense</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">Rp {{ $Data['Expense'] }}</h1>
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
                                    src="{{ asset('assets/dashboard/Wallet.png') }}">
                                {{ $Data['FirstName'] }}'s
                                Wallet
                            </h1>
                            <h1 class="text-2xl font-castoro">Rp {{ $Data['TotalBalance'] }}</h1>
                        </div>
                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins">
                            <a href="{{ route('transaction.view') }}"
                                class="text-sm border-2 bg-fin-blue text-center text-white py-3 px-6 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out ">Add
                                Transaction</a>
                        </div>
                    </div>
                </div>

                <!-- Third Row -->
                <div class="grid grid-cols-10 w-full gap-x-6 grid-rows-2 gap-y-2">
                    <!-- Transaction Container -->
                    <div
                        class="flex flex-col items-start col-span-7 bg-white drop-shadow-subs-card py-2 px-8 rounded-md w-full row-span-2">
                        <h1 class="text-2xl pt-2">Latest Transaction</h1>
                        <div class="w-[100%] py-2 flex flex-col gap-y-4">
                            <hr class="h-[3px] border-0 w-[5%] bg-black">
                        </div>

                        <!-- Jika Transaction Kosong -->

                        <!-- <div class="w-full flex flex-col items-center h-full justify-center">
                                                                                        <img class=" text-white mr-2" src="{{ asset('assets/dashboard/Empty.png') }}">
                                                                                        <h1 class="text-2xl text-gray-400">
                                                                                            No Transaction Yet ! :)
                                                                                        </h1>
                                                                                    </div> -->

                        <!-- Jika Transaction ada-->

                        <div class="flex flex-col w-full">
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-200">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso</h1>
                                <h1 class="col-span-1 font-bold text-sm">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-sm">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-sm">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-sm">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-sm">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-sm">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                            <div class="grid grid-cols-5 py-3 gap-x-4 border-b-2 border-gray-300">
                                <h1 class="col-span-1 font-bold text-md">17-08-1945</h1>
                                <h1 class="col-span-2">Beliin Rifian Starbucks Expresso </h1>
                                <h1 class="col-span-1 font-bold text-sm">Food & Beverage</h1>
                                <h1 class="col-span-1 font-bold text-md text-red-600">- Rp 200.000</h1>
                            </div>
                        </div>

                        <div
                            class="flex flex-row w-full text-black font-bold text-sm py-4 font-poppins justify-center items-center">
                            <a href="#" class="flex flex-row items-center gap-x-2">
                                See More
                                <img class="w-[15px] h-[12px] text-white mr-2"
                                    src="{{ asset('assets/dashboard/SeeMoreBlack.png') }}">
                            </a>
                        </div>
                    </div>

                    <!-- Budget  -->
                    <div
                        class="col-span-3 bg-white drop-shadow-subs-card py-3 px-6 rounded-md w-full flex flex-col row-span-1">
                        <h1 class="text-xl">This Month's Budget</h1>
                        <div class="w-[100%] py-2">
                            <hr class="h-[3px] border-0 w-[20%] bg-black">
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="flex flex-row">
                                <div class="flex flex-col w-full gap-y-2">
                                    <div class="flex flex-row rounded-md py-2">
                                        <div class=" bg-fin-blue flex justify-center items-center rounded-full px-2 py-1">
                                            <img class="w-[40px] h-[32px]"
                                                src="{{ asset('assets/dashboard/Budget.png') }}">
                                        </div>

                                        <div class="ml-2">

                                            <h1 class="font-bold text-md">Budget's Left</h1>
                                            <h1 class="text-xl font-castoro">Rp{{ $Data['Budget'] }}</h1>
                                        </div>
                                    </div>

                                    <button id="showFormButton"
                                        class="text-sm border-2 bg-fin-blue text-center text-white py-3 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">
                                        Set Budget
                                    </button>

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

                    <!-- Top Spending  -->
                    <div
                        class="col-span-3 bg-white drop-shadow-subs-card py-3 px-6 rounded-md w-full flex flex-col row-span-1">
                        <h1 class="text-lg">Top Spending This Month</h1>
                        <div class="w-[100%] py-2">
                            <hr class="h-[3px] border-0 w-[20%] bg-black">
                        </div>
                        <div class="flex flex-col gap-y-3 py-2">
                            <div class="flex flex-col w-full">
                                <div class="flex flex-row py-2 rounded-md ">
                                    <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                        <img class="w-[25px] h-[25px] text-white p-[3px]"
                                            src="{{ asset('assets/dashboard/Bill.png') }}">
                                    </div>
                                    <div>
                                        <h1 class="font-bold text-lg ml-2">Rp 1.000.000</h1>
                                        <h1 class="text-md ml-2 text-gray-500">Food & Beverage</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col w-full">
                                <div class="flex flex-row py-2 rounded-md ">
                                    <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                        <img class="w-[25px] h-[25px] text-white p-[3px]"
                                            src="{{ asset('assets/dashboard/Bill.png') }}">
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

        <div id="formContainer" class="hidden fixed inset-0 flex items-center justify-center">

            <div class="overlay fixed inset-0 bg-black/[0.5]"></div>

            <div
                class="flex flex-col justify-between items-center bg-darker-white p-8 rounded-md relative h-[50vh] w-[40vw]">

                <h2 class="text-3xl font-bold mb-4 text-center text-fin-blue">Let's set your budget</h2>

                <div class="w-full h-full flex flex-col justify-around">
                    <div>
                        <h1 class="text-sm ">Current set budget</h1>
                        <h1 class="text-3xl">Rp{{$Data['Budget']}}</h1>
                    </div>

                    <form action="{{ route('budget.set') }}" method="POST" class="flex flex-col" id="form-budget">
                        @csrf
                        <label for="newbudget">Set new budget</label>
                        <input type="text" id="newbudget" name="budget" class="border rounded-md px-3 py-2 mb-2"
                            required />
                    </form>
                </div>

                <button type="submit" id="submitButton"
                    class="bg-fin-blue border-2 text-white font-bold py-2 px-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">
                    Submit
                </button>

                <button id="closeFormButton" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

            </div>
        </div>

        <script>
            var Images = document.querySelectorAll('.ImageSlider img');
            var RadioBtns = document.querySelectorAll('.RadioList div');
            var currentIndex = 0;

            function Slide() {
                Images[currentIndex].style.display = 'flex';
                RadioBtns[currentIndex].style.backgroundColor = '#23273C';
                setInterval(next, 1000);
            }

            function next() {
                Images[currentIndex].style.display = 'none';
                RadioBtns[currentIndex].style.backgroundColor = '#F7F7FA';
                currentIndex = (currentIndex + 1) % Images.length;
                Images[currentIndex].style.display = 'flex';
                RadioBtns[currentIndex].style.backgroundColor = '#23273C';
            }

            window.onload = Slide();

            const showFormButton = document.getElementById('showFormButton');
            const formContainer = document.getElementById('formContainer');
            const closeFormButton = document.getElementById('closeFormButton');
            const submitButton = document.getElementById('submitButton')

            showFormButton.addEventListener('click', () => {
                formContainer.classList.remove('hidden');
            });

            closeFormButton.addEventListener('click', () => {
                formContainer.classList.add('hidden');
            });

            formContainer.addEventListener('click', (event) => {
                if (event.target === formContainer) {
                    formContainer.classList.add('hidden');
                }
            });

            submitButton.addEventListener('click', (event) => {
                const form = document.getElementById('form-budget');
                formContainer.classList.add('hidden');
                form.submit();
            });
        </script>

    </body>
@endsection
