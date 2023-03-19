<nav class="fixed vw-full inline-flex gap-15 items-center justify-between content-center align-middle w-full mx-0 px-10 h-16 bg-theme-main md:justify-around">
      <section class="inline-flex justify-self-center align-middle items-center text-sm lg:text-base">
        <img src="{{ URL('images/BB_Logo.png') }}" alt="logo" class="h-16 flex justify-start" />
        <label class="text-white font-bold">
          BUDGET <span class="text-theme-accent">BUDDY</span>
        </label>

      </section>
      <x-nav-list />
      <section class="gap-2 hidden text-sm md:flex lg:text-md">
        <x-sign-up_-button />
        <x-login_-button />
      </section>
      <section>
        <svg
            xmlns="<http://www.w3.org/2000/svg>"
            id="menu-button"
            class="bg-white border rounded h-6 w-6 cursor-pointer sm:hidden block"
            fill="purple"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
      </section>
    </nav>