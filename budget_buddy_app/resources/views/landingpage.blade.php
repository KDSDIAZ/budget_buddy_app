@extends('layouts.main')
@section('content')
    <section class="grid grid-rows-1 md:grid-cols-12 px-32 pt-56 bg-gray-400 min-h-screen">
        <div class="col-span-4 md:col-span-6 md:p-16"><img class="w-96" src="{{ URL('images/MoneyStress.png') }}" alt=""></div>
        <div class="col-span-4 md:col-span-6 pt-28">
            <p class="font-bold text-4xl">Say <span class="text-white text-5xl font-extrabold">GOODBYE</span> to <span class="text-violet-900">FINANCIAL STRESS</span> and <span class="text-white text-5xl font-extrabold">HELLO</span> to <span class="text-violet-900">FINANCIAL FREEDOM</span> </p>
            <p class="pt-10 text-xl font-bold"> Install <span class="text-violet-900 font-extrabold">BUDGET-BUDDY</span> and get your finances back on track today.</p>

        </div>
    </section>
       
@endsection