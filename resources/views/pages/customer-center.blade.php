@extends('template.template')

@section('head')
@endsection

@section('body')

    <body>
        <div>
            <div>
                <br>
                <h1 class="font-castoro text-[64px] text-center text-black">Customer Center</h1>
            </div>

            <div>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            </div>

            <div>
                <h2 class="font-castoro text-[32px] text-center text-black">Have A Problem?</h2>
                <br>
                <p class="font-castoro text-[16px] text-center text-black">Contact our best service,</p>
                <p class="font-castoro text-[16px] text-center text-black">our customer service provide helping yet loving
                    tech support</p>
                <br>
                <p class="font-castoro text-[16px] text-center text-black">Available from 9AM to 5 PM</p><br>
            </div>

            <div class="w-full flex justify-center">
                <div class="grid grid-cols-2 w-2/5 gap-6">
                    <div class="bg-slate-950 rounded-xl text-lg">
                        <p class="font-castoro text-[15px] text-center text-white">rifian.fernando@binus.ac.id</p>
                    </div>
                    <div class="bg-slate-950 rounded-xl text-lg">
                        <p class="font-castoro text-[15px] text-center text-white">+62 812 3456 7890</p>
                    </div>
                </div>
            </div>

            <div>
                <img class="w-full" src="{{ asset('assets/customer-center/Frame2766.png') }}">
            </div>
        </div>
    </body>
@endsection
