@extends('layouts.app')
@section('content')
    <div class="LRForm">
        <form action="{{ route('login')  }}" method="POST">
            {{ csrf_field() }}
        <table>

            <tr><td><h3>Login</h3></td></tr>

            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>

            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="Password" name="password">
                </td>
            </tr>

            <tr><td><input type="submit" value="submit"></button></td></tr>
        </table>
        </form>
    </div>
    @stop