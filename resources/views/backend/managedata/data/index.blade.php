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
        @include('backend.sbreadcrumb.managedata.data')

        <div class="app-cse-border">
          <x-md-header
            img="/image/default.png"
            alt="data"
            title="Data count"
            description="Jumlah data dalam system"
          />

          <div class="w-full mt-12 border-b"></div>

          <div class="max-w-6xl mx-auto">
            <div class="mt-16">
              <div class="content">
                <div class="max-w-screen-xl px-4 mx-auto text-center">
                  <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 xl:grid-cols-3">
                    <x-card-count
                      hover="users"
                      :route="route('users.index')"
                      img="/backend/img/menu/users.jpg"
                      alt="users"
                      data-name="Data users"
                      :data-count="$users"
                    />

                    <x-card-count
                      hover="roles"
                      :route="route('roles.index')"
                      img="/backend/img/menu/roles.jpg"
                      alt="roles"
                      data-name="Data roles"
                      :data-count="$roles"
                    />

                    <x-card-count
                      hover="permissions"
                      :route="route('permissions.index')"
                      img="/backend/img/menu/permissions.jpg"
                      alt="permissions"
                      data-name="Data permissions"
                      :data-count="$permissions"
                    />

                    <x-card-count
                      hover="menus"
                      :route="route('menus.index')"
                      img="/backend/img/menu/menus.jpg"
                      alt="menus"
                      data-name="Data menus"
                      :data-count="$menus"
                    />

                    <x-card-count
                      hover="submenus"
                      :route="route('submenus.index')"
                      img="/backend/img/menu/submenus.jpg"
                      alt="submenus"
                      data-name="Data submenus"
                      :data-count="$submenus"
                    />

                    <x-card-count
                      hover="statuses"
                      :route="route('statuses.index')"
                      img="/backend/img/menu/statuses.jpg"
                      alt="statuses"
                      data-name="Data statuses"
                      :data-count="$statuses"
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
