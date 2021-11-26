@extends('layouts.master')

@section('content')
    <div class="mainDiv">
        <h1>Create A New Employee Profile:</h1>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color:red">
                    {{ $error}}
                </p>
            @endforeach
        @endif
        <form method="POST" action="{ route('employees.store') }}">
            @csrf 
            <label for="first_name">First Name:</label>
            <input name="first_name" id="first_name" type="text">

            <label for="last_name">Last Name:</label>
            <input name="last_name" id="last_name" type="text">

            <label for="email">Email:</label>
            <input name="email" id="email" type="email">

            <label for="thumbnail">Thumbnail Picture:</label>
            <input name="thumbnail" id="thumbnail" type="text">

            <label for="profile_pic">Profile Picture:</label>
            <input name="profile_pic" id="profile_pic" type="text">
            
            <button type="submit">CREATE PROFILE</button>
        </form>
    </div>
@endsection