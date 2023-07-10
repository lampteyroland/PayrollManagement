<x-app-layout>
    <x-sidebar>


    <p>{{$employee->first_name}}</p>
    <p>{{$employee->phone}}</p>
    <img class="w-48 mr-6 mb-6"
         src="{{$employee->profile_image ? asset('storage/' . $employee->profile_image) : asset('images/tesla.png')}}"
         alt=""
    />

    <a href="/employees/{{$employee->id}}/edit">Edit</a>

    <form method="POST" action="/employees/{{$employee->id}}">
        @csrf
        @method('DELETE')

        <button class="text-red 500">Delete</button>

    </form>

    </x-sidebar>


</x-app-layout>
