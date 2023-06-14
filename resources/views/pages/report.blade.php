@extends('template.template')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('body')

    <body>
        <<div class="flex flex-col items-center w-full bg-darker-white">
            <div>
                <h1 class="font-castoro text-5xl mt-2">Report</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <div class="w-full flex flex-col justify-center mt-4 p-4">
            <!-- First Row -->
                <div class="grid grid-cols-12 w-full gap-x-2 xl:gap-x-6 gap-y-4 sm:gap-y-2">
                    <!-- Income  -->
                    <div class="grid col-span-6 sm:col-span-3 bg-white drop-shadow-subs-card py-3 px-3 lg:px-6 rounded-md sm:py-1">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full "><img
                                    class="max-w-[20px] max-h-auto" src="{{ asset('assets/dashboard/Income.png') }}"></div>
                            <h1 class="ml-2 text-sm xl:text-md">Income</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">
                            Rp 100.000
                        </h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Income</span></h1>
                    </div>

                    <!-- Expense  -->
                    <div class="grid col-span-6 sm:col-span-3 bg-white drop-shadow-subs-card py-3 px-3 lg:px-6 rounded-md sm:py-1">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full">
                                <img class="max-w-[15px] max-h-auto" src="{{ asset('assets/dashboard/Expense.png') }}"></div>
                            <h1 class="ml-2 text-sm xl:text-md">Expense</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">Rp 100.000</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Expense</span></h1>
                    </div>

                    <!-- Wallet  -->
                    <div class="grid col-span-12 sm:col-span-6 bg-white drop-shadow-subs-card py-2 px-4 lg:px-10 rounded-md">
                        <div class="flex flex-row justify-between text-gray-400 text-sm lg:text-md py-1">
                            <h1>Wallet</h1>
                            <h1>Total Balance</h1>
                        </div>
                        <div class="flex flex-row justify-between text-black font-bold text-sm py-2 font-poppins">
                            <h1 class="flex flex-row items-center text-2xl"><img class="w-[25px] h-[25px] text-white mr-2"
                                    src="{{ asset('assets/dashboard/Wallet.png') }}">
                                Rifian's
                                Wallet
                            </h1>
                            <h1 class="text-2xl font-castoro">Rp 1.000.000</h1>
                        </div>
                        <div class="flex flex-row text-black font-bold text-sm py-4 font-poppins">
                            <a href="{{ route('transaction.view') }}"
                                class="text-sm border-2 bg-fin-blue text-center text-white py-3 px-6 rounded-md hover:border-fin-blue hover:bg-gray-100 hover:text-fin-blue duration-500 ease-in-out ">Add
                                Transaction</a>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="flex flex-row gap-x-10 justify-center">
                    <div class="max-w-[500px] border-gray-500 border-1 border-solid p-4">
                        <canvas id="ExpenseChart"></canvas>
                        <script>
                        // PHP code to generate chart data
                        <?php
                            // Generate sample data
                            $data = [
                            'labels' => ['January', 'February', 'March', 'April', 'May'],
                            'datasets' => [
                                [
                                'label' => 'Sales',
                                'data' => [120, 180, 150, 200, 220],
                                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                                'borderColor' => 'rgba(75, 192, 192, 1)',
                                'borderWidth' => 1
                                ]
                            ]
                            ];
                        ?>

                        // JavaScript code to create the chart
                        var ctx = document.getElementById('ExpenseChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: <?php echo json_encode($data); ?>,
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                            }
                        });
                        </script>
                    </div>
                
                    <div class="max-w-[500px] border-gray-500 border-1 border-solid p-4">
                        <div>
                            <h1></h1>
                        </div>
                        <canvas id="IncomeChart"></canvas>
                        <script>
                        // PHP code to generate chart data
                        <?php
                            // Generate sample data
                            $data = [
                            'labels' => ['January', 'February', 'March', 'April', 'May'],
                            'datasets' => [
                                [
                                'label' => 'Sales',
                                'data' => [120, 180, 150, 200, 220],
                                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                                'borderColor' => 'rgba(75, 192, 192, 1)',
                                'borderWidth' => 1
                                ]
                            ]
                            ];
                        ?>

     
                        var ctx = document.getElementById('IncomeChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: <?php echo json_encode($data); ?>,
                            options: {
                                title: {
                                    display: true,
                                    text: 'Income Report - 1 Year' 
                                },
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                            }
                        });
                        </script>
                    </div>
                </div>

            <!-- Third Row -->
            <div class="flex justify-center items-center flex-row w-full">
                <div class="w-[800px]">
                    <canvas id="TransactionReportChart"></canvas>
                    <script>
                    // PHP code to generate chart data
                    <?php
                        // Generate sample data
                        $data = [
                        'labels' => ['January', 'February', 'March', 'April', 'May'],
                        'datasets' => [
                            [
                            'label' => 'Sales',
                            'data' => [120, 180, 150, 200, 220],
                            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                            'borderColor' => 'rgba(75, 192, 192, 1)',
                            'borderWidth' => 1
                            ]
                        ]
                        ];
                    ?>

                    // JavaScript code to create the chart
                    var ctx = document.getElementById('TransactionReportChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: <?php echo json_encode($data); ?>,
                        options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                        }
                    });
                    </script>
                </div>
            </div>
            
            </div>
    
        
        </div>


    </body>
@endsection
