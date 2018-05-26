@extends('layouts.app')
@section('content')
    <div class="LRForm">
        <form action="{{ route('register')  }}" method="POST">
            {{ csrf_field() }}
            <table>

                <tr><td><h3>Register</h3></td></tr>

                @include('layouts._error')
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name="name" value="{{ old('name') }}"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="email" value="{{ old('email') }}"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="Password" name="password" value="{{ old('password') }}"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="Password" name="password_confirmation" value="{{ old('password_confirmation') }}"/>
                    </td>
                </tr>

                <tr><td><input type="submit" value="submit"/></td></tr>
            </table>
        </form>
    </div>
@stop