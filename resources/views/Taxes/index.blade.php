<x-app-layout>
    @include('partials._search   ')

    <div class="sm:block">

    </div>
    <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Full Name</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Employee Number</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Tax Name</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Tax Amount</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col"></th>

            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($taxes as $tax)
                @if ($tax->employee) {{-- Check if the employee exists --}}
                <tr class="bg-white">
                    <td class="px-6 py-4 text-sm text-gray-500">
{{--                        <a href="/salaries/{{$salary->id}}">--}}
                        <a href="/taxes/{{$tax->id}}">

                            {{ $tax->employee->first_name . ' ' . $tax->employee->last_name }}
                        </a>
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{$tax->employee->employee_number}}
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{$tax->tax_name}}
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{$tax->tax_rate}}
                    </td>

                    <td class="text-left whitespace-nowrap text-sm text-gray-500">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="/taxes/{{$tax->id}}/edit">Edit</a>
                        </button>
                    </td>
                </tr>
                @endif
            @endforeach


            </tbody>
        </table>
    </div>
    <div class="mt-3 p-4">
        {{$taxes->links()}}
    </div>



</x-app-layout>
