<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h2 class="float-left">{{ $header }}</h2>
                    <button class="float-right bg-cyan-500 hover:bg-cyan-600 rounded-none ...">Add User</button>

                    <table class="table-auto w-full border-separate border-spacing-2 border border-slate-500 ...">
                        <thead>
                            <tr>
                            <th class="border border-slate-600 ...">Name</th>
                            <th class="border border-slate-600 ...">Email</th>
                            <th class="border border-slate-600 ...">Action</th>
                            </tr>
                        </thead> 
                        <tbody>

                            @foreach ($users as $user)
                                 <tr>
                                <td>{{ $user->name }}</td>
                                <td class="text-center border border-slate-700 ...">{{ $user->email}}</td>
                                <td class="text-center">
                                    <button class="bg-cyan-500 hover:bg-cyan-600 rounded-none ...">Update</button>
                                    <button class="bg-red-500 hover:bg-red-600 rounded-none ...">Delete</button>
                                </td>
                            </tr>
                            @endforeach

                            
                        </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
