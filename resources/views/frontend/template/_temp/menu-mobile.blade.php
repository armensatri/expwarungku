<div class="flow-root mt-10">
  <!-- DEFAULT -->
  <div class="-my-2 divide-y divide-gray-500/10">
    <div class="py-1.5 bg-sky-100 rounded-3xl border border-gray-300">
      <div class="flex flex-col p-2">
        <span class="ms-2.5 mb-4 tracking-wide font-bold text-base
          uppercase text-gray-800 dark:text-neutral-200
          text-center mt-4">
          default
        </span>

        <div class="inline-flex justify-center">
          <img src="/image/default.png"
            alt="logo"
            class="size-32"
          />
        </div>

        <div class="mb-3 text-center grow">
          <div class="p-4 text-base font-medium text-gray-700">
            Lorem ipsum dolor sit amet consectetur adipisicing elit
          </div>

          <a href="">
            <button
              class="text-sm font-medium bg-blue-200 hover:bg-blue-300 text-black px-2.5 py-1 rounded-xl border border-gray-400 dark:text-neutral-200">
              getstarted
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- DEFAULT -->

  <!-- MENU UTAMA -->
  <div class="mt-4 -my-2 divide-y divide-gray-500/10">
    <div class="py-2 space-y-2">
      <div class="block px-3 py-2 text-base font-bold text-gray-800 uppercase">
        menu utama
      </div>
    </div>

    <div class="py-1.5">
      <x-menu-mobile
        route="#"
        image="/image/default.png"
        menu="HOME"
        description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
      />
    </div>
  </div>
  <!-- MENU UTAMA -->

  <!-- EXPLORE LAINNYA -->
  <div class="-my-2 divide-y divide-gray-500/10">
    <div class="py-2 space-y-2">
      <div class="block px-3 py-2 text-base font-bold text-gray-800 uppercase">
        explore lainnya
      </div>
    </div>

    <div class="py-1.5">
      <a href="#"
        class="flex px-5 py-3 rounded-2xl gap-x-4 hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">

        <img src="/image/default.png"
          alt="fe-menu"
          class="size-5"
        />

        <div class="grow">
          <div class="inline-flex items-center text-base font-bold text-gray-800 dark:text-neutral-200">
            Home
          </div>

          <div class="text-[15px] font-medium text-gray-600 dark:text-neutral-500 tracking-tight">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </div>

          <div class="inline-flex items-center px-2 mt-2 text-sm font-medium text-red-800 bg-red-200 border border-gray-400 rounded-lg leading-1">
            upcoming
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- EXPLORE LAINNYA -->
</div>
