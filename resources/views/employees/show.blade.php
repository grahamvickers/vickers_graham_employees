@extends('layouts.master')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Employee {{ $employee->first_name }} {{ $employee->last_name }}'s Profile</h1>
            <div id="employeeShow">
                <img src="/images/{{ $employee->profile_pic }}" alt="{{ $employee->first_name }}">
                <h4>{{ $employee->email }}</h4>
            </div>

            <a href="{{ route('employees.index') }}">BACK TO STAFF VIEW</a>
            
        </div>
    </div>
@endsection