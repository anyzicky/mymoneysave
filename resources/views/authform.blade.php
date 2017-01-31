@extends('layouts.login')

@section('title', 'Auth form')

@section('content')
    <div class="form">
        <h2>Login to your account</h2>
        <form method="post" name="auth"f>
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <button type="submit">Login</button>
        </form>
    </div>

@endsection