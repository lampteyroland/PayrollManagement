<x-app-layout>
    <x-card class="bg-green-50 pr-10 pl-10 pt-10 w-full">
        <form method="POST" action="/salaries" class="mb-5 " enctype="multipart/form-data" >
            @csrf
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="base_salary"  class="block text-sm font-medium leading-6 text-gray-900">Base Salary</label>
                    <div class="mt-2">
                        <input type="text" name="base_salary"  value="{{old('base_salary')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('base_salary')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>

                <div class="sm:col-span-3">
                    <label for="pay_frequency" class="block text-sm font-medium leading-6 text-gray-900">Pay Frequency</label>
                    <div class="mt-2">
                        <select name="pay_frequency"  value="{{old('pay_frequency')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Annually</option>
                            <option>Monthly</option>
                            <option>Weekly</option>
                            <option>Bi-weekly</option>
                            <option>Quaterly</option>
                        </select>
                    </div>
                    @error('pay_frequency')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="pay_rate" class="block text-sm font-medium leading-6 text-gray-900">Pay rate</label>
                    <div class="mt-2">
                        <input type="text" name="pay_rate" id="pay_rate" autocomplete="pay_rate" value="{{old('pay_rate')}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('pay_rate')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-6 mt-6 ">
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit
                </button>
            </div>


        </form>

    </x-card>



</x-app-layout>
