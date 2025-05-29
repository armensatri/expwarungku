@extends('backend.template.main')

@section('content-backend')
  <div class="content">
    <div class="p-4 mx-auto">
      <section class="w-full px-4 mb-2">
        <div class="app-content">
          <div class="app-content-title">
            {{ $title }}
          </div>
        </div>
      </section>

      <section class="w-full px-4 mt-8 mb-5">
        <div class="flex flex-wrap gap-3 app-cse-border">
          <!-- Panel Utama Kanan -->
  <div class="flex flex-col justify-between flex-1 p-8 bg-white shadow rounded-xl ">
    <div class="flex items-center mb-4">
      <div class="flex mr-4 -space-x-3">
        <img class="w-10 h-10 border-2 border-white rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full" src="https://randomuser.me/api/portraits/men/54.jpg" alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full" src="https://randomuser.me/api/portraits/women/65.jpg" alt="">
        <div class="flex items-center justify-center w-10 h-10 font-bold text-white bg-green-500 border-2 border-white rounded-full">S</div>
      </div>
      <div>
        <div class="text-lg font-semibold">Connect Today &amp; Join the <a href="#" class="text-blue-500 underline">KeenThemes Network</a></div>
        <div class="mt-2 text-gray-600">Enhance your projects with premium themes and templates. Join the KeenThemes community today for top-quality designs and resources.</div>
      </div>
    </div>
    <div class="flex justify-end">
      <a href="#" class="font-medium text-blue-500 underline">Get Started</a>
    </div>
  </div>
          <!-- Kartu Statistik kanan -->
          <div class="flex flex-col gap-4">
            <div class="flex flex-col items-start w-56 p-6 bg-white shadow rounded-xl">
              <div class="p-2 mb-4 bg-blue-100 rounded">
                <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="w-6 h-6">
              </div>
              <div class="text-2xl font-bold">9.3k</div>
              <div class="text-gray-500">Amazing mates</div>
            </div>
            <div class="flex flex-col items-start w-56 p-6 bg-white shadow rounded-xl">
              <div class="p-2 mb-4 bg-pink-100 rounded">
                <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="Instagram" class="w-6 h-6">
              </div>
              <div class="text-2xl font-bold">608</div>
              <div class="text-gray-500">New subscribers</div>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="flex flex-col items-start w-56 p-6 bg-white shadow rounded-xl">
              <div class="p-2 mb-4 bg-red-100 rounded">
                <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="w-6 h-6">
              </div>
              <div class="text-2xl font-bold">24k</div>
              <div class="text-gray-500">Lessons Views</div>
            </div>
            <div class="flex flex-col items-start w-56 p-6 bg-white shadow rounded-xl">
              <div class="p-2 mb-4 bg-red-100 rounded">
                <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="w-6 h-6">
              </div>
              <div class="text-2xl font-bold">24k</div>
              <div class="text-gray-500">Lessons Views</div>
            </div>
            <div class="flex flex-col items-start w-56 p-6 bg-white shadow rounded-xl">
              <div class="p-2 mb-4 bg-red-100 rounded">
                <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="w-6 h-6">
              </div>
              <div class="text-2xl font-bold">24k</div>
              <div class="text-gray-500">Lessons Views</div>
            </div>
            <div class="flex flex-col items-start w-56 p-6 bg-white shadow rounded-xl">
              <div class="p-2 mb-4 bg-black rounded">
                <img src="https://cdn-icons-png.flaticon.com/512/3046/3046122.png" alt="TikTok" class="w-6 h-6">
              </div>
              <div class="text-2xl font-bold">2.5k</div>
              <div class="text-gray-500">Stream audience</div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endSection
