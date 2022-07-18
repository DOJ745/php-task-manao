$(document).ready(function () {
    const regForm = $('#main-form');
    const loginField = $('#login-field');
    const passwordField = $('#password-field');
    const repPasswordField = $('#rep-password-field');
    const emailField = $('#email-field');
    const nameField = $('#name-field');
    const resMsg = $('#res-msg');

    //regForm.onsubmit = async (e) => {

    regForm.submit(async function (e) {
        e.preventDefault();
        if (repPasswordField.val() !== passwordField.val()) {
            resMsg.css('opacity', "0.1");
            resMsg.animate({opacity: '1.0'}, 833);
            resMsg.attr('class', 'failed-reg');
            resMsg.html('Passwords are not equal!');
            resMsg.removeAttr('hidden');
        }

        let user = {
            login: loginField.val(),
            password: passwordField.val(),
            email: emailField.val(),
            name: nameField.val()
        };
        alert(JSON.stringify(user));

        let response = await fetch(regForm.attr('action'), {
            method: regForm.attr('method'),
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(user)
        });

        let result = await response.json();
        alert(result.message);
    });
});