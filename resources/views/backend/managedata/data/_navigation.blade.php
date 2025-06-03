<div class="w-full mt-12 overflow-x-auto">
  <div class="flex justify-center gap-2 px-4 py-2 mx-auto text-gray-600 sm:border-b-2 min-w-max whitespace-nowrap">
    <a href="{{ route('data') }}"
      class="px-3 py-0.5 font-medium flex items-center justify-center mb-2
      {{ Request::is('data') ? 'bg-blue-200 text-black
      border-gray-400 rounded-xl border' :
      'bg-gray-100 text-slate-700 border border-gray-400 rounded-xl' }}">
      data
    </a>

    <a href="{{ route('data.count') }}"
      class="px-3 py-0.5 font-medium flex items-center justify-center mb-2
      {{ Request::is('data/count') ? 'bg-blue-200 text-black
      border-gray-400 rounded-xl border' :
      'bg-gray-100 text-slate-700 border border-gray-400 rounded-xl' }}">
      count
    </a>

    <a href="{{ route('data.statistic') }}"
      class="px-3 py-0.5 font-medium flex items-center justify-center mb-2
      {{ Request::is('data/statistic') ? 'bg-blue-200 text-black
      border-gray-400 rounded-xl border' :
      'bg-gray-100 text-slate-700 border border-gray-400 rounded-xl' }}">
      statistic
    </a>

    <a href="{{ route('data.visitor') }}"
      class="px-3 py-0.5 font-medium flex items-center justify-center mb-2
      {{ Request::is('data/visitor') ? 'bg-blue-200 text-black
      border-gray-400 rounded-xl border' :
      'bg-gray-100 text-slate-700 border border-gray-400 rounded-xl' }}">
      visitor
    </a>
  </div>
</div>
