<x-app-layout>
    <div class="pr-10 pl-10 w-full">
        <h2 class="text-2xl font-bold">Edit an employee</h2>

    </div>


    <x-card class=" pr-10 pl-10 pt-10 w-full">
        <form method="POST" action="/employees/{{$employee->id}}" class="mb-5"  enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h2 class=" mt-10 text-base font-semibold leading-7 text-gray-900">Personal Information </h2>
            <p class=" text-sm leading-6 text-gray-600">Edit personal information of employee</p>
            <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first_name"  class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                    <div class="mt-2">
                        <input type="text" name="first_name"  value="{{$employee->first_name}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('first_name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                </div>

                <div class="sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                    <div class="mt-2">
                        <input type="text" name="last_name" value="{{$employee->last_name}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('last_name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="other_name" class="block text-sm font-medium leading-6 text-gray-900">Other names</label>
                    <div class="mt-2">
                        <input type="text" name="other_name" value="{{$employee->other_name}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('other_name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <div class="mt-2">
                        <select name="title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="Mr" {{ $employee->title === 'Mr' ? 'selected' : '' }}>Mr</option>
                            <option value="Miss" {{ $employee->title === 'Miss' ? 'selected' : '' }}>Miss</option>
                            <option value="Mrs" {{ $employee->title === 'Mrs' ? 'selected' : '' }}>Mrs</option>
                            <option value="Dr." {{ $employee->title === 'Dr.' ? 'selected' : '' }}>Dr.</option>
                            <option value="Prof." {{ $employee->title === 'Prof.' ? 'selected' : '' }}>Prof.</option>
                            <option value="Rev" {{ $employee->title === 'Rev' ? 'selected' : '' }}>Rev</option>
                        </select>

                    </div>
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input  name="email" type="email" autocomplete="email" value="{{$employee->email}}" class="block w-full rounded-md border-0 py-1.5
                             text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                    <div class="mt-2">
                        <input type="text" name="phone" id="phone" autocomplete="phone" value="{{$employee->phone}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-2 ">
                    <label for="dob" class="block text-sm font-medium leading-6 text-gray-900">Date of birth</label>
                    <div class="mt-2">
                        <input type="date" name="dob" id="dob" autocomplete="dob"  value="{{$employee->dob}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('dob')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-span-4">
                    <label for="street_address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                    <div class="mt-2">
                        <input type="text" name="street_address"  autocomplete="street-address" value="{{$employee->street_address}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('street_address')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-span-2 ">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                    <div class="mt-2">
                        <select id="country" name="country" autocomplete="country" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="United States" {{ $employee->country === 'United States' ? 'selected' : '' }}>United States</option>
                            <option value="Canada" {{ $employee->country === 'Canada' ? 'selected' : '' }}>Canada</option>
                            <option value="Mexico" {{ $employee->country === 'Mexico' ? 'selected' : '' }}>Mexico</option>
                        </select>
                    </div>
                    @error('country')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-span-2">
                    <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Region</label>
                    <div class="mt-2">
                        <select id="region" name="region" autocomplete="region" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="Greater Accra" {{ $employee->region === 'Greater Accra' ? 'selected' : '' }}>Greater Accra</option>
                            <option value="Eastern Region" {{ $employee->region === 'Eastern Region' ? 'selected' : '' }}>Eastern Region</option>
                            <option value="Western Region" {{ $employee->region === 'Western Region' ? 'selected' : '' }}>Western Region</option>
                        </select>

                    </div>
                    @error('region')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>


                <div class="sm:col-span-2">
                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                    <div class="mt-2">
                        <input type="text" name="city" id="city" autocomplete="city" value="{{$employee->city}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('city')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="profile_image" class="block text-sm font-medium leading-6 text-gray-900">Employees Image</label>

                    <div class="mb-6">
                        <input
                            type="file"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="profile_image"
                        />
                    </div>

                    <img class="w-30 h-20 rounded-full mx-auto mb-4"
                         src="{{$employee->profile_image ? asset('storage/' . $employee->profile_image) : asset('images/tesla.png')}}"
                         alt=""/>

                    @error('profile_image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


            </div>


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Work Information</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="job_title" class="block text-sm font-medium leading-6 text-gray-900">Job title</label>
                        <div class="mt-2">
                            <input type="text" name="job_title" id="job_title" autocomplete="job_title" value="{{$employee->job_title}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="department" class="block text-sm font-medium leading-6 text-gray-900">Department</label>
                        <div class="mt-2">
                            <input type="text" name="department" id="department" autocomplete="department" value="{{$employee->department}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('department')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>



                    <div class="sm:col-span-3">
                        <label for="work_email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="work_email" name="work_email" type="email" autocomplete="work_email" value="{{$employee->work_email}}"   class="block w-full rounded-md border-0 py-1.5
                             text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('work_email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3 ">
                        <label for="start_date" class="block text-sm font-medium leading-6 text-gray-900">Start Date</label>
                        <div class="mt-2">
                            <input type="date" name="start_date" id="start-date" autocomplete="start_date" value="{{$employee->start_date}}"   class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('start_date')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>


                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Emergency Contact </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="emergency_first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                        <div class="mt-2">
                            <input type="text" name="emergency_first_name" id="emergency_first_name"  value="{{$employee->emergency_first_name}}" autocomplete="first" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('emergency_first_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="emergency_last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                        <div class="mt-2">
                            <input type="text" name="emergency_last_name" id="emergency-last-name" value="{{$employee->emergency_last_name}}" autocomplete="emergency_family_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('emergency_last_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="other_name" class="block text-sm font-medium leading-6 text-gray-900">Other names</label>
                        <div class="mt-2">
                            <input type="text" name="emergency_other_name" id="emergency_other_name" value="{{$employee->emergency_other_name}}" autocomplete="emergency_family_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('emergency_other_name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="emergency_title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <select id="emergency_title" name="emergency_title" autocomplete="emergency_title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="Mr" {{ $employee->emergency_title === 'Mr' ? 'selected' : '' }}>Mr</option>
                                <option value="Miss" {{ $employee->emergency_title === 'Miss' ? 'selected' : '' }}>Miss</option>
                                <option value="Mrs" {{ $employee->emergency_title === 'Mrs' ? 'selected' : '' }}>Mrs</option>
                                <option value="Dr." {{ $employee->emergency_title === 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                <option value="Prof." {{ $employee->emergency_title === 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                <option value="Rev" {{ $employee->emergency_title === 'Rev' ? 'selected' : '' }}>Rev</option>
                            </select>

                            @error('emergency_title')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="emergency_email" name="emergency_email" type="email"value="{{$employee->emergency_email}}"" autocomplete="emergency_email" class="block w-full rounded-md border-0 py-1.5
                             text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset
                              focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('emergency_email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="emergency_phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                        <div class="mt-2">
                            <input type="text" name="emergency_phone" id="emergency_phone" value="{{$employee->emergency_phone}}"  autocomplete="emergency_phone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('emergency_phone')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-2 ">
                        <label for="emergency_dob" class="block text-sm font-medium leading-6 text-gray-900">Date of birth</label>
                        <div class="mt-2">
                            <input type="date" name="emergency_dob" id="emergency_dob" value="{{$employee->emergency_dob}}" autocomplete="emergency_dob" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('emergency_dob')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-4">
                        <label for="emergency_street_address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                        <div class="mt-2">
                            <input type="text" name="emergency_street_address" id="emergency_street_address" value="{{$employee->emergency_street_address}}"  autocomplete="emergency_street_address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="mb-6">
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                           Update
                        </button>
                    </div>

        </form>

    </x-card>
</x-app-layout>
