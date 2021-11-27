@extends('layouts.master')

@section('content')
    <div id="mainDiv">
        <h1>Employee {{ $employee->first_name }} {{ $employee->last_name }}'s Profile</h1>
        <div id="employeeShow">
            <img src="/images/{{ $employee->profile_pic }}" alt="{{ $employee->first_name }}">
            <h4>{{ $employee->email }}</h4>
            <a href="{{ route('employees.edit', ['employee' => $employee]) }}">EDIT</a>
            <form 
                method="post" 
                action="{{ route('employees.destroy', ['employee' => $employee]) }}">
                @csrf 
                @method('DELETE')
                <button type="submit">DELETE PROFILE</button>
            </form>
        </div>
</br>
        <a href="{{ route('employees.index') }}">BACK TO STAFF VIEW</a>
        
    </div>
@endsection