<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ausy Registrations</title>
</head>
<body>
    <h1>Registrations</h1>

    <table>
        <thead>
            <tr>
                <td>Employee name</td>
                <td>Employee dept</td>
                <td>Plus one</td>
                <td>Number children</td>
                <td>Number vegetarians</td>
                <td>Email address</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        @foreach ($registrations as $registration)
            <tr>
                <td>{{ $registration->employee_name }}</td>
                <td>{{ $registration->employee_dept }}</td>
                <td>{{ $registration->plus_one }}</td>
                <td>{{ $registration->number_children }}</td>
                <td>{{ $registration->number_vegetarians }}</td>
                <td>{{ $registration->email }}</td>
                <td>
                    <form action="{{ url('registration' , $registration->id ) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button onclick="return confirm('Are you sure?')">Delete Registration</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
