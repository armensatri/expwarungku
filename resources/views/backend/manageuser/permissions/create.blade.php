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
          @include('backend.sbreadcrumb.permissions.create')

          <form action="{{ route('permissions.store') }}"
            method="POST">
            @csrf

            <div class="app-cse-border">
              <div class="gap-8 mx-auto md:flex">
                <x-input
                  label-for="name"
                  label-name="Permission..name"
                  type="text"
                  id="name"
                  name="name"
                  value-old="name"
                  value-default=""
                  error="name"
                  placeholder="Masukkan nama permission"
                />

                <x-input
                  label-for="slug"
                  label-name="Permission..slug"
                  type="text"
                  id="slug"
                  name="slug"
                  value-old="slug"
                  value-default=""
                  error="slug"
                  placeholder="Masukkan slug permission"
                />
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

  <script>
    const inputname = document.querySelector("#name");
    const slug = document.querySelector("#slug");

    inputname.addEventListener("change", function () {
      fetch("/permissions/slug?name=" + inputname.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
    });
  </script>
@endsection
