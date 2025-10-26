@extends('layout')
@section('page_title', 'Welcome to LoginPage')

@section('main')
    <div>
        <h1>User Login</h1>
        <form>
            <p><input type="text" placeholder="Login name"/></p>
            <p><input type="password" placeholder="Login password"/></p>
            <p><button type="button" class="btn btn-primary">Login</button></p>
        </form>
    </div>
@endsection