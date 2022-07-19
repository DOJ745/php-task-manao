$(document).ready(function () {
    const userForm = $('#user-form');

    userForm.submit(async function (e) {
        e.preventDefault();

        let res = await fetch(userForm.attr('action'), {
            method: userForm.attr('method')
        });

        if(res.ok) { location.href = '/web'; }
    });
});