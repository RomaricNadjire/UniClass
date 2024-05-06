<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utilisateurs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 bg-gray-200">
                    <div class="p-4 flex">
                        <h1 class="text-3xl">
                            Liste des utilisateurs
                        </h1>
                    </div>
                    <div class="px-3 py-4 flex justify-center overflow-auto">
                        <table class="w-full text-md bg-white shadow-md rounded mb-4">
                            <tbody>
                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Nom</th>
                                    <th class="text-left p-3 px-5">Email</th>
                                    <th class="text-left p-3 px-5">Rôle</th>
                                    <th></th>
                                </tr>
                                @foreach ($users as $user)
                                <tr class="border-b">
                                    <td class="p-3 px-5"><input type="text" value="{{$user->name}}" class="bg-transparent"></td>
                                    <td class="p-3 px-5"><input type="text" value="{{$user->email}}" class="bg-transparent"></td>
                                    <td class="p-3 px-5">
                                        @if ($user->hasRole('admin'))
                                        <input type="text" value="Admin" class="bg-transparent" disabled>
                                        @else
                                        <input type="text" value="User" class="bg-transparent" disabled>
                                        @endif
                                    </td>
                                    <td class="p-3 px-5 flex justify-end">
                                        <a href="{{route('users.delete', $user->id)}}" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Supprimer</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
