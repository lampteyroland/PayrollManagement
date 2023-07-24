
    <div class="pr-10 pl-10 w-full">
        <h2 class="text-2xl font-bold">Add Tax</h2>

    </div>


    <x-card class=" pr-10 pl-6 w-full">

      <div >
                <form wire:submit.prevent="createTax">

                    <h2 class="mt-10 text-base font-semibold leading-7 text-gray-900">Employee Tax Information Information</h2>
                    <p class="text-sm leading-6 text-gray-600">Add tax information of employee</p>

                    <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="tax_name" class="block text-sm font-medium leading-6 text-gray-900">Tax Name</label>
                            <div class="mt-2">
                                <input type="text" name="tax_name" wire:model="tax_name"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>
                    <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                            <label for="tax_rate" class="block text-sm font-medium leading-6 text-gray-900">Tax amount</label>
                            <div class="mt-2">
                                <input type="text" name="tax_rate" wire:model="tax_rate"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>
                    <div class="sm:col-span-3">
                        <label for="tax_type" class="block text-sm font-medium leading-6 text-gray-900">Tax Type</label>
                        <div class="mt-2">
                            <select  name="tax_type"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Type 1</option>
                                <option>Type 2</option>
                                <option>Type 3</option>
                                <option>Type 4</option>
                                <option>Type 5</option>
                                <option>Type 6</option>
                                </select>
                           </div>
                    </div>

                    <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="tax_date" class="block text-sm font-medium leading-6 text-gray-900">Amount</label>
                            <div class="mt-2">
                                <input type="date" name="tax_date" wire:model="tax_date"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>

                    <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                            <div class="mt-2">
                                <input type="text" name="description" wire:model="description"
                                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
                    </div>
                </form>
            </div>

    </x-card>

