<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end m-2 p-2">
            <a href="{{route('admin.reservations.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Reservation</a>
            </div>
        <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Reservation Date/Time
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Table Id
                </th>
                <th scope="col" class="px-6 py-3 whitespace-nowrap">
                    Guest Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$reservation->first_name}}
                </th>
                <td class="px-6 py-4">
                    {{$reservation->last_name}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->email_name}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->tel_number}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->res_date}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->table_id}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->guest_number}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{url('admin/reservations/'.$reservation->id.'/edit')}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white whitespace-nowrap">Edit</a>
                    <form action="{{url('admin/reservations/'.$reservation->id)}}"
                          method="post"
                          onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Delete</button>
                    </form>
                </td>
            </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    </div>
</x-admin-layout>
