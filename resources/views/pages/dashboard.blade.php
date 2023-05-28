@extends('template.template')

@section('head')

@endsection
    
@section('body')

    <body>

        <div class="flex flex-col items-center w-full h-screen bg-darker-white">
            
            <div>
                <h1 class="font-castoro text-5xl mt-2">Dashboard</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <div class="flex flex-col justify-center items-center py-4 w-full px-10">
                <!-- First Row -->
                <div class="grid grid-cols-5 w-full gap-x-10">
                    <!-- Balance -->
                    <div class="grid col-span-3 bg-white drop-shadow-subs-card py-3 px-10 rounded-md">
                        <div class="flex flex-row justify-between text-gray-400 text-md">
                            <h1>Wallet</h1>
                            <h1>Total Balance</h1>
                        </div>
                        <div class="flex flex-row justify-between text-black font-bold text-sm py-2 font-poppins">
                            <h1 class="flex flex-row items-center text-2xl" ><img class="w-[25px] h-[25px] text-white mr-2" src="{{ asset('assets/dashboard/Wallet.png') }}"> Rifian's Wallet</h1>
                            <h1 class="text-2xl font-castoro">Rp. 100.000.000</h1>
                        </div>
                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins">
                        <a href="#" class="text-sm border-2 bg-fin-blue text-center text-white py-3 px-6 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out ">Add Transaction</a>
                        </div>
                    </div>

                    <!-- News Image Slider-->
                    <div class="flex  bg-white drop-shadow-subs-card rounded-md col-span-2">
                        <div class=" flex flex-row" id="image-slide">
                            <img class="w-full h-full fixed" src="{{asset('assets/customer-center/pic.png')}}">
                            <img class="w-full h-full fixed" src="{{asset('assets/register/illustration-signup.jpg')}}">
                            <img class="w-full h-full fixed" src="{{asset('assets/customer-center/pic.png')}}">
                        </div>
                        <div class="absolute top-0 right-2" id="radio-list">
                            <input type="radio" id="Radio1" checked>
                            <input type="radio" id="Radio2">
                            <input type="radio" id="Radio3">
                        </div>
                    </div>
                </div>
                <!-- Second Row -->
                <div>
                    <button>Test </button>
                </div>
                <!-- Third Row -->
                <div>

                </div>
            </div>
        </div>
        
        <script>

            const Images = getImage.querySelectorAll('#image-slide img');

            const Radios = document.querySelectorAll('#radio-list input[type="radio"]');

            const ImageLength = Images.length;
            const RadioLength = Radios.length;
            let ArrayRadio[]
            let selectedIndex = -1;

            function ImageSlider(){
                Images.forEach(function(image) {
                    image.style.display = 'none';
                }); 

                Radios.forEach(function(radio, index) {
                    if (radio.checked) {
                        selectedIndex = index;
                    }
                });

                Radios.forEach(function(radio) {
                    radio.checked = false;
                });
                
                const specificImage = images[selectedIndex];    
                specificImage.style.display = 'block';
            
            }

            let counter = 1;

            setInterval(function(){
                document.getElementById('Radio' + counter).checked = true;
                counter++;
                if(counter>3){
                    counter = 1;
                }
            },1000);

        </script>

    </body>

@endsection

<!-- <div class="flex flex-row justify-evenly items-center w-full py-4 bg-fin-blue rounded-[10px]">

                    <img src="{{asset('assets/customer-center/pic.png')}}" class="rounded-full w-[150px] h-[150px]">

                    <div class="flex flex-col justify-around gap-y-3">
                        <h1 class="text-2xl">Hello, User</h1>
                        <p class="text-lg">Your financial state is in good condition, keep it up</p>
                    </div>

                </div> -->