<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ausy Registration</title>


</head>
<body>
    <h1>Ausy Family event - registration</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{url('registration/store')}}">
        @csrf
        <div>
            <label for="employee_name">Employee name</label>
            <input type="text" name="employee_name" value="{{ old('employee_name') }}">
        </div>
        <div>
            <label for="employee_dept">Employee dept</label>
            <input type="text" name="employee_dept" value="{{ !$employee_dept ? old('employee_dept') : $employee_dept }}">
        </div>
        <div>
            <label for="plus_one">Plus one</label>
            <input type="radio" name="plus_one" value="Yes" {{ old('plus_one') == "Yes" ? 'checked' : '' }} }}>Yes
            <input type="radio" name="plus_one" value="No" {{ old('plus_one') == "No" ? 'checked' : '' }}>No
        </div>
        <div>
            <label for="number_children">Number of children</label>
            <input name="number_children" value="{{ old('number_children') }}">
        </div>
        <div>
            <label for="number_vegetarians">Number of vegetarians</label>
            <input name="number_vegetarians" value="{{ old('number_vegetarians') }}">
        </div>
        <div>
            <label for="email">Email address</label>
            <input name="email" value="{{ old('email') }}">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
