@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
    <div>
        <!-- Sign up form -->

        <p class="center-inner center-text">Input data to register new user</p>
        <br/>
        <form id="main-form" class="center-inner" action="/src/auth/reg.php" method="post">
            <label>
                Login:
                <input type="text" id="login-field"
                       class="input-text"
                       required=""
                       pattern="^\S+$"
                       title="No spaces allowed!"
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
                   without spaces;
                   at least 6 symbols"/>
            </label>
            <br/>

            <label>
                Email:
                <input type="text" id="email-field"
                       class="input-text"
                       required=""
                       pattern="^\S[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)(?=\S+$)(?:[A-Z]{2}|com|org|ru|net|gov)\b"
                       title="Require: no spaces; one '@'; one '.'"/>
            </label>
            <br/>

            <label>
                Name:
                <input type="text" id="name-field"
                       class="input-text"
                       required=""
                       pattern="^[a-zA-Z]+$"
                       title="Required only 2 letters, no spaces!"
                       minlength=2
                       maxlength=2/>
            </label>
            <br/>

            <div class="center-text">
                <button type="submit">Sign up</button>
            </div>

        </form>

        <p id="res-msg" hidden="">Response message</p>

        <!-- Sign in form -->
        <hr/>

        <p class="center-inner center-text">Sign in</p>
        <br/>

        <form id="sign-in-form" class="center-inner" action="/src/auth/login.php" method="post">
            <label>
                Login:
                <input type="text" id="sign-in-login-field"
                       class="input-text"
                       required=""
                       pattern="^\S+$"
                       title="No spaces allowed!"
                       minlength=6/>
            </label>
            <br/>

            <label>
                Password:
                <input type="password" id="sign-in-password-field"
                       class="input-text"
                       required=""
                       minlength=6/>
            </label>
            <br/>

            <div class="center-text">
                <button type="submit">Sign in</button>
            </div>
        </form>

        <p id="sign-in-res-msg" hidden="">Response message</p>
    </div>

    <script type="text/javascript" src="/public/js/auth/sign_up.js"></script>
    <script type="text/javascript" src="/public/js/auth/sign_in.js"></script>
@endsection