// Validación del formulario de registro
register = () => {
    var username = document.querySelector('#username').value;
    var email = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;
    var verification = document.querySelector('#verification').value;

    var emailValidator = /^([\da-z_\.-]+)@([\da-z\.-]+).([a-z\.]{2,6})$/;
    var textValidator = /^([a-zA-Z0-9])+$/;

    if(username === '') {
        M.toast({html: 'El campo usuario no puede estar vacio!'});
    } else if(!textValidator.exec(username)) {
        M.toast({html: 'No se permiten caracteres especiales ni espacios en el campo usuario!'});
    }

    if(email === '') {
        M.toast({html: 'El campo email no puede estar vacio!'});
    } else if(!emailValidator.exec(email)) {
        M.toast({html: 'Por favor, ingrese un correo electronico válido!'});
    }
    
    if(password === '' || verification === '') {
        M.toast({html: 'El campo contraseña no puede estar vacio!'});
    } else if(!textValidator.exec(password) || !textValidator.exec(verification)) {
        M.toast({html: 'No se permiten caracteres especiales ni espacios en el campo contraseña!'});
    }

    if(password !== verification) {
        M.toast({html: 'Las contraseñas no coinciden.'});
    }

    var ajax = new XMLHttpRequest();
    var URL = 'ajax/users.ajax.php';
    var method = 'POST';
    ajax.onreadystatechange = () => {
        if(ajax.readyState === 4 && ajax.status === 2001) {
            var response = ajax.responseText;
        }
    }
    ajax.open(method, URL, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(`username=${username}&email=${email}&password=${password}`);
}