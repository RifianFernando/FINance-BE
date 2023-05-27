@extends('template.template')

@section('head')

@endsection

@section('body')

    <body>
        
        <div class="flex flex-col justify-evenly items-center w-full h-[1080px] bg-darker-white">
            
            <div>
                <h1 class="font-castoro text-[64px]">Subscription</h1>
            </div>

            <div class="w-[100%]">
                <hr class="h-[2px] border-0 w-[100%] bg-black">
            </div>

            <div class="flex flex-row justify-evenly items-center w-full font-castoro">

                <div class="flex flex-col items-center w-3/12 h-[680px] rounded-[10px] bg-white drop-shadow-subs-card">
                    <h1 class="text-[52px] text-subs-brown">BASIC</h1>
                    <p class="text-[24px]">Free Financial Management</p>
                    <h1 class="text-[52px]">Free</h1>
                    <h2 class="text-[20px] bg-fin-blue rounded-[10px] w-1/2 text-center text-white">SIGN UP NOW</h2>
                    
                </div>

                <div class="flex flex-col items-center w-3/12 h-[680px] rounded-[10px] bg-white drop-shadow-subs-card">
                    <h1 class="text-[52px] text-subs-brown">AD-FREE</h1>
                    <p class="text-[24px]">No Obstruction</p>
                    <h1 class="text-[52px] flex flex-col justify-center items-center">$5<span class="text-[14px] text-subs-brown">Per Month</span></h1>
                    <h2 class="text-[20px] bg-fin-blue rounded-[10px] w-1/2 text-center text-white">SIGN UP NOW</h2>

                    <ul></ul>
                </div>

                <div class="flex flex-col items-center w-3/12 h-[680px] rounded-[10px] bg-white drop-shadow-subs-card">
                    <h1 class="text-[52px] text-subs-brown">PRO</h1>
                    <p class="text-[24px]">Free Financial Management</p>
                    <h1 class="text-[52px] flex flex-col justify-center items-center">$10<span class="text-[14px] text-subs-brown">Per Month</span></h1>
                    <h2 class="text-[20px] bg-fin-blue rounded-[10px] w-1/2 text-center text-white">SIGN UP NOW</h2>
                </div>

            </div>

        </div>

        <script src="">

        </script>
    </body>
@endsection
