<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen w-full">
        <div class="text-center bg-[#21083b] ">
            <p class="p-10 text-2xl font-semibold text-white">ABOUT US</p>
        </div>  
        <div class="mx-auto grid max-w-4xl grid-cols-12 gap-4 p-5 px-6"> 
            <div class="col-span-3 pt-5 text-justify sm:col-span-8 font-semibold"> 
                <p>Welcome to Budget Buddy, the budget tracking app designed to help you manage your finances and achieve your financial goals.</p><br/>
                <p>At Budget-Buddy, we believe that financial management should be simple, straightforward, and accessible to everyone. That's why we've created an app that makes it easy to track your income and expenses, set budgets, and plan for the future.</p><br/>
                <p>Our app is designed with you in mind. Whether you're just starting out on your financial journey or you're an experienced budgeter, Budget-Buddy has everything you need to stay on top of your finances.</p>           
            </div>
            <div class="col-span-12 sm:col-span-4">
                <img class="h-80 ml-6" src="{{ URL('images/ManageMoney-bro.png') }}" alt="">
            </div>
            <div class="col-span-12 pt-10">
                <p class="text-2xl  font-semibold">With <span class="text-purple-700 font-bold">BUDGET BUDDY</span>, you can:</p>
            </div>
        </div>
        <div class="mx-auto pl-48 grid grid-cols-12 gap-2 sm-cols-2">
            <div class="col-span-2 rounded-lg border p-2 h-60 flex flex-col shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
            <img class="h-36" src="{{ URL('images/Spreadsheets-bro.png') }}" alt="">
                <p class="text-sm font-semibold">Track your income and expenses in real-time</p>
            </div> 
            <div class="col-span-2 rounded-lg border p-2 h-60 flex flex-col shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
            <img class="h-36" src="{{ URL('images/Financialdata-bro.png') }}" alt="">
                <p class="text-sm font-semibold">Set personalized budgets for different categories of expenses</p>
            </div> 
            <div class="col-span-2 rounded-lg border p-2 h-60 flex flex-col shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
            <img class="h-36" src="{{ URL('images/PersonalBudget.png') }}" alt="">
                <p class="text-sm font-semibold">Plan for the future with savings goals and debt reduction plans</p>
            </div> 
            <div class="col-span-2 rounded-lg border p-2 h-60 flex flex-col shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
            <img class="h-36" src="{{ URL('images/Bankruptcy-cuate.png') }}" alt="">
                <p class="text-sm font-semibold">Receive alerts when you're approaching or exceeding your budget limits</p>
            </div> 
            <div class="col-span-2 rounded-lg border p-2 h-60 flex flex-col shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
            <img class="h-36" src="{{ URL('images/Finance-cuate.png') }}" alt="">
                <p class="text-sm font-semibold">See your spending patterns and identify areas where you can save money</p>
            </div> 
        </div>            
    </div>
</body>
</html>