@extends('layouts.app')

@section('title', 'Sign in')

@section('content')
    <p  class="center-inner center-text">Log in</p>
    <form id="main-form" class="center-inner" action="" method="post">
        <label>
            Login:
            <input type="text" id="login-field"
                   class="input-text"
                   required=""
                   minlength=6/>
        </label>
        <br/>

        <label>
            Password:
            <input type="password" id="password-field"
                   class="input-text"
                   required=""
                   minlength=6/>
        </label>
        <br/>

        <button type="submit">Sign in</button>
        <button id="sign_up_btn" type="button">Sign up</button>
    </form>

    <p id="res-msg" hidden="">Response message</p>

    <script type="text/javascript" src="/public/js/auth/sign_in.js"></script>
@endsection