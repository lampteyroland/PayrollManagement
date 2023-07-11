<x-app-layout>
    @include('partials._search   ')

        <div class="sm:block">

    </div>
        <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">First Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Last Name</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">email</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Job Title</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">Email</th>

                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($employees as $employee)
                    <tr class="bg-white">

                        <td class="px-6 py-4 text-sm text-gray-900">
                            <a>
                                <p class="text-gray-500 group-hover:text-gray-900"><a href="/employees/{{$employee->id}}"> {{ $employee->first_name }} </a></p>
                            </a>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{$employee->last_name}}
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{$employee->email}}

                        </td>


                        <td class="px-6 py-4 text-left whitespace-nowrap text-sm text-gray-500">
                            {{$employee->job_title}}

                        </td>
                        <td class="text-left whitespace-nowrap text-sm text-gray-500">
                        {{$employee->phone}}
                        </td>
                        <td class="text-left whitespace-nowrap text-sm text-gray-500">
                            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <a href="/employees/{{$employee->id}}/edit">Edit</a>
                            </button>
                        </td>

                @endforeach
                </tbody>
            </table>
        </div>
    <div class="mt-3 p-4">
        {{$employees->links()}}
    </div>
    </div>



</x-app-layout>
