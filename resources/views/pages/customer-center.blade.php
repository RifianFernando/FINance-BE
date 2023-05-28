@extends('template.template')

@section('head')
@endsection

@section('body')

    <body>
        <div class="w-full">
            <div class="w-full text-white">
                <div class="relative ">
                    <img class="w-full max-h-[150px]" src="{{asset('assets/customer-center/pic.png')}}">
                </div>
                
                <div class="flex items-center justify-center absolute top-4 md:left-[45%] sm:left-[25%] left-[13%]">
                    <h1 class="font-castoro text-[58px] w-full">Customer Center</h1>
                </div>
            </div>
                
                <div class="w-full flex justify-center flex-col ">
                    <div class="w-[100%] py-4 flex flex-col justify-center items-center">
                        <h2 class="font-castoro text-[24px] text-left text">Have A Problem?</h2>
                    </div>

                    <p class="font-castoro text-center text-5xl font-bold">Contact Service</p>
                    <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                        <hr class="h-[2px] border-0 w-[10%] bg-black">
                    </div>

                    <p class="font-castoro text-[18px] text-center">Available from 9AM to 5 PM</p>
                    <p class="font-castoro text-[22px] text-center font-bold">"Our customer service provide helping yet loving tech support"</p>
                </div>

                <div class="w-full flex justify-center mt-4 bg-gray-300 p-4">
                    <div class="grid grid-cols-3 w-5/5 gap-6">
                        <a href="https://www.skype.com/" class="flex rounded-xl text-lg flex-col items-center bg-white drop-shadow-subs-card py-8 px-10 hover:bg-gray-200 duration-300 md:px-3">
                            <img class="w-[48px] h-[48px] " src="{{asset('assets/customer-center/Call.png')}}">
                            <p class="font-poppins text-[20px] text-center font-bold pt-4 ">PHONE</p>
                            <hr class="h-[1px] border-0 w-[30%] bg-black mt-4">
                            <p class="font-castoro text-center mt-4 lg:text-[18px]">+62 812 3456 7890</p>
                        </a>
                        <a href="https://www.reddit.com/" class="flex rounded-xl text-lg flex-col items-center bg-white drop-shadow-subs-card py-8 px-10 hover:bg-gray-200 duration-300 md:px-3">
                            <img class="w-[50px] h-[50px] mx-2" src="{{asset('assets/customer-center/FAQ.png')}}">
                            <p class="font-poppins text-[20px] text-center font-bold pt-4">FAQs</p>
                            <hr class="h-[1px] border-0 w-[30%] bg-black mt-4">
                            <h2 class="text-xl border-2 px-3 bg-fin-blue  text-center text-white py-2 my-4 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out">Learn More</h2>
                        </a>
                        <a href="https://outlook.office.com/" class="flex rounded-xl text-lg flex-col items-center bg-white drop-shadow-subs-card py-8 px-10 hover:bg-gray-200 duration-300 md:px-3">
                            <img class="w-[55px] h-[48px] mx-2" src="{{asset('assets/customer-center/mail.png')}}">
                            <p class="font-poppins text-[20px] text-center font-bold pt-4">EMAIL</p>
                            <hr class="h-[1px] border-0 w-[30%] bg-black mt-4">
                            <p class="font-castoro text-center mt-4 lg:text-[18px]">rifian.fernando@binus.ac.id</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
