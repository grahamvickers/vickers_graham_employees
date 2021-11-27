@extends('layouts.master')

@section('content')
    <div id="mainDiv">
        <h1>Create A New Employee Profile:</h1>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color:red">
                    {{ $error }}
                </p>
            @endforeach
        @endif

        <form  action="{{ route('employees.update', ['employee' => $employee]) }}" method="POST">
            @csrf 
            @method('PATCH') 
            <label for="first_name">First Name:</label>
            <input name="first_name" id="first_name" type="text" value="{{ $employee->first_name }}">

            <label for="last_name">Last Name:</label>
            <input name="last_name" id="last_name" type="text" value="{{ $employee->last_name }}">

            <label for="email">Email:</label>
            <input name="email" id="email" type="email" value="{{ $employee->email }}">

            <label for="thumbnail">Thumbnail Picture:</label>
            <input name="thumbnail" id="thumbnail" type="text" value="{{ $employee->thumbnail}}">

            <label for="profile_pic">Profile Picture:</label>
            <input name="profile_pic" id="profile_pic" type="text" value="{{ $employee->profile_pic }}">
            
            <button type="submit">SAVE CHANGES</button>
        </form>
    </div>
@endsection