@extends('backend.blocked.main')

@section('blocked')
  <div class="max-w-screen-sm mx-auto text-center">
    <div class="flex justify-center">
      <img src="/backend/img/blocked/blocked.png"
        alt="blocked"
        class="w-[200px] h-[200px]"
      />
    </div>

    <div class="mb-4 text-4xl font-extrabold tracking-wide text-red-700 uppercase lg:text-5xl">
      Access blocked
    </div>

    <p class="mb-4 text-lg font-medium tracking-wide text-gray-600 uppercase">
      tidak ada akses ke submenu ini!
    </p>

    <a href="{{ \App\Helpers\Redirects::Dashboard() }}">
      <button type="button"
        class="inline-flex items-center px-3.5 py-2 text-sm font-medium tracking-wider text-white bg-blue-600 border border-transparent rounded-xl gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
        back to dashboard
      </button>
    </a>
  </div>
@endsection
