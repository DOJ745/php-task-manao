$(document).ready(function () {
    const regForm = $('#main-form');
    const loginField = $('#login-field');
    const passwordField = $('#password-field');
    const repPasswordField = $('#rep-password-field');
    const emailField = $('#email-field');
    const nameField = $('#name-field');
    const resMsg = $('#res-msg');

    let validateForm = function (event) {
        if (repPasswordField.val() !== passwordField.val()) {
            resMsg.css('opacity', "0.1");
            resMsg.animate({opacity: '1.0'}, 633);
            resMsg.attr('class', 'failed-reg');
            resMsg.html('Passwords are not equal!');
            resMsg.removeAttr('hidden');
        }
        else {

        }
        event.preventDefault();
    }
    regForm[0].addEventListener('submit', validateForm, true);
});