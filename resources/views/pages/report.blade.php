@extends('template.template')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/material-dashboard') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

@section('body')

    <body>
        <div class="flex flex-col items-center w-[1320px]  bg-darker-white">
            <div>
                <h1 class="font-castoro text-5xl mt-2">Report</h1>
            </div>

            <div class="w-[100%] py-4 flex flex-col gap-y-4 justify-center items-center">
                <hr class="h-[2px] border-0 w-[50%] bg-black">
                <hr class="h-[2px] border-0 w-[30%] bg-black">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 mt-4 p-4 gap-y-5 w-full">
            <!-- First Row -->
                <div class="grid grid-cols-6 gap-x-2 xl:gap-x-2 gap-y-4 sm:gap-y-2 col-span-1 ">
                    <!-- Wallet  -->
                    <div class="grid col-span-12 sm:col-span-6 bg-white drop-shadow-subs-card py-2 px-4 lg:px-8 rounded-md">
                        <div class="flex flex-row justify-between text-gray-400 text-sm lg:text-md py-1">
                            <h1>Wallet</h1>
                            <h1>Total Balance</h1>
                        </div>
                        <div class="flex flex-row justify-between items-center text-black font-bold text-sm py-2 font-poppins">
                            <h1 class="flex flex-row items-center justify-center text-2xl"><img class="w-[25px] h-[25px] text-white mr-2"
                                    src="{{ asset('assets/dashboard/Wallet.png') }}">
                                Rifian's
                                Wallet
                            </h1>
                            <h1 class="text-2xl font-castoro">Rp {{ number_format($Data['TotalBalance'], 2, '.', ',') }}
                            </h1>
                        </div>
                    </div>
                    <!-- Income  -->
                    <div
                        class="grid col-span-6 sm:col-span-3 bg-white drop-shadow-subs-card py-3 px-3 lg:px-6 rounded-md sm:py-1">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full "><img
                                    class="max-w-[20px] max-h-auto" src="{{ asset('assets/dashboard/Income.png') }}"></div>
                            <h1 class="ml-2 text-sm xl:text-md">Income</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">
                            Rp {{ number_format($Data['Income'], 2, '.', ',') }}
                        </h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Income</span></h1>
                    </div>

                    <!-- Expense  -->
                    <div
                        class="grid col-span-6 sm:col-span-3 bg-white drop-shadow-subs-card py-3 px-3 lg:px-6 rounded-md sm:py-1">
                        <div class="flex flex-row items-center text-gray-500 text-lg gap-y-2">
                            <div class="py-3 px-2 bg-fin-blue flex justify-center items-center rounded-full">
                                <img class="max-w-[15px] max-h-auto" src="{{ asset('assets/dashboard/Expense.png') }}">
                            </div>
                            <h1 class="ml-2 text-sm xl:text-md">Expense</h1>
                        </div>
                        <h1 class="flex flex-row items-center text-2xl font-castoro">Rp
                            {{ number_format($Data['Expense'], 2, '.', ',') }}</h1>
                        <h1 class="text-gray-400 text-xs">This Month's <span class="font-bold">Expense</span></h1>
                    </div>


                </div>

                <!-- Second Row -->
                <div class=" flex grid- gap-x-2 justify-center col-span-1">
                     <!-- Income Overview Chart -->
                     <div class=" border-gray-500 border-1 border-solid bg-white drop-shadow-subs-card rounded-md">
                     <div class="flex justify-center flex-col w-full">
                            <div class="flex justify-center">
                                <h1 class="font-poppins text-xl">Income Report Overview</h1>
                            </div>
                            <div class="w-[100%] py-4 flex justify-center">
                                <hr class="h-[3px] border-0 w-[50px] bg-black">
                            </div>
                        </div>
                        <div class="flex flex-row py-3">
                            <div class="mt-[-35px]">
                                <canvas id="IncomeChart" class=""></canvas>
                            </div>
                            <!-- <div class="flex flex-col gap-y-4 justify-center mt-[-50px]">
                                        <div class="text-xs">
                                            <h1 class="font-bold">Salary</h1>
                                            <p >Rp 100.000</p>
                                        </div>
                                        <div class="text-xs">
                                            <h1 class="font-bold">Other Income</h1>
                                            <p>Rp 100.000</p>
                                        </div>
                                    </div> -->
                            <script>
                                // PHP code to generate chart data
                                <?php
                                // Generate sample data
                                $data = [
                                    'labels' => ['Label 1', 'Label 2'],
                                    'datasets' => [
                                        [
                                            'data' => [120, 180],
                                            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                                            'backgroundColor' => ['#04263A', '#C1DEF0'],
                                            'borderWidth' => 1,
                                        ],
                                    ],
                                ];
                                ?>

                                // JavaScript code to create the chart
                                var ctx = document.getElementById('IncomeChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'doughnut',
                                    data: <?php echo json_encode($data); ?>,
                                    options: {
                                        cutout: 90,
                                        radius: '70%',
                                        plugins: {
                                            legend: {
                                                position: 'bottom',
                                            }
                                        },
                                        scales: {
                                            x: {
                                                display: false // Show the x-axis
                                            },
                                            y: {
                                                display: false // Hide the y-axis
                                            }
                                        },
                                    }
                                });
                            </script>
                        </div>
                    </div>
                     <!-- Expense Overview Chart -->
                    <div class=" border-gray-500 border-1 border-solid  bg-white drop-shadow-subs-card rounded-md">
                        <div class="flex justify-center flex-col w-full">
                            <div class="flex justify-center">
                                <h1 class="font-poppins text-xl">Expense Report Overview</h1>
                            </div>
                            <div class="w-[100%] py-4 flex justify-center">
                                <hr class="h-[3px] border-0 w-[50px] bg-black">
                            </div>
                        </div>
                        <div class="flex flex-row py-3">
                            <div class="mt-[-35px]">
                                <canvas id="ExpenseChart" class=""></canvas>
                            </div>
                            <!-- <div class="grid grid-cols-2 gap-x-6 py-3">
                                        <div class="text-xs">
                                            <h1 class="font-bold">Food & Beverage</h1>
                                            <p >Rp 100.000</p>
                                        </div>
                                        <div class="text-xs">
                                            <h1 class="font-bold">Transportation</h1>
                                            <p>Rp 100.000</p>
                                        </div>
                                        <div class="text-xs">
                                            <h1 class="font-bold">House Bill</h1>
                                            <p>Rp 100.000</p>
                                        </div>
                                        <div class="text-xs">
                                            <h1 class="font-bold">Medical</h1>
                                            <p>Rp 100.000</p>
                                        </div>
                                        <div class="text-xs">
                                            <h1 class="font-bold">Education</h1>
                                            <p>Rp 100.000</p>
                                        </div>
                                        <div class="text-xs">
                                            <h1 class="font-bold">Gifts & Donation</h1>
                                            <p>Rp 100.000</p>
                                        </div>
                                        <div class="text-xs">
                                            <h1 class="font-bold">Fund Money</h1>
                                            <p>Rp 100.000</p>
                                        </div>
                                    </div> -->
                            <script>
                                // PHP code to generate chart data
                                <?php
                                // Generate sample data
                                $data = [
                                    'labels' => ['Label 1', 'Label 2', 'Label 3'],
                                    'datasets' => [
                                        [
                                            'label' => 'Sales',
                                            'data' => [120, 180, 150],
                                            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                                            'backgroundColor' => ['#04263A', '#C1DEF0', '#B5D1E3'],
                                            'borderWidth' => 1,
                                        ],
                                    ],
                                ];
                                ?>

                                // JavaScript code to create the chart
                                var ctx = document.getElementById('ExpenseChart').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'doughnut',
                                    data: <?php echo json_encode($data); ?>,
                                    options: {
                                        cutout: 90,
                                        radius: '70%',
                                        plugins: {
                                            legend: {
                                                position: 'bottom',
                                            }
                                        },
                                        scales: {
                                            x: {
                                                display: false // Show the x-axis
                                            },
                                            y: {
                                                display: false // Hide the y-axis
                                            }
                                        },
                                    }
                                });
                            </script>
                        </div>
                    </div>

                </div>

                <!-- Third Row -->
                <div class="flex justify-center items-center flex-row w-full col-span-2">
                    <div class="w-[800px] bg-slate-50 drop-shadow-subs-card px-4 py-2">
                        <div class="flex justify-center flex-col w-full">
                            <div class="flex justify-center">
                                <h1 class="font-poppins text-xl">Transaction Report Overview</h1>
                            </div>
                            <div class="w-[100%] py-4 flex justify-center">
                                <hr class="h-[3px] border-0 w-[10%] bg-black">
                            </div>
                        </div>

                        <div>
                            <canvas id="TransactionReportChart"></canvas>

                            <script>
                                // PHP code to generate chart data
                                <?php
                                // Generate sample data
                                $data = [
                                    'labels' => ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                                    'datasets' => [
                                        [
                                            'label' => 'Sales',
                                            'data' => [120, 180, 150, 200, 220],
                                            'backgroundColor' => '#316787',
                                            'borderColor' => '#C0E2F6',
                                            'borderWidth' => 1,
                                        ],
                                    ],
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
                                        },
                                        plugins: {
                                            legend: {
                                                position: 'bottom'
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </body>
@endsection
