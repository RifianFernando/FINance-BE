@extends('template.template')

@section('head')

@endsection
    
@section('body')

    <body>
    
        <div class="flex flex-col items-center w-full h-screen bg-darker-white">
            
            <div>
                <h1 class="font-castoro text-5xl">Dashboard</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <div class="flex flex-col items-center w-[70%] font-castoro gap-y-10 text-darker-white">

                <div class="flex flex-row justify-evenly items-center w-full py-4 bg-fin-blue rounded-[10px]">

                    <img src="{{asset('assets/customer-center/pic.png')}}" class="rounded-full w-[150px] h-[150px]">

                    <div class="flex flex-col justify-around gap-y-3">
                        <h1 class="text-2xl">Hello, User</h1>
                        <p class="text-lg">Your financial state is in good condition, keep it up</p>
                    </div>

                </div>
                
                <div class="flex justify-between w-full">

                    <div class="flex flex-col justify-around gap-3 w-[30%] px-6 py-3 bg-fin-blue rounded-[10px]">
                        <h1 class="text-2xl">Balance</h1>
                        <p class="text-xl">Rp 9,000,000.00</p>
                    </div>

                    <div class="flex flex-col justify-around gap-3 w-2/ px-6 py-3 bg-fin-blue rounded-[10px]">
                        <h1 class="text-2xl">You have spent</h1>
                        <p class="text-xl">Rp 3,000,000.00 / 5,000,000.00</p>
                    </div>

                </div>

            </div>

        </div>

    </body>

@endsection