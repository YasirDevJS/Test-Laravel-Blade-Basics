<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th>Row Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                {{-- Task: only every second row should have "bg-red-100" --}}


                                <tr class="{{ ($key % 2 != 0) ? 'bg-red-100' : '' }}">
                                    <td>{{ $key + 1 }}</td> <!-- Row number (1, 2, etc.) -->

                                    <td>{{ $user->name }}</td>

                                    <!-- Apply font-bold only to the first row -->
                                    <td class="{{ $key == 0 ? 'font-bold' : '' }}">{{ $user->email }}</td>

                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
