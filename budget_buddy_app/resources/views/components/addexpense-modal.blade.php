    <div id="expensesModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                        <div class="flex items-center justify-center min-h-screen">
                            <div class="relative bg-white w-1/3 rounded shadow-lg">
                            <div class="flex justify-between items-center px-4 py-2 bg-gray-200 rounded-t">
                                <h3 class="text-lg font-medium">Add Expense</h3>
                                <button class="text-gray-500 hover:text-gray-600" onclick="closeModal()">Close</button>
                            </div>
                            <div class="px-4 py-6">
                                 <form method="POST" action="{{ route('expenses.store') }}">
                                    @csrf
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="name">
                                        Name:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                            id="name" name="name" type="text" placeholder="Enter name">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="amount">
                                        Amount:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                            id="amount" name="amount" type="number" placeholder="Enter amount">
                                    </div>
                                    <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="due_date">
                                        Due_date
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                            id="due_date" name="due_date" type="date" placeholder="Enter name">
                                    </div>
                                    <div class="flex items-center justify-between">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                                            type="submit">
                                        Add Income
                                    </button>
                                    <button id="close-modal2" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Close</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>