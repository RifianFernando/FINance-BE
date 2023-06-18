@extends('template.template')

@section('head')
@endsection

@section('body')

    <body>

        <div class="flex flex-col items-center w-full bg-darker-white px-2 md:px-0">

            <div>
                <h1 class="font-castoro text-5xl mt-14 md:mt-0">Dashboard</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <!-- Container -->
            <div class="flex flex-col py-4 w-full px-1 lg:px-8 gap-y-2 lg:gap-y-5">
                <!-- First Row -->
                <div class="grid grid-cols-10 w-full gap-x-2 xl:gap-x-6 grid-rows-3 sm:grid-rows-1 gap-y-2">
                    <!-- Balance -->
                    <div
                        class="flex flex-row items-center w-full bg-fin-blue rounded-md drop-shadow-subs-card overflow-hidden row-span-1 col-span-10 sm:col-span-6">
                        <div class="px-4 py-6 lg:px-8 lg:py-8 bg-gray-500 rounded-md ">
                            <img src="{{ asset('assets/customer-center/pic.png') }}"
                                class="rounded-full w-[80px] h-[80px] lg:w-[120px] lg:h-[120px]">
                        </div>
                        <div class="flex flex-col justify-between gap-y-3 text-white max-w-[550px] px-4">
                            <h1 class="text-lg xl:text-2xl">Welcome,
                                {{ $Data['FirstName'] }}
                            </h1>
                            @if ($Data['Budget'] < 0)
                                <p class="text-xs lg:text-md xl:text-lg">Your financial state is in <span>Bad Condition</span>,
                                    you have exceeded this month's budget</p>
                            @else
                                <p class="text-xs lg:text-md xl:text-lg">Your financial state is in <span>Good Condition</span>,
                                    keep it up</p>
                            @endif
                        </div>
                    </div>


                    <!-- News Image Slider-->
                    <div class="flex bg-white drop-shadow-subs-card rounded-md overflow-hidden row-span-2 col-span-10 sm:col-span-4 sm:row-span-1">
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
                <div class="grid grid-cols-12 w-full gap-x-2 xl:gap-x-6 gap-y-4 sm:gap-y-2">

                    <!-- Income  -->
                    <div
                        class="grid col-span-6 sm:col-span-3 bg-white drop-shadow-subs-card py-3 px-3 lg:px-6 rounded-md sm:py-1">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full "><img
                                    class="max-w-[20px] max-h-auto" src="{{ asset('assets/dashboard/Income.png') }}"></div>
                            <h1 class="ml-2 text-sm xl:text-md">Income</h1>
                        </div>
                        <h1 class="flex flex-row items-center  text-md lg:text-lg xl:text-2xl font-castoro">
                            Rp {{ number_format($Data['Income'], 2, '.', ',') }}
                        </h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Income</span></h1>
                    </div>

                    <!-- Expense  -->
                    <div
                        class="grid col-span-6 sm:col-span-3 bg-white drop-shadow-subs-card py-3 px-3 lg:px-6 rounded-md sm:py-1">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full">
                                <img class="max-w-[15px] max-h-auto" src="{{ asset('assets/dashboard/Expense.png') }}">
                            </div>
                            <h1 class="ml-2 text-sm xl:text-md">Expense</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-md lg:text-lg xl:text-2xl font-castoro">Rp {{ number_format($Data['Expense'], 2, '.', ',') }}</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Expense</span></h1>
                    </div>

                    <!-- Wallet  -->
                    <div
                        class="grid col-span-12 sm:col-span-6 bg-white drop-shadow-subs-card py-2 px-4 lg:px-10 rounded-md">
                        <div class="flex flex-row justify-between text-gray-400 text-sm lg:text-md py-1">
                            <h1>Wallet</h1>
                            <h1>Total Balance</h1>
                        </div>
                        <div class="flex flex-row justify-between text-black font-bold text-sm py-2 font-poppins">
                            <h1 class="flex flex-row items-center text-xs md:text-sm lg:text-lg xl:text-2xl"><img class="w-[25px] h-[25px] text-white mr-2"
                                    src="{{ asset('assets/dashboard/Wallet.png') }}">
                                {{ $Data['FirstName'] }}'s
                                Wallet
                            </h1>
                            <h1 class="text-2xl font-castoro">Rp {{ number_format($Data['TotalBalance'], 2, '.', ',') }}</h1>
                        </div>
                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins">
                            <a href="{{ route('transaction.view') }}"
                                class="text-sm border-2 bg-fin-blue text-center text-white py-3 px-6 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out ">Add
                                Transaction</a>
                        </div>
                    </div>
                </div>

                <!-- Third Row -->
                <div class="grid grid-cols-10 w-full gap-x-2 xl:gap-x-6 grid-rows-3 md:grid-rows-4 gap-y-2">
                    <!-- Transaction Container -->
                    <div
                        class="flex flex-col items-start bg-white drop-shadow-subs-card py-2 px-2 sm:px-6 md:px-3 xl:px-8 rounded-md w-full row-span-2 row-start-2 col-span-10 md:row-span-4 md:row-start-1 md:col-span-7">
                        <h1 class="text-2xl pt-2">Latest Transaction</h1>
                        <div class="w-[100%] py-2">
                            <hr class="h-[3px] border-0 w-[10%] bg-black">
                        </div>

                        <!-- Jika Transaction Kosong -->
                        @forelse($Data['LatestTransaction'] as $Latest)
                            <!-- Jika Transaction ada-->

                            <div class="flex flex-col w-full gap-y-2 lg:gap-y-2">
                                <div class="grid grid-cols-5 py-3 gap-x-2 border-b-2 border-gray-300">
                                    @php
                                        $date = date_create($Latest->date);
                                        $date = date_format($date, 'd-m-Y');
                                    @endphp
                                    <h1 class="col-span-1 font-bold text-[9px] sm:text-xs xl:text-[16px]">
                                        {{ $date }}
                                    </h1>
                                    <h1 class="col-span-2 text-[10px] sm:text-sm lg:text-md">
                                        {{ $Latest->description }}
                                    </h1>
                                    </h1>
                                    <h1 class="col-span-1 font-bold text-[10px] sm:text-sm lg:text-sm">
                                        {{ $Latest->category }}
                                    </h1>
                                    @if ($Latest->is_expense == true)
                                        <h1
                                            class="col-span-1 font-bold text-[8px] sm:text-xs
                                        lg:text-md xl:text-[14px] text-red-600">
                                            - Rp{{ number_format($Latest->amount, 2, '.', ',') }}
                                        </h1>
                                    @else
                                        <h1
                                            class="col-span-1 font-bold text-[8px] sm:text-xs
                                        lg:text-md xl:text-[14px] text-green-600">
                                            + Rp{{ number_format($Latest->amount, 2, '.', ',') }}
                                        </h1>
                                    @endif
                                </div>
                            </div>
                        @empty

                            <div class="w-full flex flex-col items-center h-full justify-center">
                                <img class=" text-white mr-2" src="{{ asset('assets/dashboard/Empty.png') }}">
                                <h1 class="text-2xl text-gray-400">
                                    No Transaction Yet ! :)
                                </h1>
                            </div>
                        @endforelse

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
                        class=" bg-white drop-shadow-subs-card p-3 xl:p-4 rounded-md w-full flex flex-col row-span-1 row-start-1 col-span-5 md:col-span-3 md:row-start-1 md:row-span-2">
                        <h1 class="text-xs md:text-md lg:text-lg xl:text-xl">This Month's Budget</h1>
                        <div class="w-[100%] py-2">
                            <hr class="h-[3px] border-0 w-[20%] bg-black">
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="flex flex-row">
                                <div class="flex flex-col w-full gap-y-2">
                                    <div class="flex flex-row rounded-md py-2 items-center">
                                        <div class=" bg-fin-blue flex justify-center items-center rounded-full px-1 py-2">
                                            <img class="max-w-[20px] max-h-[30px] md:max-w-[40px] md:max-h-[60px] md:p-1"
                                                src="{{ asset('assets/dashboard/Budget.png') }}">
                                        </div>

                                        @if($Data['Budget'] == 102938.4756)
                                            <div class="ml-2">
                                                <h1 class="font-bold text-xs md:text-md lg:text-lg">You have yet to set your budget</h1>
                                            </div>
                                        @else
                                            <div class="ml-2">
                                                <h1 class="font-bold text-xs md:text-md lg:text-lg">Budget's Left</h1>
                                                @if ($Data['Budget'] < 0)
                                                    <h1 class="text-md lg:text-lg xl:text-xl font-castoro">Rp 0</h1>
                                                @else
                                                    <h1 class="text-md lg:text-lg xl:text-xl font-castoro">Rp {{ number_format($Data['Budget'],2, '.', ',') }}</h1>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <button id="showFormButton"
                                        class="text-xs lg:text-sm border-2
                                        bg-fin-blue text-center text-white py-3
                                        rounded-md hover:border-fin-blue hover:bg-gray-10
                                        hover:text-fin-blue duration-500 ease-in-out">
                                        Set Budget
                                    </button>

                                    @if ($Data['Budget'] == 102938.4756)
                                        <p class="text-xs text-gray-500 py-2">
                                            <Span class="font-bold">Reminder :</Span>
                                                Let's set your budget now
                                        </p>
                                    @elseif ($Data['Budget'] < 0)
                                        <p class="text-xs text-gray-500 py-2">
                                            <Span class="font-bold">Reminder :</Span>
                                                You have exceeded the set budget by
                                                <Span class="sm:text-sm md:text-md font-castoro font-bold">Rp
                                                    {{ number_format(abs($Data['Budget']), 2, '.', ',') }}</Span>
                                        </p>
                                    @else
                                        <p class="text-xs text-gray-500 py-2">
                                            <Span class="font-bold">Reminder :</Span>
                                                Spend no more than
                                                <Span class="sm:text-sm md:text-md font-castoro font-bold">Rp
                                                    {{ number_format($Data['BudgetLeft'], 2, '.', ',') }}</Span>
                                                each day so you can keep on budget for this month
                                        </p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top Spending  -->
                    <div
                        class=" bg-white drop-shadow-subs-card p-3 xl:p-4
                        rounded-md w-full flex flex-col row-span-1 row-start-1
                        col-span-5 md:col-span-3 md:row-start-3 md:row-span-2">
                        <h1 class="text-xs md:text-md lg:text-lg xl:text-xl">Top Spending This Month</h1>
                        <div class="w-[100%] py-2">
                            <hr class="h-[3px] border-0 w-[20%] bg-black">
                        </div>
                        @forelse ($Data['LargestTransaction'] as $item)
                            <div class="flex flex-col gap-y-3 py-2">
                                <div class="flex flex-col w-full">
                                    <div class="flex flex-row py-2 rounded-md items-center">
                                        <div class=" bg-fin-blue justify-center items-center p-3 rounded-full">
                                            <img class="max-w-[25px] max-h-[25px] text-white p-[3px]" alt="Bill"
                                                src="{{ asset('assets/dashboard/Bill.png') }}">
                                        </div>
                                        <div>
                                            <h1 class="text-xs md:text-sm xl:text-lg font-bold ml-2">
                                                Rp {{ number_format($item->total_amount, 2, '.', ',') }}
                                            </h1>
                                            <h1 class="text-xs lg:text-sm ml-2 text-gray-500">{{ $item->category }}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="w-full flex flex-col items-center h-full justify-center">
                                <img class=" text-white mr-2" src="{{ asset('assets/dashboard/Empty.png') }}">
                                <h1 class="text-xs md:text-md lg:text-lg xl:text-2xl text-gray-400">
                                    No Transaction Yet ! :)
                                </h1>
                            </div>
                        @endforelse

                    </div>
                </div>

                <div id="formContainer" class="hidden fixed inset-0 items-center justify-center">

                    <div class="overlay fixed inset-0 bg-black/[0.5]"></div>

                    <div
                        class="flex flex-col justify-between items-center bg-darker-white p-8 rounded-md relative h-[50vh] w-[40vw]">

                        <h2 class="text-3xl font-bold mb-4 text-center text-fin-blue">Let's set your budget</h2>

                        <div class="w-full h-full flex flex-col justify-around">
                            <div>
                                <h1 class="text-sm ">Current set budget</h1>
                                @if($Data['Budget'] == 102938.4756)
                                    <h1 class="text-3xl">No Budget</h1>
                                @else
                                    <h1 class="text-3xl">Rp {{ number_format($Data['SetBudget'], 2, '.', ',') }}</h1>
                                @endif
                            </div>

                            <form action="{{ route('budget.set') }}" method="POST" class="flex flex-col"
                                id="form-budget">
                                @csrf
                                <label for="newbudget">Set new budget</label>
                                <input type="text" id="newbudget" name="budget"
                                    class="border rounded-md px-3 py-2 mb-2" required />
                            </form>
                        </div>

                        <button type="submit" id="submitButton"
                            class="bg-fin-blue border-2 text-white font-bold py-2 px-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">
                            Submit
                        </button>

                        <button id="closeFormButton" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
        </div>
                <script>
                    var Images = document.querySelectorAll('.ImageSlider img');
                    var RadioBtns = document.querySelectorAll('.RadioList div');
                    var currentIndex = 0;

                    function Slide() {
                        Images[currentIndex].style.display = 'flex';
                        RadioBtns[currentIndex].style.backgroundColor = '#23273C';
                        setInterval(next, 3000);
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
                        formContainer.classList.add('flex');
                    });

                    closeFormButton.addEventListener('click', () => {
                        formContainer.classList.add('hidden');
                        formContainer.classList.remove('flex')
                    });

                    formContainer.addEventListener('click', (event) => {
                        if (event.target === formContainer) {
                            formContainer.classList.add('hidden');
                            formContainer.classList.remove('flex');
                        }
                    });

                    submitButton.addEventListener('click', (event) => {
                        const form = document.getElementById('form-budget');
                        formContainer.classList.add('hidden');
                        formContainer.classList.remove('flex')
                        form.submit();
                    });
                </script>
            
    </body>
@endsection
