<x-app-layout>

<div>
    @if(count($employees) > 0)
        @foreach($employees as $employee)
            <a href="/employees/{{$employee->id}}"> {{ $employee->first_name }} </a>


        @endforeach
    @else
        <p>No employees found</p>
    @endif

</div>
</x-app-layout>
