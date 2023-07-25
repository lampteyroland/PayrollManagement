<x-app-layout>



{{--    <p>{{$employee->first_name}}</p>--}}

{{--    <p>{{$employee->phone}}</p>--}}
{{--    <img class="w-48 mr-6 mb-6"--}}
{{--         src="{{$employee->profile_image ? asset('storage/' . $employee->profile_image) : asset('images/tesla.png')}}"--}}
{{--         alt=""--}}
{{--    />--}}





    <div class="container mx-auto p-4">
        <!-- Employee Profile Card -->
        <div class="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
            <div class="text-center">
                   <img class="w-30 h-20 rounded-full mx-auto mb-4"
                    src="{{$employee->profile_image ? asset('storage/' . $employee->profile_image) : asset('images/tesla.png')}}"
                        alt=""/>
                <h2 class="text-2xl font-bold">{{($employee->first_name) . ' ' .  ($employee->last_name)}}</h2>
                <p class="text-gray-600">Employee ID: {{$employee->employee_number}}</p>
            </div>

            <div class="my-4">
                <!-- Emergency Contact Information -->
                <h3 class="text-lg font-semibold">Personal information</h3>
                <p class="text-gray-600">Address: {{$employee->street_address}}</p>
                <p class="text-gray-600">Phone: {{$employee->phone}}</p>
                <p class="text-gray-600">Date of Birth: {{$employee->dob}}</p>
            </div>

            <!-- Other Employee Details (you can add more as needed) -->
            <div class="my-4">
                <h3 class="text-lg font-semibold">Other Details</h3>
                <p class="text-gray-600">Department: {{$employee->department}}</p>
                <p class="text-gray-600">Position: {{$employee->job_title}}r</p>
                <!-- Add more details here -->
            </div>

            <div>
                @unless($taxRecords->isEmpty())
                    <h3 class="mt-6 text-base font-semibold leading-7 text-gray-900">Tax Records</h3>
                    <ul>
                        @foreach($taxRecords as $tax)
                            <li>
                                <strong>Tax Name:</strong> {{ $tax->tax_name }}<br>
                                <strong>Tax Amount:</strong> {{ $tax->tax_rate }}<br>
                                <!-- Add more tax record details here as needed -->
                            </li>
                            <br>
                        @endforeach
                    </ul>
                @endunless
            </div>


            <div>
                <div class="flex space-x-3 justify-end" x-data="{ showConfirmation: false }">
                    <form method="POST" action="/employees/{{$employee->id}}">
                        @csrf
                        @method('DELETE')

                        <button type="button" @click="showConfirmation = true" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>

                        <div  x-show="showConfirmation" style="display: none" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
                            <div class="bg-white p-6 rounded-lg ">
                                <p class="mb-4">Are you sure you want to delete this employee?</p>
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mr-2" @click="showConfirmation = false">Yes</button>
                                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" @click="showConfirmation = false">Cancel</button>
                            </div>
                        </div>
                    </form>

                    <a href="/employees/{{$employee->id}}/edit" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                </div>


            </div>
        </div>
    </div>



</x-app-layout>
