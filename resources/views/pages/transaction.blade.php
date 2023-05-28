@extends('template.template')

@section('head')
    
@endsection

@section('body')

    <body>
       <div class="w-full h-full bg-darker-white">
            <div class="flex justify-evenly items-center">
                <h1 class="font-castoro text-5xl items-center">Transaction</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <div class="flex flex-row justify-evenly w-full font-castoro">
                <div class="flex flex-col w-10/12 h-[500px] rounded-[10px] bg-white drop-shadow-subs-card">
                    <h1 class="text-5xl text-subs-brown pl-10 py-4">Add Transaction</h1>
                    <hr class="h-[2px] border-0 w-[100%] bg-black">
                                                        
                    <div class="flex flex-col items-center h-full justify-evenly ">
                        <div class="w-[90%] flex flex-col gap-4">

                            <div>
                                <h1 class="text-gray-400">Amount</h1>
                                <input type="text" placeholder="0" id="amountTxt" name="amountTxt" class="w-full border-gray-300 border-0 border-b-2 outline-none" >
                            </div>

                            <div class="flex">
                                <div class="w-1/2 pr-2">
                                    <h1 class="text-gray-400" >Date</h1>
                                    <input type="date" id="dateTxt" name="dateTxt" class="w-full border-gray-300 border-0 border-b-2 outline-none">
                                </div>

                                <div class="w-1/2 pl-2">
                                    <h1 class="text-gray-400" >Category</h1>
                                    <select name="categoryDropdown" id="categoryDropdown" class="w-full border-gray-300 border-0 border-b-2 outline-none">
                                        <option value="" disabled selected>Select a category</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>                                                    
                            </div>
                            
                            <div class="flex">
                                <div class="w-1/2 pr-2">
                                    <h1 class="text-gray-400">Description</h1>
                                    <input type="text" placeholder="Insert transaction description" id="descTxt" name="descTxt" class="w-full border-gray-300 border-0 border-b-2 outline-none">
                                </div>                            
                            </div>
                        </div>

                        <div class="flex justify-end w-[90%]">
                            <div class="flex justify-between w-[30%]">
                                <button class="bg-fin-blue text-white py-1.5 px-7 rounded text-xl">Cancel</button>
                                <button class="bg-fin-blue text-white py-1.5 px-7 rounded text-xl">Add</button>                            
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