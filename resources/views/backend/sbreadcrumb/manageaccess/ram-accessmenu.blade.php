<ol class="flex items-center gap-[5px] mb-5 ml-2">
  <x-breadcrumb-icon
    image="/backend/img/menu/access.png"
  />

  <x-slash/>

  <x-breadcrumb-name name="access"/>

  <x-slash/>

  <x-breadcrumb-name name="menu"/>

  <x-slash/>

  <x-breadcrumb-name name="role"/>

  <x-slash/>

  <x-breadcrumb-name :name="$role->slug" class="text-blue-600"/>
</ol>
