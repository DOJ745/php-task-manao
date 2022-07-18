@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
    <p class="center-inner center-text">Input data to register new user</p>
    <br/>
    <form id="main-form" class="center-inner" action="/src/test_ajax.php" method="post">
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
                   minlength=6
                   pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=_])(?=\S+$).{6,}$"
                   title="Require: 1 letter (p);
                   1 capitalize letter (P);
                   1 unique symbol (@, #, $, %, ^, +, =, _);
                   1 number;
                   without space;
                   at least 6 symbols"/>
        </label>
        <br/>

        <label>
            Repeat password:
            <input type="password" id="rep-password-field"
                   class="input-text"
                   required=""
                   minlength=6
                   pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=_])(?=\S+$).{6,}$"
                   title="Require: 1 letter (p);
                   1 capitalize letter (P);
                   1 unique symbol (@, #, $, %, ^, +, =, _);
                   1 number;
                   without space;
                   at least 6 symbols"/>
        </label>
        <br/>

        <label>
            Email:
            <input type="email" id="email-field"
                   class="input-text"
                   required=""/>
        </label>
        <br/>

        <label>
            Name:
            <input type="text" id="name-field"
                   class="input-text"
                   required=""
                   pattern="^[a-zA-Z]+$"
                   title="Required only 2 letters!"
                   minlength=2
                   maxlength=2/>
        </label>
        <br/>

        <button type="submit">Sign up</button>
        <button id="sign_in_btn" type="button">Sign in</button>
    </form>

    <p id="res-msg" hidden="">Response message</p>

    <script type="text/javascript" src="/public/js/auth/sign_in.js"></script>
@endsection