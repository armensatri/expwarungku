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
        @include('backend.sbreadcrumb.manageaccess.rap-accesspermission')

        <div class="app-cse-border">
          <div class="rounded-2xl">
            <div class="grid max-h-[350px] grid-cols-1 overflow-y-scroll gap-8 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
              @foreach ($groupper as $controller => $permissions)
                <fieldset>
                  <legend class="mb-2 ml-2 text-base font-normal tracking-wide text-red-600">
                    {{ ucfirst($controller) }}Controller
                  </legend>

                  @foreach ($permissions as $permission)
                    <div class="flex items-center px-1 ml-1">
                      <div>
                        <div class="flex items-center">
                          <input type="checkbox"
                            data-role="{{ $role->id }}"
                            data-permission="{{ $permission->id }}"
                            data-url="{{ $role->url }}"
                            {{ in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                            class="ml-1 w-4 h-4 text-blue-600 rounded-[5px] cursor-pointer access-checkbox outline outline-offset-1 outline-1 outline-blue-600"
                          />
                        </div>
                      </div>

                      <div class="flex items-center text-[15px] text-gray-600 whitespace-nowrap p-2 py-1.5 tracking-wide">
                        {{ $permission->name }}
                      </div>
                    </div>
                  @endforeach
                </fieldset>
              @endforeach
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
          const permissionId = this.getAttribute("data-permission");
          const roleUrl = this.getAttribute("data-url");
          const isChecked = this.checked ? 1 : 0;

          try {
            const response = await fetch(
              "{{ route('access.up.permission') }}", {
              method: "POST",

              headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                  'meta[name="csrf-token"]'
                ).content,
              },

              body: JSON.stringify({
                role_id: roleId,
                permission_id: permissionId,
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
                  "{{ route('access.permission', [':url']) }}"
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
