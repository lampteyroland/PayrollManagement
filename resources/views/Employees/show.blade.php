<x-app-layout>
    <p>{{$employee->first_name}}</p>
    <p>{{$employee->phone}}</p>

    <a href="/employees/{{$employee->id}}/edit">Edit</a>

    <form method="POST" action="/employees/{{$employee->id}}">
        @csrf
        @method('DELETE')

        <button class="text-red 500">Delete</button>

    </form>



</x-app-layout>
