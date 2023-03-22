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
<section class="bg-[#21083b] min-w-full">
    <div>  
        <p class="text-gray-300 pb-2 pt-20 text-5xl font-bold text-center">Money Stories</p>
        <p class="text-gray-300 text-center font-semibold px-56 pt-2 pb-10 mb-10">Talking about money is taboo? Not here. Read real stories from real people. You’ll laugh, you’ll cry, and most of all—you’ll feel understood.</p>
    </div>
    <div class="relative isolate overflow-hidden bg-white py-24 px-6 sm:py-32 lg:p-24">    
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.600),white)] opacity-20">            
        </div> 
        <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center "></div>
        <div class="grid grid-cols-4 gap-4">
        <div class="mx-auto max-w-2xl lg:max-w-4xl col-span-2  rounded-xl shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
    <figure>
        <figcaption>
            <img class="mx-auto h-20 w-20 rounded-full" src="https://images.pexels.com/photos/1239288/pexels-photo-1239288.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                <div class="font-semibold text-gray-900">Rachael Cook</div>
                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="text-gray-600">CEO of Lifted</div>         
            </div>
        </figcaption>
        <blockquote class="p-5 text-justify text-sm text-gray-900 font-semibold sm:text-base sm:leading-7">
            <p>“Budget Buddy App has been a lifesaver for me! I used to struggle with keeping track of my finances, but this app has made it so easy. I can easily set a budget for each category and track my spending to make sure I stay within my means. Highly recommend!”</p>
        </blockquote>    
        </figure>
    </div>
    <div class="mx-auto max-w-2xl lg:max-w-4xl col-span-2  rounded-xl shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
        <figure>
        <figcaption>
            <img class="mx-auto h-20 w-20 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                <div class="font-semibold text-gray-900">Stephanie Postles</div>
                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="text-gray-600">CFO of The Mission</div>   
            </div>
        </figcaption>
        <blockquote class="p-5 text-justify text-sm text-gray-900 font-semibold sm:text-base sm:leading-7">
            <p>“I love using Budget Buddy App to keep track of my finances. The app is so easy to use, and I can access my financial information from anywhere. It's helped me save money, pay off debt, and plan for the future. I highly recommend it to anyone looking to improve their financial situation.”</p>
        </blockquote>    
        </figure>
    </div>
    </div>
    <div class="grid grid-cols-3 gap-4 pt-20 ">
    <div class="mx-auto max-w-2xl lg:max-w-4xl col-span-1  rounded-xl shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0 ">
        <figure>
        <figcaption>
            <img class="mx-auto h-20 w-20 rounded-full" src="https://images.pexels.com/photos/1310522/pexels-photo-1310522.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
                <div class="font-semibold text-gray-900">Sarah Sharp</div>
                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">  <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="text-gray-600">Student</div>     
            </div>
        </figcaption>
        <blockquote class="p-5 text-justify text-sm text-gray-900 font-semibold sm:text-base sm:leading-7">
            <p>“Budget Buddy App has helped me take control of my finances in a way I never thought possible. The app makes it easy to set financial goals and track my progress. It's like having a personal finance assistant in my pocket! Thanks, Budget Buddy!”</p>
        </blockquote>    
        </figure>
    </div>
    <div class="mx-auto max-w-2xl lg:max-w-4xl col-span-1 border-gray-200 rounded-xl shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">    
    <figure>
        <figcaption>
            <img class="mx-auto h-20 w-20 rounded-full" src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
            <div class="font-semibold text-gray-900">Autmn Mench</div>
            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                <circle cx="1" cy="1" r="1" />
            </svg>
            <div class="text-gray-600">Professor</div>
            </div>
        </figcaption>
        <blockquote class="p-5 text-justify text-sm font-semibold  text-gray-900 sm:text-base sm:leading-7">
            <p>“I've tried a lot of budgeting apps, but none have been as user-friendly and effective as Budget Buddy. The interface is intuitive, and the app has helped me save a lot of money by tracking my expenses and helping me stay on top of my finances. Thank you, Budget Buddy!”</p>
        </blockquote>    
        </figure>
    </div>
    <div class="mx-auto max-w-2xl lg:max-w-4xl col-span-1 border-gray-200 rounded-xl shadow-lg hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-3 active:translate-y-0">
           <figure >
           <figcaption>
            <img class="mx-auto h-20 w-20 rounded-full" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
            <div class="font-semibold text-gray-900">Allura Smith</div>
            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                <circle cx="1" cy="1" r="1" />
            </svg>
            <div class="text-gray-600">Student</div>
            </div>
        </figcaption>
        <blockquote class="p-5 text-justify text-sm font-semibold  text-gray-900 sm:text-base sm:leading-7">
            <p>“As a busy college student, it can be hard to keep track of my spending. But with Budget Buddy App, I've been able to stay on top of my finances and avoid overspending. The app sends me reminders when bills are due and tracks my expenses automatically. I would definitely recommend this app to other students!”</p>
        </blockquote>
        </figure>
        </div>
    </div>
    </div>
    </section>
</body>
</html>