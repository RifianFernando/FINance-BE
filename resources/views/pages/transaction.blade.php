@extends('template.template')

@section('head')

@endsection

@section('body')

    <div class="flex-reverse justify-center items-center m-0 w-max">

        <div class="flex flex-col justify-center items-center">

            <div class="flex flex-col justify-center items-center">
                <h1 class="font-castoro text-[64px]">Transaction</h1>
            </div>

            <div>
                <hr class="h-[2px] border-0 w-[100%] bg-black">
            </div> <br><br><br>

            <div class="flex flex-row justify-evenly w-fullfont-castoro">
                <div class="flex flex-col w-10/12 h-[500px] rounded-[10px] bg-white drop-shadow-xl">
                    <h1 class="text-[52px] text-subs-brown pl-10">Add Expense</h1>
                    <hr class="h-[2px] border-0 w-[100%] bg-black">

                    <div class="pl-10 pt-5">
                        <h1>Amount</h1>
                        <input type="text" id="amountTxt" name="amountTxt" class="w-full">

                        <div class="flex">
                            <div class="w-1/2 pr-2">
                                <h1>Date</h1>
                                <input type="date" id="dateTxt" name="dateTxt" class="w-full">
                            </div>

                            <div class="w-1/2 pl-2">
                                <h1>Category</h1>
                                <select name="categoryDropdown" id="categoryDropdown" class="w-full">
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="w-1/2 pr-2">
                                <h1>Description</h1>
                                <input type="text" id="descTxt" name="descTxt" class="w-full">
                            </div>

                            <div class="w-1/2 pl-2">
                                <button class="bg-fin-blue text-white font-bold py-2 px-4 rounded">Cancel</button>
                                <button class="bg-fin-blue text-white font-bold py-2 px-4 rounded">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>

       <script src="">

       </script>
    </body>
@endsection
