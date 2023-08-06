<x-app-layout>
    <div class="pr-10 pl-10 w-full">
        <h2 class="text-2xl font-bold">Add Tax</h2>
    </div>


    <x-card class=" pr-10 pl-6 w-full">

        <div>
            <form method="POST" action="/taxes" class="mb-5 ">
                @csrf

                <h2 class="mt-10 text-base font-semibold leading-7 text-gray-900">Employee Tax Information Information</h2>
                <p class="text-sm leading-6 text-gray-600">Add tax information of employee</p>

                <div class="sm:col-span-3">
                    <label for="employee_id" class="block text-sm font-medium leading-6 text-gray-900">Select employee</label>
                    <div class="mt-2">
                        <select name="employee_id"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="">Select an employee</option>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }} ">{{ $employee->first_name . ' '. $employee->last_name }}</option>
                            @endforeach
                        </select>
                        @error('employee_id')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="tax_name" class="block text-sm font-medium leading-6 text-gray-900">Tax Name</label>
                        <div class="mt-2">
                            <input type="text" name="tax_name" value="{{old('tax_name')}}"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('tax_name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>
                <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="tax_rate" class="block text-sm font-medium leading-6 text-gray-900">Tax amount</label>
                        <div class="mt-2">
                            <input type="text" name="tax_rate" value="{{old('tax_rate')}}"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('tax_rate')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>
                <div class="sm:col-span-3">
                    <label for="tax_type" class="block text-sm font-medium leading-6 text-gray-900">Tax Type</label>
                    <div class="mt-2">
                        <select   name="tax_type"  {{old('tax_type') }} class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="">Select Tax Type</option>
                            <option value="Type 1" {{ old('tax_type') == 'Type 1' ? 'selected' : '' }}>Type 1</option>
                            <option value="Type 2" {{  old('tax_type') == 'Type 2' ? 'selected' : '' }}>Type 2</option>
                            <option value="Type 3" {{  old('tax_type') == 'Type 3' ? 'selected' : '' }}>Type 3</option>
                            <option value="Type 4" {{ old('tax_type') == 'Type 4' ? 'selected' : '' }}>Type 4</option>
                            <option value="Type 5" {{ old('tax_type') == 'Type 5' ? 'selected' : '' }}>Type 5</option>
                            <option value="Type 6" {{ old('tax_type') == 'Type 6' ? 'selected' : '' }}>Type 6</option>
                        </select>
                    </div>
                    @error('tax_type')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="tax_date" class="block text-sm font-medium leading-6 text-gray-900">Amount</label>
                        <div class="mt-2">
                            <input type="date" name="tax_date" value="{{old('tax_date')}}"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('tax_date')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>

                <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <input type="text" name="description" value="{{old('description')}}"
                                   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>

                <div class="flex justify-end">
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                </div>
            </form>
        </div>

    </x-card>


</x-app-layout>
