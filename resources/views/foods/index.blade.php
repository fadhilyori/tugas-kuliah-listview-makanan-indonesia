<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-6 text-right">
                    <x-button class="bg-green-500">Add</x-button>
                </div>

                <div class="mb-6">
                    <table class="table-auto w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <tr class="text-center">
                            <td class="border px-6 py-4 font-extrabold">Name</td>
                            <td class="border px-6 py-4 font-bold">Asal</td>
                            <td class="border px-6 py-4 font-bold">Deskripsi</td>
                            <td class="border px-6 py-4 font-bold">Opsi</td>
                        </tr>
                        @foreach($foods as $food)
                            <tr>
                                <td class="border px-6 py-4">{{ $food->name }}</td>
                                <td class="border px-6 py-4">{{ $food->province->name }}</td>
                                <td class="border px-6 py-4">{{ $food->description }}</td>
                                <td class="border px-6 py-4 text-right">
                                    <x-button class="bg-blue-500">Edit</x-button>
                                    <x-button class="bg-red-500">Delete</x-button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="mb-6">
                    {{ $foods->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
