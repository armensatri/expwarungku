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
        @include('backend.sbreadcrumb.data.count')

        <div class="app-cse-border">
          <x-data-header
            image="/image/default.png"
            alt="data-count"
            title="Data count"
            description="Jumlah data dalam system"
          />

          @include('backend.managedata.data._navigation')

          <div class="max-w-6xl mx-auto">
            <div class="mt-16">
              <div class="content">
                <div class="max-w-screen-xl px-4 mx-auto text-center">
                  <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 xl:grid-cols-3">
                    <x-count-card
                      hover="users"
                      :route="route('users.index')"
                      image="/backend/img/menu/users.jpg"
                      alt="data-users"
                      data-name="Data users"
                      :data-count="$users"
                    />

                    <x-count-card
                      hover="roles"
                      :route="route('roles.index')"
                      image="/backend/img/menu/roles.jpg"
                      alt="data-roles"
                      data-name="Data roles"
                      :data-count="$roles"
                    />

                    <x-count-card
                      hover="permissions"
                      :route="route('permissions.index')"
                      image="/backend/img/menu/permissions.jpg"
                      alt="data-permissions"
                      data-name="Data permissions"
                      :data-count="$permissions"
                    />

                    <x-count-card
                      hover="menus"
                      :route="route('menus.index')"
                      image="/backend/img/menu/menus.jpg"
                      alt="data-menus"
                      data-name="Data menus"
                      :data-count="$menus"
                    />

                    <x-count-card
                      hover="submenus"
                      :route="route('submenus.index')"
                      image="/backend/img/menu/submenus.jpg"
                      alt="data-submenus"
                      data-name="Data submenus"
                      :data-count="$submenus"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endSection
