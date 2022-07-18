$(document).ready(function () {
    const loginForm = $('#sign-in-form');
    const loginField = $('#sign-in-login-field');
    const passwordField = $('#sign-in-password-field');
    const resMsg = $('#sign-in-res-msg');

    const userMsg = $('#user-login');
    const userForm = $('#user-form');

    const regForm = $('#main-form');
    const loginRegField = $('#login-field');
    const passwordRegField = $('#password-field');
    const repPasswordField = $('#rep-password-field');
    const emailField = $('#email-field');
    const nameField = $('#name-field');

    const signUpLabel = $('#sign-up-label');
    const signInLabel = $('#sign-in-label');

    function hideElements(flag) {
        if(flag === true) {
            signUpLabel.attr('hidden', '');
            signInLabel.attr('hidden', '');

            loginForm.attr('hidden', '');
            loginField.attr('hidden', '');
            passwordField.attr('hidden', '');

            regForm.attr('hidden', '');
            loginRegField.attr('hidden', '');
            passwordRegField.attr('hidden', '');
            repPasswordField.attr('hidden', '');
            emailField.attr('hidden', '');
            nameField.attr('hidden', '');
        }

        signUpLabel.removeAttr('hidden');
        signInLabel.removeAttr('hidden');

        loginForm.removeAttr('hidden');
        loginField.removeAttr('hidden');
        passwordField.removeAttr('hidden');

        regForm.removeAttr('hidden');
        loginRegField.removeAttr('hidden');
        passwordRegField.removeAttr('hidden');
        repPasswordField.removeAttr('hidden');
        emailField.removeAttr('hidden');
        nameField.removeAttr('hidden');
    }

    function showUserElements() {
        userForm.removeAttr('hidden');
        userMsg.removeAttr('hidden');
    }

    function playAnimation(animObject) {
        animObject.css('opacity', '0.1');
        animObject.animate({opacity: '1.0'}, 833);
        animObject.removeAttr('hidden');
    }

    loginForm.submit(async function (e) {
        e.preventDefault();

        let user = {
            login: loginField.val(),
            password: passwordField.val(),
        };

        let res = await fetch(loginForm.attr('action'), {
            method: loginForm.attr('method'),
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(user)
        });

        let result = await res.json();

        if(res.status === 400) {
            resMsg.attr('class', 'failed-req');
            resMsg.html(result.message);
            playAnimation(resMsg);
        }

        userMsg.html(result.message);
        hideElements(true);
        showUserElements();
    });
});