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
        <div class="w-full">
          <ol class="flex items-center gap-1.5 mb-5 ml-2">
            <x-breadcrumb-icon
              image="/backend/img/menu/users.jpg"
            />
            <x-slash/>
            <x-breadcrumb-name name="users"/>
            <x-slash/>
            <x-breadcrumb-name name="create"/>
          </ol>

          <form action="">
            <div class="app-cse-border">
              asas
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
@endSection
