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
        @include('backend.sbreadcrumb.data.statistic')

        <div class="app-cse-border">
          <x-data-header
            image="/image/default.png"
            alt="data-statistic"
            title="Data statistic"
            description="Visualisasi data berdasarkan statistic system"
          />

          @include('backend.managedata.data._navigation')

          <div class="max-w-6xl mx-auto">
            <div class="mt-16">
              <div class="content">
                <div class="p-6 mb-8 border border-gray-200 rounded-3xl">
                  <h2 class="mb-4 text-lg font-semibold text-gray-700">
                    Data system
                  </h2>
                  <div id="chart" class="w-full h-64">
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

