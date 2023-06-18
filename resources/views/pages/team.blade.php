@extends('template.template')

@section('head')
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
@endsection

@section('body')
    <?php
        $imagePath = "../assets/team/Team.jpg";
    ?>
    <body>
        <div class="w-full h-full flex justify-center items-center relative ">
            <div class="w-full h-screen bg-none" style="background-image: url('<?php echo $imagePath; ?>'); background-repeat: no-repeat; background-size: cover; opacity:40%;">
            </div>
            
            <div class="w-full h-full absolute flex justify-center items-center px-4 sm:px-10 md:px-0">
                <div class=" bg-fin-blue pt-8 pb-16  max-w-[500px] flex flex-col rounded-md shadow-xl">
                    <div class="Slider bg-fin-blue flex flex-col">
                        <div class="Slide hidden flex-col justify-center text-white text-center items-center gap-y-8 px-4 md:px-12">
                            <div class="w-[100%] flex flex-col gap-y-3 justify-center items-center">
                                <h1 class="text-3xl font-castoro">Rifian Fernando</h1>
                                <hr class="h-[2px] border-0 w-[15%] bg-white">
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="flex flex-row justify-center w-full gap-x-5 items-center">
                                <a href="" class="p-1 bg-blue-400 flex items-center rounded-md">
                                    <box-icon type='logo' name='facebook' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-sky-300 flex items-center rounded-md">
                                    <box-icon name='twitter' type='logo' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-gradient-to-r from-purple-600 via-pink-600 to-yellow-600 flex items-center rounded-md">
                                    <box-icon type='logo' name='instagram' color="white" size="sm"></box-icon>
                                </a>
                            </div>
                        </div>
                        <div class="Slide hidden flex-col justify-center text-white text-center items-center gap-y-8 px-4 md:px-12">
                            <div class="w-[100%] flex flex-col gap-y-3 justify-center items-center">
                                <h1 class="text-3xl font-castoro">Dixon Willow</h1>
                                <hr class="h-[2px] border-0 w-[15%] bg-white">
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="flex flex-row justify-center w-full gap-x-5 items-center">
                                <a href="" class="p-1 bg-blue-400 flex items-center rounded-md">
                                    <box-icon type='logo' name='facebook' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-sky-300 flex items-center rounded-md">
                                    <box-icon name='twitter' type='logo' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-gradient-to-r from-purple-600 via-pink-600 to-yellow-600 flex items-center rounded-md">
                                    <box-icon type='logo' name='instagram' color="white" size="sm"></box-icon>
                                </a>
                            </div>
                        </div>
                        <div class="Slide hidden flex-col justify-center text-white text-center items-center gap-y-8 px-4 md:px-12">
                            <div class="w-[100%] flex flex-col gap-y-3 justify-center items-center">
                                <h1 class="text-3xl font-castoro">Anselmus Kevin Purnomo</h1>
                                <hr class="h-[2px] border-0 w-[15%] bg-white">
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="flex flex-row justify-center w-full gap-x-5 items-center">
                                <a href="" class="p-1 bg-blue-400 flex items-center rounded-md">
                                    <box-icon type='logo' name='facebook' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-sky-300 flex items-center rounded-md">
                                    <box-icon name='twitter' type='logo' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-gradient-to-r from-purple-600 via-pink-600 to-yellow-600 flex items-center rounded-md">
                                    <box-icon type='logo' name='instagram' color="white" size="sm"></box-icon>
                                </a>
                            </div>
                        </div>
                        <div class="Slide hidden flex-col justify-center text-white text-center items-center gap-y-8 px-4 md:px-12">
                            <div class="w-[100%] flex flex-col gap-y-3 justify-center items-center">
                                <h1 class="text-3xl font-castoro">William Tumewu</h1>
                                <hr class="h-[2px] border-0 w-[15%] bg-white">
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="flex flex-row justify-center w-full gap-x-5 items-center">
                                <a href="" class="p-1 bg-blue-400 flex items-center rounded-md">
                                    <box-icon type='logo' name='facebook' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-sky-300 flex items-center rounded-md">
                                    <box-icon name='twitter' type='logo' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-gradient-to-r from-purple-600 via-pink-600 to-yellow-600 flex items-center rounded-md">
                                    <box-icon type='logo' name='instagram' color="white" size="sm"></box-icon>
                                </a>
                            </div>
                        </div>
                        <div class="Slide hidden flex-col justify-center text-white text-center items-center gap-y-8 px-4 md:px-12">
                        <div class="w-[100%] flex flex-col gap-y-3 justify-center items-center">
                                <h1 class="text-3xl font-castoro">William Tanjaya</h1>
                                <hr class="h-[2px] border-0 w-[15%] bg-white">
                            </div>
                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="flex flex-row justify-center w-full gap-x-5 items-center">
                                <a href="" class="p-1 bg-blue-400 flex items-center rounded-md">
                                    <box-icon type='logo' name='facebook' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-sky-300 flex items-center rounded-md">
                                    <box-icon name='twitter' type='logo' color="white" size="sm"></box-icon>
                                </a>
                                <a href="" class="p-1 bg-gradient-to-r from-purple-600 via-pink-600 to-yellow-600 flex items-center rounded-md">
                                    <box-icon type='logo' name='instagram' color="white" size="sm"></box-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="RadioList absolute bottom-4 md:bottom-[30%] left-[50%] translate-x-[-50%] tranlate-y-[-50%] flex flex-row gap-x-2">
                        <div class="w-3 h-3 bg-#23273C border-solid border-2 border-white rounded-full"></div>
                        <div class="w-3 h-3 bg-#23273C border-solid border-2 border-white rounded-full"></div>
                        <div class="w-3 h-3 bg-#23273C border-solid border-2 border-white rounded-full"></div>
                        <div class="w-3 h-3 bg-#23273C border-solid border-2 border-white rounded-full"></div>
                        <div class="w-3 h-3 bg-#23273C border-solid border-2 border-white rounded-full"></div>
                    </div>
                </div>
            </div>
            
        </div >
        <script>
            var Divs = document.querySelectorAll('.Slider .Slide');
            var RadioBtns = document.querySelectorAll('.RadioList div');
            var currentIndex = 0;

            function Slide() {
                Divs[currentIndex].style.display = 'flex';
                RadioBtns[currentIndex].style.backgroundColor = '#F7F7FA';
                setInterval(next, 3000);
                console.log(Images.length)
            }

            function next() {
                Divs[currentIndex].style.display = 'none';
                RadioBtns[currentIndex].style.backgroundColor = '#23273C';
                currentIndex = (currentIndex + 1) % Divs.length;
                Divs[currentIndex].style.display = 'flex';
                RadioBtns[currentIndex].style.backgroundColor = '#F7F7FA';
            }

            window.onload = Slide();
        </script>
    </body>
@endsection