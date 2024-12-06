<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

<form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="pb-12 border-b border-gray-900/10">
        <h2 class="font-semibold text-gray-900 text-base/7">Crreate a new Job</h2>
        <p class="mt-1 text-gray-600 text-sm/6">we juste need a handful from you</p>

        <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field class="sm:col-span-4">
            <x-form-label for="title">Title</x-form-label>
            <div class="mt-2">
              <x-form-input name="title" id="title"  placeholder="CEO" >

              </x-form-input>
              <x-form-error name='title'></x-form-error>
            </div>
          </x-form-field>

          <x-form-field class="sm:col-span-4">
            <x-form-label for="salary">Salary</x-form-label>
            <div class="mt-2">
              <x-form-input name="salary" id="salary"  placeholder="$50,000 USD" >

              </x-form-input>
              <x-form-error name='salary'></x-form-error>
            </div>
          </x-form-field>
        </div>


      </div>
    </div>

    <div class="flex items-center justify-end mt-6 gap-x-6">
        <a href="/" type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</a>
      <x-form-button>Save</x-form-button>
    </div>
  </form>


</x-layout>
