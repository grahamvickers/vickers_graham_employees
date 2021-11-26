@extends('layouts.master')

@section('content')
    <div id="mainDiv">
        <h1>Manage Royal Hunt Landscape Employees</h1>
        <table>
            <tr>
                <th>Headshot</th>
                <th>Employee Name</th>
                <th>Edit Profile</th>
            </tr>
            @foreach($employees as $employee)
            <tr>
                <td><img src="/images/{{ $employee->thumbnail }}" alt="Employee Icon"></td>
                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                <td>
                    <a href="{{ route('employees.show',$employee) }}">
                        EDIT
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        
        <br>
        <br>
        <a href="{{ route('employees.create') }}">
            Create a New Employee Profile
        </a>
    </div>
@endsection