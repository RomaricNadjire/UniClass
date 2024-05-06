<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Universités') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 bg-gray-200">
                    <div class="p-4 flex justify-between">
                        <h1 class="text-3xl">
                            Liste des universités
                        </h1>
                        <a href="{{route('universities.add')}}" class="flex items-center justify-center bg-[#6A64F1] text-white rounded-md px-2">Ajouter</a>
                    </div>
                    <div class="px-3 py-4 flex justify-center overflow-auto">
                        <table class="w-full text-md bg-white shadow-md rounded mb-4">
                            <tbody>
                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Nom</th>
                                    <th class="text-left p-3 px-5">Description</th>
                                    <th class="text-left p-3 px-5">Programme</th>
                                    <th class="text-left p-3 px-5">Infrastructure</th>
                                    <th></th>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-[#6A64F1] hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>      
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-[#6A64F1] hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-[#6A64F1] hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-[#6A64F1] hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
