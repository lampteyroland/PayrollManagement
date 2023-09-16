<x-app-layout>
    <x-card class=" pr-10 pl-6 w-full">
        <form method="POST" action="/allowances" class="mb-5 " >
            @csrf

            <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

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

                <div class="sm:col-span-3">
                    <label for="allowance_name" class="block text-sm font-medium leading-6 text-gray-900">Allowance Name</label>
                    <div class="mt-2">
                        <input  id="allowance_name" name="allowance_name" type="text" value="{{old('allowance_name')}}"   class="block w-full rounded-md border-0 py-1.5
                             text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('allowance_name') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="allowance_amount" class="block text-sm font-medium leading-6 text-gray-900">allowance_amount</label>
                    <div class="mt-2">
                        <input  id="allowance_amount" name="allowance_amount" type="number" value="{{old('allowance_amount')}}"   class="block w-full rounded-md border-0 py-1.5
                             text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('allowance_amount') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="is_taxable" class="block text-sm font-medium leading-6 text-gray-900">is_taxable</label>
                    <div class="mt-2">
                        <div class="flex items-center space-x-2">
                            <input  type="radio" id="is_taxable_yes" name="is_taxable" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            <label for="is_taxable_yes" class="text-sm text-gray-700">Yes</label>
                        </div>
                        <div class="flex items-center space-x-2 mt-1">
                            <input  type="radio" id="is_taxable_no" name="is_taxable" value="0" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            <label for="is_taxable_no" class="text-sm text-gray-700">No</label>
                        </div>
                        @error('is_taxable') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>


                                <div class="sm:col-span-3">
                                    <label for="currency" class="block text-sm font-medium leading-6 text-gray-900">Currency</label>
                                    <div class="mt-2">
                                        <select  id="currency" name="currency" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="">Select Currency</option>
                                            @foreach($currencies as $code => $name)
                                                <option value="{{ $code }}">{{ $name }} ({{ $code }})</option>
                                            @endforeach
                                        </select>
                                        @error('currency') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                <div class="sm:col-span-3">
                    <label for="allowance_date" class="block text-sm font-medium leading-6 text-gray-900">allowance_date</label>
                    <div class="mt-2">
                        <input id="allowance_date" name="allowance_date" type="date" value="{{old('allowance_date')}}"   class="block w-full rounded-md border-0 py-1.5
                             text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('allowance_date') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="remarks" class="block text-sm font-medium leading-6 text-gray-900">remarks</label>
                    <div class="mt-2">
                        <input  id="remarks" name="remarks" type="text" value="{{old('remarks')}}"   class="block w-full rounded-md border-0 py-1.5
                             text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('remarks') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>






            </div>
            <div>
                <button type="submit" class="inline-flex items-center  px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>

    </x-card>


</x-app-layout>
