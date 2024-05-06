<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout d\'une université') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <form action="{{route('universities.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-5">
                      <label
                        for="name"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                      >
                        Nom
                      </label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Nom de l'université"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                      />
                    </div>
                    <div class="mb-5">
                      <label
                        for="description"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                      >
                        Description
                      </label>
                      <textarea
                        rows="4"
                        name="description"
                        id="description"
                        placeholder="Description de l'université"
                        class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                      ></textarea>
                    </div>
                    <div class="mb-5">
                      <label
                        for="program"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                      >
                        Programme
                      </label>
                      <textarea
                      rows="4"
                      name="program"
                      id="program"
                      placeholder="Programme accadémique de l'université"
                      class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    ></textarea>
                    </div>
                    <div class="mb-5 relative">
                      <label
                        for="infrastructure"
                        class="mb-3 flex items-center justify-center text-center font-semibold text-gray-500 shadow-inner rounded-md h-full w-full p-3 cursor-pointer border-2 focus:border-[#6A64F1]"
                      >
                        Infrastructure
                      </label>
                      <input
                        type="file"
                        name="infrastructure"
                        id="infrastructure"
                        class="hidden overflow-hidden resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                      />
                    </div>
                    <div>
                      <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
                      >
                        Submit
                      </button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
