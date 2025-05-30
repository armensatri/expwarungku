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
                @include(
                  'backend.sbreadcrumb.manageaccess.ram-accessmenu'
                )

                <div class="overflow-hidden app-table-border">
                  <div class="grid app-table-grid">
                    <x-description
                      table-name="menu"
                      :page-data="$menus"
                    />

                    <div class="indexs">
                      <x-indexs
                        :route="route('access')"
                        name="back to access"
                      />
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
                          name="sm"
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
                      @foreach ($menus as $menu)
                        <tr>
                          <td class="h-px whitespace-nowrap">
                            <div class="my-1.5 center">
                              <x-td-var
                                :var="$loop->iteration . '.'"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$menu->id"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <div class="center">
                              <x-td-var
                                :var="$menu->sm"
                              />
                            </div>
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <x-td-var
                              :var="$menu->name"
                            />
                          </td>

                          <td class="h-px whitespace-nowrap">
                            <x-td-var
                              :var="$menu->url"
                            />
                          </td>

                          <td class="size-px whitespace-nowrap">
                            <div class="center">
                              <input type="checkbox"
                                data-role="{{ $role->id }}"
                                data-menu="{{ $menu->id }}"
                                data-url="{{ $role->url }}"
                                {{ in_array($menu->id, $role->menus->pluck('id')->toArray()) ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 rounded-[5px] cursor-pointer access-checkbox outline outline-offset-1 outline-1 outline-blue-600"
                              />
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <div class="grid app-table-footer">
                    @if ($menus->lastPage() > 1)
                      <x-pagination
                        :pagination="$menus"
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

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll(".access-checkbox").forEach((checkbox) => {
        checkbox.addEventListener("change", async function () {

          const roleId = this.getAttribute("data-role");
          const menuId = this.getAttribute("data-menu");
          const roleUrl = this.getAttribute("data-url");
          const isChecked = this.checked ? 1 : 0;

          try {
            const response = await fetch("{{ route('access.up.menu') }}", {
              method: "POST",

              headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                  'meta[name="csrf-token"]'
                ).content,
              },

              body: JSON.stringify({
                role_id: roleId,
                menu_id: menuId,
                role_url:roleUrl,
                is_checked: isChecked,
              }),
            });

            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const result = await response.json();

            if (result.success) {
              Swal.fire({
                title: "success",
                text: result.message,
                icon: "success",

              }).then(() => {
                window.location.href =
                  "{{ route('access.menu', [':url']) }}"
                  .replace(":url", roleUrl)
              });

            } else {
              throw new Error(result.message);
            }

          } catch (error) {
            console.error("error:", error);
            Swal.fire("error", "Something went wrong!", "error");
            this.checked = !this.checked;
          }
        });
      });
    });
  </script>
@endsection
