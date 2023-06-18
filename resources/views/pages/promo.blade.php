@extends('template.template')

@section('head')
@endsection

@section('body')
    <body>
        <div class="w-full h-full flex flex-col justify-center items-center relative">
            <div>
                <img src="{{ asset('assets/promo/Promo1.png') }}" alt="" class="absolute top-0 right-0  w-[22%]">
            </div>
            <div>
                <img src="{{ asset('assets/promo/LeftDecor.png') }}" alt="" class="absolute top-0 left-0 w-[20%]">
            </div>
            <div class="w-full">
                <div class="w-full flex flex-col items-center justify-between px-4 sm:px-10 gap-y-16 py-20">
                    <div class="font-poppins text-sm lg:text-lg max-w-[700px] text-center text-fin-blue border-2 px-8 border-gray-400 py-10 md:px-16">
                        <h1 class="font-castoro text-7xl">Promo Students</h1>
                        <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                            <hr class="h-[2px] border-0 w-[20%] bg-black">
                        </div>
                        <p class="">
                            Introducing FINEance, the ultimate financial app designed exclusively for students like you! Managing your finances has never been easier or more rewarding. With FINEance, you can take control of your money, make smart financial decisions, and build a solid foundation for your future success. 
                        </p>
                        <div class="py-5">
                            <p class="text-2xl font-bold">Special Discount</p>
                            <h1 class="font-castoro text-7xl">30% <span class="text-xl">/month</span></h1>
                            <a href="/subscription" class="flex flex-row justify-center items-center gap-x-2 text-md md:text-lg p-4 bg-fin-blue text-white mt-10 rounded-md">
                                 View More
                            </a>
                        </div>
                    </div>  
                </div>
            </div>

        </div>
    </body>
@endsection