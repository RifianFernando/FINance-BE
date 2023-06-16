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

                <div class="flex flex-col w-[300px] h-auto rounded-[10px] bg-white drop-shadow-subs-card px-10 md:px-8 py-6 hover:bg-gray-100 hover:scale-110 duration-500 ease-in-out">
                    <h1 class=" text-subs-brown text-left text-2xl font-bold">BASIC</h1>
                    <h1 class="text-[48px] flex items-end h-1/6 font-bold">Free</h1>
                    <p class="text-sm text-gray-500 mt-2">Free financial plan for all users</p>
                    <a href="#" class="text-xl border-2 bg-fin-blue  text-center text-white py-2 my-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">SIGN UP NOW</a>
                    <p class="text-md text-gray-500 font-bold">Features:</p>
                    <ul class="text-[20px] pt-4 flex flex-col gap-y-4 text-gray-500">
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Transaction Tracking</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Transaction Report</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Ad-free</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Budgeting</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Reminder</p>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col w-[300px] h-auto rounded-[10px] bg-white drop-shadow-subs-card px-10 md:px-8 py-6 hover:bg-gray-100 hover:scale-110 duration-500 ease-in-out">
                    <h1 class=" text-subs-brown text-left text-2xl font-bold">PREMIUM</h1>
                    <h1 class="text-[48px] flex items-end h-1/6 font-bold">$2 <span class="text-sm text-gray-500 ml-2">/ month</span></h1>
                    <p class="text-sm text-gray-500 mt-2">Financial plan with more ease of use</p>
                    <a href="#" class="text-xl border-2 bg-fin-blue  text-center text-white py-2 my-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">SIGN UP NOW</a>
                    <p class="text-md text-gray-500 font-bold">Features:</p>
                    <ul class="text-[20px] pt-4 flex flex-col gap-y-4 text-gray-500">
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Transaction Tracking</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Transaction Report</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Ad-free</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Budgeting</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px]" src="{{ asset('assets/subscription/Close.png') }}" id="MobileIcon">
                            <p class="pl-4">Reminder</p>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col w-[300px] h-auto rounded-[10px] bg-white drop-shadow-subs-card px-10 md:px-8 py-6 hover:bg-gray-100 hover:scale-110 duration-500 ease-in-out">
                    <h1 class=" text-subs-brown text-left text-2xl font-bold">PROFESSIONAL</h1>
                    <h1 class="text-[48px] flex items-end h-1/6 font-bold">$5 <span class="text-sm text-gray-500 ml-2">/ month</span></h1>
                    <p class="text-sm text-gray-500 mt-2">Complete package of financial plan</p>
                    <a href="#" class="text-xl border-2 bg-fin-blue  text-center text-white py-2 my-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">SIGN UP NOW</a>
                    <p class="text-md text-gray-500 font-bold">Features:</p>
                    <ul class="text-[20px] pt-4 flex flex-col gap-y-4 text-gray-500">
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Transaction Tracking</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Transaction Report</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Ad-free</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Budgeting</p>
                        </li>
                        <li class="flex items-center">
                            <img class="w-[25px] h-[25px] bg-gray-200 rounded-md" src="{{ asset('assets/subscription/Check.png') }}" id="MobileIcon">
                            <p class="pl-4">Reminder</p>
                        </li>
                    </ul>
                </div>
                
            <!-- Payment -->
                <div id="formContainer" class="fixed inset-0 flex items-center justify-center">

                    <div class="overlay fixed inset-0 bg-black/[0.5]"></div>

                    <div class="flex flex-col justify-between items-center bg-darker-white rounded-md relative h-[80vh] md:h-[60vh] w-[80vw] xl:w-[40vw] overflow-hidden">

                        <div class="w-full bg-fin-blue py-3 px-8">
                            <h2 class="text-3xl font-bold text-center text-white">Payment Method</h2>
                        </div>
                        
                        <div class="w-full h-full flex flex-col justify-around px-6">
                            <div>
                                <h1 class="text-lg font-bold py-2 ">Payment method</h1>
                                <div class="flex flex-col items-center justify-center drop-shadow-subs-card bg-white w-[40%] sm:w-[30%] md:w-[18%] py-1 px-6 rounded-md border-2 border-gray-400">
                                    <img src="{{ asset('assets/subscription/Credit.png') }}" class="max-w-[45px] h-auto" alt="">
                                    <h1 class="font-bold font-poppins pt-2 text-gray-600">Credit</h1>
                                </div>
                            </div>

                            <form action="{{ route('budget.set') }}" method="POST" class="flex flex-col"
                                id="form-budget">
                                @csrf
                                <label for="newbudget" class="text-lg font-bold py-1">Fill your payment information</label>
                                <div class="flex flex-col md:flex-row  py-2 gap-x-10">
                                    <div class="flex flex-col gap-y-2  w-full">
                                        <label for="newbudget" class="px-2">Card Holder Name</label>
                                        <input type="text" id="newbudget" name="budget" class="border rounded-md px-3 py-2 mb-2 " required />
                                    </div>
                                    <div class="flex flex-col gap-y-2  w-full">
                                        <label for="newbudget" class="px-2">CVV</label>
                                        <input type="text" id="newbudget" name="budget" class="border rounded-md px-3 py-2 mb-2" required />
                                    </div>
                                </div>
                            </form>
                        </div>

                        <button type="submit" id="submitButton"
                            class="bg-fin-blue border-2 text-white font-bold py-2 px-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out mb-4">
                            Submit
                        </button>

                        <button id="closeFormButton" class="absolute top-2 right-2 text-white hover:text-gray-300">
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
