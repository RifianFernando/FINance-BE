@extends('template.template')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard') }}">
@endsection

@section('body')

    <body>
        <div class="w-full h-full bg-darker-white">
            <div class="flex justify-evenly items-center mb-4 mt-4">
                <h1 class="font-castoro text-5xl items-center">Report</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[100%] bg-black">
            </div>

            <div class="flex flex-row justify-evenly w-full font-castoro">
            </div>

        </div>

        <script src=""></script>
    </body>
@endsection
