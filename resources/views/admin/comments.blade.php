<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commentaires') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 bg-gray-200">
                    <div class="p-4 flex">
                        <h1 class="text-3xl">
                            Liste des commentaires
                        </h1>
                    </div>
                    <div class="px-3 py-4 flex justify-center overflow-auto">
                        <table class="w-full text-md bg-white shadow-md rounded mb-4">
                            <tbody>
                                <tr class="border-b">
                                    <th class="p-3 px-5 text-right">Date</th>
                                    <th class="text-left p-3 px-5">Utilisateurs</th>
                                    <th class="text-left p-3 px-5">Université</th>
                                    <th class="text-left p-3 px-5">Contenu</th>
                                    <th></th>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5 text-right"><input type="text" value="user.name" class="bg-transparent text-right"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5 text-right"><input type="text" value="user.name" class="bg-transparent text-right"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5 text-right"><input type="text" value="user.name" class="bg-transparent text-right"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 px-5 text-right"><input type="text" value="user.name" class="bg-transparent text-right"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                    <td class="p-3 px-5 flex justify-end"><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>