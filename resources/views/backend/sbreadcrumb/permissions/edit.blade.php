<ol class="flex items-center gap-[5px] mb-5 ml-2">
  <x-breadcrumb-icon
    image="/backend/img/menu/permissions.jpg"
  />

  <x-slash/>

  <x-breadcrumb-name name="permissions"/>

  <x-slash/>

  <x-breadcrumb-name :name="$permission->slug"/>

  <x-slash/>

  <x-breadcrumb-name name="edit" class="text-blue-600"/>
</ol>
