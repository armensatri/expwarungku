<ol class="flex items-center gap-[5px] mb-5 ml-2">
  <x-breadcrumb-icon
    image="/backend/img/menu/statuses.jpg"
  />

  <x-slash/>

  <x-breadcrumb-name name="statuses"/>

  <x-slash/>

  <x-breadcrumb-name :name="$status->slug" class="text-blue-600"/>
</ol>
