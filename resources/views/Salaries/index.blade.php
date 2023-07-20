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
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Base Salary</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Pay Frequency</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col"></th>

            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($salaries as $salary)
                <tr class="bg-white">
                    <td class="px-6 py-4 text-sm text-gray-500">
                        @if ($salary->employee)
                            <a href="/salaries/{{$salary->id}}">
                                {{ $salary->employee->first_name . ' ' . $salary->employee->last_name }}
                            </a>
                        @else
                            <span class="text-red-500">Employee record deleted</span>
                        @endif
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-500">
                        @if ($salary->employee)
                            {{$salary->employee->employee_number}}
                        @else
                            N/A
                        @endif
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-500">
                        @if ($salary->employee)
                            {{$salary->base_salary}}
                        @else
                            N/A
                        @endif

                    </td>

                    <td class="px-6 py-4 text-sm text-gray-500">
                        @if ($salary->employee)
                            {{$salary->pay_frequency}}
                        @else
                            N/A
                        @endif

                    </td>

                    <td class="text-left whitespace-nowrap text-sm text-gray-500">
                        @if ($salary->employee)
                            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="/salaries/{{$salary->id}}/edit">Edit</a>
                            </button>
                        @else
                            <!-- Handle case when the employee is deleted (optional) -->
                        @endif
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div class="mt-3 p-4">
        {{$salaries->links()}}
    </div>
    </div>



</x-app-layout>
