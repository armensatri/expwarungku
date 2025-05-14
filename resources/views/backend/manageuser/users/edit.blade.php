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
          @include('backend.sbreadcrumb.users.edit')

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
