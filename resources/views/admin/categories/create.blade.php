<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
            <a href="{{route('admin.categories.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Category Index</a>
            </div>

            <div class="m-2 p-2 bg-slate-300 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form action="{{route('admin.categories.store')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 @error('name') border-red-400 @enderror">
                            </div>
                            @error('name')
                            <div class="text-sm text-red-400">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <div class="mt-1">
                                <input type="file" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 @error('image') border-red-400 @enderror">
                            </div>
                            @error('image')
                            <div class="text-sm text-red-400">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                            <div class="mt-1">
                                <textarea rows="3" name="description" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 @error('description') border-red-400 @enderror">
                                </textarea>
                            </div>
                            @error('description')
                            <div class="text-sm text-red-400">{{$message}}</div>
                            @enderror
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
