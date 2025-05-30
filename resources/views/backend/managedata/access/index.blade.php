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

      @if (session()->has('alert'))
        @include('sweetalert::alert')
      @endif

      <section class="w-full px-4 mt-8 mb-5">
        <div class="max-w-[85rem] mx-auto">
          <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto min-w-full">
              <div class="p-1.5 inline-block xl:max-w-full align-middle leading-none">
                @include('backend.sbreadcrumb.access.index')

                <div class="overflow-hidden app-table-border">
                  <div class="grid app-table-grid">
                    <x-description
                      table-name="Access"
                      :page-data="$roles"
                    />

                    <div class="table-header">
                      <div class="inline-flex items-center gap-x-2">
                        <div class="refresh">
                          <x-refresh
                            :route="route('access')"
                          />
                        </div>

                        <div class="search">
                          <form action="/access">
                            <x-search
                              search="access"
                              placeholder="Search data access"
                            />
                          </form>
                        </div>

                        <div class="backup">
                          <x-backup
                            table-name="access"
                          />
                        </div>
                      </div>
                    </div>
                  </div>

                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                      <tr>
                        <x-th
                          name="no"
                        />
                        <x-th
                          name="id"
                        />
                        <x-th
                          name="sr"
                        />
                        <x-th
                          name="name"
                        />
                        <x-th
                          name="url"
                        />
                        <x-th-action/>
                      </tr>
                    </thead>

                    <tbody class="tbody">
                      @foreach ($roles as $role)
                        <tr>
                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$loop->iteration . '.'"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$role->id"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$role->sr"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <x-td-var-bg
                              :bg="$role->bg"
                              :text="$role->text"
                              :var="$role->name"
                            />
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <x-td-var
                              :var="$role->url"
                            />
                          </td>

                          <td class="size-px whitespace-nowrap">
                            @include(
                              'backend.managedata.access._index_td_action'
                            )
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <div class="grid app-table-footer">
                    @if ($roles->lastPage() > 1)
                      <x-pagination
                        :pagination="$roles"
                      />
                    @endif
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
