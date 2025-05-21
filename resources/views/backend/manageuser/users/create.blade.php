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
          @include('backend.sbreadcrumb.users.create')

          <form action="{{ route('users.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="app-cse-border">
              <div class="gap-8 mx-auto md:flex">
                inputan 1
                inputan 2
              </div>

              <div class="gap-8 mx-auto md:flex">
                inputan 1
                inputan 2
              </div>

              <div class="mt-8">
                <x-button-create-data
                  button-name="Create data"
                />
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
@endsection
