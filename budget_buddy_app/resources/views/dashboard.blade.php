<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-rows-6 py-8">
        <div class="min-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white min-h-min h-96 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section> <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-theme-accent text-2xl text-left">
                                    <th>Budget</th>
                                    <th>Expenses</th>
                                    <th>Remaining</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                            <tr class="text-sm">
                            <td><span class="text-theme-accent">PHP</span> {{$totalIncome}}</td>
                            <td><span class="text-theme-accent">PHP</span> {{$totalExpense}}</td>
                            <td><span class="text-theme-accent">PHP</span> {{$netIncome}}</td>
                            </tr>
                           
                            </tbody>
                        </table>
                    </section>
                </div>
                
            </div>
            <section class="h-fit text-theme-accent text-xl grid grid-cols-12 gap-5 sm:rounded-lg my-4">
                    <div class="col-span-4 h-fit bg-gray-800 sm:rounded-lg p-5">
                        <h2 class="text-4xl">Incomes</h2>
                        <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-white text-left">
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($incomes as $income)
                            <tr class="text-sm">
                            <td>{{ $income->name }}</td>
                            <td>PHP {{ $income->amount }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-4 h-fit bg-gray-800 sm:rounded-lg p-5">
                        <h2 class="text-4xl">Expenses</h2>
                        <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-white text-left">
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($expenses as $expense)
                            <tr class="text-sm">
                            <td>{{ $expense->name }}</td>
                            <td>PHP {{ $expense->amount }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-4 h-fit bg-gray-800 sm:rounded-lg p-5">
                        <h2 class="text-4xl">Savings</h2>
                        <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-white text-left">
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($savings as $saving)
                            <tr class="text-sm">
                            <td>{{ $saving->name }}</td>
                            <td>PHP {{ $saving->amount }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </section>
        </div>
    </div>
</x-app-layout>
