<x-app-layout>
    <div class="container mx-auto p-4">
        <!-- Employee Salary Information -->
        <div class="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
            <h2 class="text-2xl font-bold mb-4">Employee Salary Information</h2>

            <!-- Display Salary Amount -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-900">Salary Amount:  {{$salary->base_salary}}</label>
                <p class="text-lg text-gray-700"></p>
            </div>

            <!-- Display Payment Frequency -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-900">Payment Frequency: {{$salary->pay_frequency}}</label>
                <p class="text-lg text-gray-700"></p>
            </div>

            <!-- Add more salary details here as needed -->



            <div class="flex space-x-3 justify-end" x-data="{ showConfirmation: false }">
                <form method="POST" action="/salaries/{{$salary->id}}">
                    @csrf
                    @method('DELETE')

                    <button type="button" @click="showConfirmation = true" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>

                    <div  x-show="showConfirmation" style="display: none" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
                        <div class="bg-white p-6 rounded-lg ">
                            <p class="mb-4">Are you sure you want to delete this salary information?</p>
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mr-2" @click="showConfirmation = false">Yes</button>
                            <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" @click="showConfirmation = false">Cancel</button>
                        </div>
                    </div>
                </form>

                <a href="/salaries/{{$salary->id}}/edit" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
            </div>


        </div>
    </div>
    <div>
    </div>



{{--    <a href="/salaries/{{$salary->id}}/edit">Edit</a>--}}

{{--    <form method="POST" action="/salaries/{{$salary->id}}">--}}
{{--        @csrf--}}
{{--        @method('DELETE')--}}

{{--        <button class="text-red 500">Delete</button>--}}

{{--    </form>--}}

</x-app-layout>
