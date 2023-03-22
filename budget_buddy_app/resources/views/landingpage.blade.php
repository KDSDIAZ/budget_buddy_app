@extends('layouts.main')
@section('content')
    <section class="grid grid-rows-1 md:grid-cols-12 px-32 pt-56 bg-gray-400 min-h-screen">
        <div class="col-span-4 md:col-span-6 md:p-16"><img class="w-96" src="{{ URL('images/MoneyStress.png') }}" alt=""></div>
        <div class="col-span-4 md:col-span-6 pt-20">
            <p class="font-bold text-4xl">Say <span class="text-white text-5xl font-extrabold">GOODBYE</span> to <span class="text-violet-900">FINANCIAL STRESS</span> and <span class="text-white text-5xl font-extrabold">HELLO</span> to <span class="text-violet-900">FINANCIAL FREEDOM</span> </p>
            <p class="pt-10 text-xl font-bold"> Get 30 days FREE ACCESS and get your finances back on track today.</p>
            <a href="dashboard">
            <button class="btn group flex items-center bg-transparent pt-2 text-xl font-extrabold tracking-widest text-white">
                <span class="relative pr-4 pb-1 text-wihte after:transition-transform after:duration-500 after:ease-out after:absolute after:bottom-0 after:left-0 after:block after:h-[2px] after:w-full after:origin-bottom-right after:scale-x-0 after:bg-violet-900 after:content-[''] after:group-hover:origin-bottom-left after:group-hover:scale-x-100">Get Started</span></a>
                <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal" class="-translate-x-2 fill-slate-700 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:scale-x-105 group-hover:fill-white">
                <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
                </svg>
  </button>


        </div>
    </section>
       
@endsection