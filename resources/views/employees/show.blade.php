@extends('layouts.master')

@section('content')
    <div class="mainDiv">
        <h1>Employee {{ $employee->first_name }} {{ $employee->last_name }}'s Profile</h1>
        <div id="employeeShow">
            <img src="/images/{{ $employee->profile_pic }}" alt="{{ $employee->first_name }}">
            <h4>{{ $employee->email }}</h4>
            <form 
                method="post" 
                action="{{ route('employees.destroy', ['employee' => $employee]) }}">
                @csrf 
                @method('DELETE')
                <button type="submit">DELETE EMPLOYEE PROFILE</button>
            </form>
        </div>
</br>
        <a href="{{ route('employees.index') }}">BACK TO STAFF VIEW</a>
        
    </div>
@endsection