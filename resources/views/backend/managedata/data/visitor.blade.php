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
        @include('backend.sbreadcrumb.data.visitor')

        <div class="app-cse-border">
          <x-data-header
            image="/image/default.png"
            alt="data-visitor"
            title="Data visitor"
            description="Laporan jumlah dan aktivitas pengunjung"
          />

          @include('backend.managedata.data._navigation')

          <div class="max-w-6xl mx-auto">
            <div class="mt-8">
              <h3 class="mb-4 text-lg font-semibold">Visitor</h3>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endSection
