<x-app-layout>

    {{$salary->base_salary}}
    {{$salary->pay_frequency}}


    <a href="/salaries/{{$salary->id}}/edit">Edit</a>

    <form method="POST" action="/salaries/{{$salary->id}}">
        @csrf
        @method('DELETE')

        <button class="text-red 500">Delete</button>

    </form>

</x-app-layout>
