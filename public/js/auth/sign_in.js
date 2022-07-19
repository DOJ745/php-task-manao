$(document).ready(function () {
    const loginForm = $('#sign-in-form');
    const loginField = $('#sign-in-login-field');
    const passwordField = $('#sign-in-password-field');
    const resMsg = $('#sign-in-res-msg');
    const userMsg = $('#user-login');
    const authContainer = $('#auth-container');
    const userInfoContainer = $('#user-info-container');

    function showAuthElements(flag) {
        if(flag === false) {
            authContainer.attr('hidden', '');
        }
        else {
            authContainer.removeAttr('hidden');
        }
    }

    function showUserElements(flag) {
        if(flag === false) {
            userInfoContainer.attr('hidden', '');
        }
        else {
            userInfoContainer.removeAttr('hidden');
        }
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
        else {
            userMsg.html(result.message);
            showAuthElements(false);
            showUserElements(true);
        }
    });
});