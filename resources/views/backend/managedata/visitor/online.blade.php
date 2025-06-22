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
        @include('backend.sbreadcrumb.managedata.visitor-online')

        <div class="app-cse-border">
          <x-md-header
            img="/image/default.png"
            alt="visitor"
            title="Data visitor"
            description="Aktivitas user online or offline"
          />

          <div class="w-full mt-12 overflow-x-auto">
            <div class="flex justify-center gap-2 px-4 py-2 mx-auto text-gray-600 sm:border-b-2 min-w-max whitespace-nowrap">
              <x-md-navigation
                :route="route('visitor')"
                active="visitor"
                menu-name="visitor"
              />
              <x-md-navigation
                :route="route('visitor.online')"
                active="visitor/online"
                menu-name="online"
              />
              <x-md-navigation
                :route="route('visitor.offline')"
                active="visitor/offline"
                menu-name="offline"
              />
              <x-md-navigation
                route=""
                active="visitor/banned"
                menu-name="banned"
              />
              <x-md-navigation
                route=""
                active="visitor/device"
                menu-name="device"
              />
              <x-md-navigation
                route=""
                active="visitor/datalog"
                menu-name="data log"
              />
            </div>
          </div>

          <div class="w-full">
            <div class="mt-16">
              <div class="content">
                <section class="w-full px-4 mt-8 mb-5 xl:flex xl:justify-center">
                  <div class="max-w-[85rem] mx-auto">
                    <div class="flex flex-col">
                      <div class="-m-1.5 overflow-x-auto min-w-full">
                        <div class="p-1.5 inline-block xl:max-w-full align-middle leading-none">
                          <div class="overflow-hidden app-table-border">
                            <div class="grid app-table-grid">
                              <x-description
                                table-name="Visitor"
                                :page-data="$users"
                              />

                              <div class="table-header">
                                <div class="inline-flex items-center gap-x-2">
                                  <div class="refresh">
                                    <x-refresh
                                      :route="route('visitor.online')"
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
                                    name="name"
                                  />
                                  <x-th
                                    name="role"
                                  />
                                  <x-th
                                    name="status"
                                  />
                                  <x-th
                                    name="last seen"
                                  />
                                </tr>
                              </thead>

                              <tbody class="tbody">
                                @foreach ($users as $user)
                                  <tr>
                                    <td class="h-px whitespace-nowrap">
                                      <div class="center">
                                        <x-td-var
                                          :var="$loop->iteration . '.'"
                                        />
                                      </div>
                                    </td>

                                    <td class="h-px whitespace-nowrap">
                                      <x-td-var
                                        :var="$user->id"
                                      />
                                    </td>

                                    <td class="h-px whitespace-nowrap">
                                      <x-td-var
                                        :var="$user->name"
                                      />
                                    </td>

                                    <td class="h-px whitespace-nowrap">
                                      <x-td-var-bg
                                        :bg="$user->role->bg"
                                        :text="$user->role->text"
                                        :var="$user->role->name"
                                      />
                                    </td>

                                    <td class="h-px whitespace-nowrap">
                                      <x-td-var-bg
                                        :bg="$user->status()['bg']"
                                        :text="$user->status()['text']"
                                        :var="$user->status()['status']"
                                      />
                                    </td>

                                    <td class="h-px whitespace-nowrap">
                                      <x-td-var
                                        :var="\Carbon\Carbon::parse($user->last_seen)->diffForHumans()"
                                      />
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>

                            <div class="grid app-table-footer">
                              @if ($users->lastPage() > 1)
                                <x-pagination
                                  :pagination="$users"
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
          </div>
        </div>
      </section>
    </div>
  </div>
@endSection
