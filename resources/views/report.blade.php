@extends('template.template')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard') }}">
@endsection

@section('body')

    <body>
        <<div class="flex flex-col items-center w-full bg-darker-white">
            <div>
                <h1 class="font-castoro text-5xl mt-2">Report</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <div class="w-full flex justify-center mt-4 p-4">
                <div class="grid grid-cols-2 w-3/5 gap-6">
                <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-7 rounded-md">
                    <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                        <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Income.png') }}"></div>
                            <h1 class="ml-2">Income</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro" >Rp. 100.000</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Income</span></h1>
                    </div>

                    <div class="grid col-span-1 bg-white drop-shadow-subs-card py-1 px-7 rounded-md">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full"><img class="w-[20px] h-[12px]" src="{{ asset('assets/dashboard/Expense.png') }}"></div>
                            <h1 class="ml-2">Expense</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro" >Rp. 100.000</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Expense</span></h1>
                    </div>
                </div>
                </div>

                <div class="grid col-span-2 bg-white drop-shadow-subs-card py-1 px-7 rounded-md">
                    <img src="/assets/report/chart.png" alt="">
                </div>
                <br>
            
            </div>
    
        
        </div>

        <script src="">
            import {
                Chart,
                initTE,
            } 
            from "tw-elements";
            initTE({ Chart });
        </script>
    </body>
@endsection
