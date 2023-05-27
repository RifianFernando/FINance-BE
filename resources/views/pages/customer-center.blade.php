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
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-black">
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
                    <a href="https://outlook.office.com/" class="flex bg-fin-blue rounded-xl text-lg items-center">
                        <img class="w-3 h-3 mx-2" src="{{asset('assets/customer-center/mail.png')}}">
                        <p class="font-castoro text-[15px] text-center text-white">rifian.fernando@binus.ac.id</p>
                    </a>
                    <a href="https://www.skype.com/" class="flex bg-fin-blue rounded-xl text-lg items-center">
                        <img class="w-3 h-3 mx-2" src="{{asset('assets/customer-center/phone.png')}}">
                        <p class="font-castoro text-[15px] text-center text-white">+62 812 3456 7890</p>
                    </a>
                </div>
            </div>

            <div>
                <br>
                <img class="w-full" src="{{asset('assets/customer-center/pic.png')}}">
            </div>
        </div>
    </body>
@endsection
