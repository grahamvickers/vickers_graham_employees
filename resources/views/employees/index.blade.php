@extends('layouts.master')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Manage Royal Hunt Landscape Employees</h1>
            @foreach($employees as $employee)
                <div>
                    <img src="{{ $employee->thumbnail}}" alt="Employee Icon">
                    <a href="{{ route('employees.show',$employee) }}">
                        {{ $employee->first_name }} {{ $employee->last_name }}
                    </a>
                </div>
            @endforeach
            <br>
            <br>
            <a href="{{ route('employees.create') }}">
                Create a New Employee Profile
            </a>
        </div>
    </div>
@endsection