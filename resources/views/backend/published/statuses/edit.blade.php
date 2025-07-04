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
          @include('backend.sbreadcrumb.statuses.edit')

          <form action="{{ route('statuses.update', $status->url) }}"
            method="POST"
            enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="app-cse-border">
              <div class="gap-8 mx-auto md:flex">
                <x-input
                  label-for="name"
                  label-name="Status..name"
                  type="text"
                  id="name"
                  name="name"
                  value-old="name"
                  :value-default="$status->name"
                  error="name"
                  placeholder="Masukkan nama status"
                />

                <x-input
                  label-for="slug"
                  label-name="Status..slug"
                  type="text"
                  id="slug"
                  name="slug"
                  value-old="slug"
                  :value-default="$status->slug"
                  error="slug"
                  placeholder="Masukkan slug status"
                />
              </div>

              <div class="gap-8 mx-auto md:flex">
                <x-input
                  label-for="ss"
                  label-name="Status..ss"
                  type="text"
                  id="ss"
                  name="ss"
                  value-old="ss"
                  :value-default="$status->ss"
                  error="ss"
                  placeholder="Masukkan sorting status"
                />

                <x-input
                  label-for="bg"
                  label-name="Status..bg"
                  type="text"
                  id="bg"
                  name="bg"
                  value-old="bg"
                  :value-default="$status->bg"
                  error="bg"
                  placeholder="Masukkan background status, ex : bg-red-200"
                />
              </div>

              <div class="gap-8 mx-auto md:flex">
                <x-input
                  label-for="text"
                  label-name="Status..text"
                  type="text"
                  id="text"
                  name="text"
                  value-old="text"
                  :value-default="$status->text"
                  error="text"
                  placeholder="Masukkan color text status, ex : text-red-200"
                />

                <x-input-textarea
                  label-for="description"
                  label-name="Status..description"
                  id="description"
                  name="description"
                  value-old="description"
                  :value-default="$status->description"
                  error="description"
                  placeholder="Masukkan description status"
                />
              </div>

              <div class="mt-8">
                <x-button-edit-data
                  button-name="Update data"
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
      fetch("/statuses/slug?name=" + inputname.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
    });
  </script>
@endsection
