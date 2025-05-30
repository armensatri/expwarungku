<div class="hidden lg:flex lg:gap-x-4">
  <a href="{{ route('home') }}"
    class="tracking-wide justify-center px-3.5 py-[3px] text-base font-medium leading-6 text-black border border-gray-400
    rounded-[13px] bg-blue-200 hover:bg-blue-300 cursor-pointer">
    Home
  </a>

  <div>
    <div class="hs-dropdown [--strategy:static]
      md:[--strategy:absolute] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">

      <button type="button"
        id="hs-header-base-mega-menu-fullwidth"
        aria-haspopup="menu"
        aria-expanded="false"
        aria-label="Mega Menu"
        class="flex items-center w-auto p-2 tracking-wide justify-center
        px-3.5 py-[3px] text-lg font-medium leading-6 text-black border border-gray-400 rounded-[13px] bg-blue-200 cursor-pointer hs-dropdown-toggle hover:bg-gradient-to-r hover:from-red-200 hover:to-green-200">
        Menu
        <i class="ml-1 text-base bi bi-arrow-down-circle"></i>
      </button>

      <div role="menu"
        aria-orientation="vertical"   aria-labelledby="hs-header-base-mega-menu-fullwidth"
        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full min-w-60 hidden z-10 top-full start-0 before:absolute before:-top-5 before:start-0 before:w-full before:h-5" >

        <div class="bg-white md:mx-6 lg:mx-8 md:rounded-3xl">
          <div class="gap-4 py-1 md:p-4 md:grid md:grid-cols-2 lg:grid-cols-3">
            <!-- DEFAULT -->
            <div class="bg-sky-100 rounded-2xl">
              <div class="flex flex-col p-2">
                <x-explore-coding
                  header="default"
                  logo="/image/default.png"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
                  route="#"
                />
              </div>
            </div>
            <!-- DEFAULT -->

            <!-- MENU UTAMA -->
            <div class="bg-sky-100 rounded-l-2xl">
              <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                <x-menu-web-header
                  name="menu utama"
                />

                <x-menu-utama
                  route="#"
                  image="/image/default.png"
                  menu="HOME"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit"
                />
              </div>
            </div>
            <!-- MENU UTAMA -->

            <!-- EPLORE LAINNYA -->
            <div class="bg-sky-100 rounded-l-2xl">
              <div class="flex flex-col p-2 h-[334px] overflow-y-scroll">
                <x-menu-web-header
                  name="explore lainnya"
                />

                <x-explore-lainnya
                  route="/upcoming"
                  image="/image/default.png"
                  menu="Home"
                  bg="bg-red-200"
                  text="text-red-800"
                  status="upcoming"
                  description="Lorem ipsum dolor sit amet consectetur adipisicing elit."
                />
              </div>
            </div>
            <!-- EPLORE LAINNYA -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href=""
    class="tracking-wide justify-center px-3.5 py-[3px] text-base font-medium leading-6 text-black border border-gray-400
    rounded-[13px] bg-blue-200 hover:bg-blue-300 cursor-pointer">
    About
  </a>
</div>
