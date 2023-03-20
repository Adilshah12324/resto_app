<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
            <a href="{{route('admin.reservations.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservation Index</a>
            </div>

            <div class="m-2 p-2 bg-slate-300 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form action="{{route('admin.reservations.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1">
                                <input type="text" name="first_name" class=" @error('first_name') border-red-500 @enderror block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                            @error('first_name')
                            <div class="text-sm text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <div class="mt-1">
                                <input type="text" name="last_name" class="@error('last_name') border-red-500 @enderror block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                            @error('last_name')
                            <div class="text-sm text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" name="email" class="@error('email') border-red-500 @enderror block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                            @error('email')
                            <div class="text-sm text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Phone Number</label>
                            <div class="mt-1">
                                <input type="number" name="tel_number" class="@error('tel_number') border-red-500 @enderror block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                            @error('tel_number')
                            <div class="text-sm text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation Date/Time</label>
                            <div class="mt-1">
                                <input type="datetime-local" name="res_date" class="@error('res_date') border-red-500 @enderror block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                            @error('res_date')
                            <div class="text-sm text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Guest Number</label>
                            <div class="mt-1">
                                <input type="number" name="guest_number" class="@error('guest_number') border-red-500 @enderror block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                            @error('guest_number')
                            <div class="text-sm text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="location" class="block text-sm font-medium text-gray-700">Table</label>
                            <div class="mt-1">
                                <select name="table_id">
                                    @foreach($tables as $table)
                                    <option value="{{$table->id}}">{{$table->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 p-2">
            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
            </div>
                    </form>

                </div>

            </div>
</div>

        </div>

</x-admin-layout>
