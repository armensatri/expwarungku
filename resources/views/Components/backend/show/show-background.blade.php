<div class="grid gap-4 pb-4 md:grid-cols-12 md:gap-6">
  <div class="md:col-span-3">
    <div class="text-base tracking-wide text-gray-800">
      {{ $name }}
    </div>
  </div>

  <div class="md:col-span-9">
    <div class="inline-block {{ $text }} {{ $bg }} px-2 py-0.5 rounded-full text-sm tracking-wide border border-gray-400">
      {{ $var }}
    </div>
  </div>
</div>
