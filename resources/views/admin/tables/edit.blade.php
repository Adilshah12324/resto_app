<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{route('admin.tables.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
            </div>

            <div class="m-2 p-2 bg-slate-300 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form action="{{url('admin/tables/'.$table->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" value="{{$table->name}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Guest Number</label>
                            <div class="mt-1">
                                <input type="number" id="number" name="guest_number" value="{{$table->guest_number}}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400">
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                                <select name="status">
                                    @foreach(App\Enums\TableStatus::cases() as $status)
                                        <option value="{{$status->value}}" @selected($table->status->value == $status->value)>{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <div class="mt-1">
                                <select name="location">
                                    @foreach(App\Enums\TableLocation::cases() as $location)
                                        <option value="{{$location->value}}" @selected($table->location->value == $location->value)>{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-4 p-2">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

</x-admin-layout>
