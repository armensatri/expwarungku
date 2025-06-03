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
        @include('backend.sbreadcrumb.data.index')

        <div class="app-cse-border">
          <x-data-header
            image="/image/default.png"
            alt="data-system"
            title="Data system"
            description="Pusat informasi monitoring data system"
          />

          @include('backend.managedata.data._navigation')

          <div class="max-w-6xl mx-auto">
            <div class="mt-16">
              <div class="text-gray-600 content">
                <div class="max-w-2xl mx-auto text-center">
                  pusat informasi dan monitoring terpadu untuk sistem data. menyediakan akses cepat dan real-time terhadap data penting, mempermudah pemantauan, analisis, serta pengambilan keputusan berbasis data secara efisien dan terintegrasi.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endSection
