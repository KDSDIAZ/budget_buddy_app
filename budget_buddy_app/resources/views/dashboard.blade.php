<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-rows-6 py-8">
        <div class="min-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white min-h-min h-96 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-12 p-6 text-gray-900 dark:text-gray-100">

                    <section class="col-span-5 pb-5"><div id="donutchart">
                        </div>
                    </section>

                    <section class="col-span-7"> 
                        <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-theme-accent text-xl text-center px-5">
                                    <th><img class="h-18 mx-auto" src="{{URL('images/budget.png')}}" alt=""> Budget</th>
                                    <th><img class="h-18 mx-auto" src="{{URL('images/expenses.png')}}" alt="">Expenses</th>
                                    <th><img class="h-18 mx-auto" src="{{URL('images/savings.png')}}" alt="">Remaining</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                            <tr class="text-2xl text-center">
                            <td><span class="text-theme-accent">PHP </span> {{$totalIncome}}</td>
                            <td><span class="text-theme-accent">PHP </span> {{$totalExpense}}</td>
                            <td><span class="text-theme-accent">PHP </span> {{$netIncome}}</td>
                            </tr>
                           
                            </tbody>
                        </table>
                    </section>
                </div>
                
            </div>
            <section class="h-fit text-theme-accent text-xl grid grid-cols-12 gap-5 sm:rounded-lg my-4">
                    <div class="col-span-4 h-fit bg-gray-800 sm:rounded-lg p-5">
                        <!-- Header -->
                        <section class="inline-flex container px-5 pb-6 justify-between">
                            <h2 class="text-4xl">Incomes</h2>
                             <button onclick="showModal('incomeModal', 'close-modal1')" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                             Add +
                            </button>
                        </section>
                        <!-- Header -->
                        <!-- Modal Form -->
                        <x-addincomemodal/>
                        <!-- Modal Form -->
                        <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-white text-left">
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($showincome as $income)
                            <tr class="text-sm">
                            <td>{{ $income->name }} <p class="text-xs text-gray-300">{{ \Carbon\Carbon::parse($income->updated_at)->diffforHumans()}}</p></td>
                            <td>PHP {{ $income->amount }}</td>
                            <td>
                                <form action="{{ route('incomes.destroy', $income->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="p-1 hover:cursor-pointer" type="submit"><img src="{{URL('images/remove.png')}}" width="18px" height="18px" alt=""></button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-4 h-fit bg-gray-800 sm:rounded-lg p-5">
                       
                         <section class="inline-flex container px-5 pb-6 justify-between">
                            <h2 class="text-4xl">Expenses</h2>
                             <button onclick="showModal('expensesModal', 'close-modal2')" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                             Add +
                            </button>
                        </section>

                        <!-- Modal Form -->
                        <x-addexpensemodal/>
                        <!-- Modal Form -->
                        <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-white text-left">
                                    <th>Name</th>
                                    <th>Due</th>
                                    <th>Amount</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($showexpense as $expense)
                            <tr class="text-sm">
                            <td>{{ $expense->name }} <p class="text-xs text-gray-300">{{ \Carbon\Carbon::parse($expense->updated_at)->diffforHumans()}}</p></td>
                            <td>{{ $expense->due_date }}</td>
                            <td>PHP {{ $expense->amount }}</td>
                            <td>
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="p-1 hover:cursor-pointer" type="submit"><img src="{{URL('images/remove.png')}}" width="48px" height="48px" alt=""></button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-4 h-fit bg-gray-800 sm:rounded-lg p-5">
                        
                        <section class="inline-flex container px-5 pb-6 justify-between">
                            <h2 class="text-4xl">Goals</h2>
                            <button onclick="showModal('savingsModal', 'close-modal1')" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                             Add +
                            </button>
                        </section>

                        <!-- Modal Form -->
                        <x-addsavingsmodal/>
                        <!-- Modal Form -->

                        <table class="mx-auto container table-auto border-separate border-spacing-5 text-start">
                            <thead>
                                <tr class="text-white text-left">
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($showsavings as $saving)
                            <tr class="text-sm">
                            <td>{{ $saving->name }} <p class="text-xs text-gray-300">{{ \Carbon\Carbon::parse($saving->updated_at)->diffforHumans()}}</p></td>
                            <td>PHP {{ $saving->amount }}</td>
                            <td>
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="p-1 hover:cursor-pointer" type="submit"><img src="{{URL('images/remove.png')}}" width="18px" height="18px" alt=""></button>
                                </form>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </section>
        </div>
    </div>

    <script>
    // function openModal() {
    // document.getElementById().classList.remove('hidden');
    // }

    //  function closeModal() {
    // document.getElementById().classList.add('hidden');
    // }
function showModal(modalId, closeButtonId) {
// Show the modal
    document.getElementById(modalId).classList.remove('hidden');
// Add event listener to close button
    document.getElementById(closeButtonId).addEventListener('click', function() {
    closeModal(modalId, closeButtonId);
});
// Add event listener to close modal on outside click
    document.getElementById(modalId).addEventListener('click', function(e) {
    if (e.target === this) {
    closeModal(modalId, closeButtonId);
    }
});
}

function closeModal(modalId, closeButtonId) {
  // Hide the modal
  document.getElementById(modalId).classList.add('hidden');

  // Remove event listener from close button
  document.getElementById(closeButtonId).removeEventListener('click', function() {
    closeModal(modalId, closeButtonId);
  });

  // Remove event listener from modal
  document.getElementById(modalId).removeEventListener('click', function(e) {
    if (e.target === this) {
      closeModal(modalId, closeButtonId);
    }
  });
}

    
</script>
</x-app-layout>
