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
        return;
    } else if(!textValidator.exec(username)) {
        M.toast({html: 'No se permiten caracteres especiales ni espacios en el campo usuario!'});
        return;
    }

    if(email === '') {
        M.toast({html: 'El campo email no puede estar vacio!'});
        return;
    } else if(!emailValidator.exec(email)) {
        M.toast({html: 'Por favor, ingrese un correo electronico válido!'});
        return;
    }
    
    if(password === '' || verification === '') {
        M.toast({html: 'El campo contraseña no puede estar vacio!'});
        return;
    } else if(!textValidator.exec(password) || !textValidator.exec(verification)) {
        M.toast({html: 'No se permiten caracteres especiales ni espacios en el campo contraseña!'});
        return;
    }

    if(password !== verification) {
        M.toast({html: 'Las contraseñas no coinciden.'});
        return;
    }

    var ajax = new XMLHttpRequest();
    var URL = 'ajax/users.ajax.php';
    var method = 'POST';
    ajax.onreadystatechange = () => {
        if(ajax.readyState === 4 && ajax.status === 200) {
            var response = ajax.responseText;

            console.log(response);
            if(response === 'email_invalid') {
                M.toast({html: 'El email enviado no es valido!'});
            } else if(response === 'username_invalid') {
                M.toast({html: 'El usuario enviado no es valido!'});
            } else if(response === 'password_invalid') {
                M.toast({html: 'La contraseña enviado no es valido!'});
            } else if(response === 'fields_empty') {
                M.toast({html: 'Algunos campos estan vacios!'});
            } else if(response === 'OK') {
                M.toast({html: `Los datos se han guardado correctamente! Por favor verifique correo electronico ${email} para ingresar`});
                document.getElementById('form').reset();
            } else if(response === 'user_exist') {
                M.toast({html: 'El usuario ya se encuentra registrado, intente con uno diferente!'});
            } else if(response === 'email_exist') {
                M.toast({html: 'El email ya se encuentra registrado, intente con uno diferente!'});
            }
        }
    }
    ajax.open(method, URL, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(`username=${username}&email=${email}&password=${password}`);
}

login = () => {
    var username = document.querySelector('#username').value;
    var password = document.querySelector('#password').value;
    var status = 'OK';

    var textValidator = /^([a-zA-Z0-9\\@\\.\\_])+$/;

    if(username === '') {
        M.toast({html: 'El campo usuario no puede estar vacio!'});
        return;
    } else if(!textValidator.exec(username)) {
        M.toast({html: 'No se permiten caracteres especiales ni espacios en el campo usuario!'});
        return;
    }

    if(password === '') {
        M.toast({html: 'El campo contraseña no puede estar vacio!'});
        return;
    } else if(!textValidator.exec(password)) {
        M.toast({html: 'No se permiten caracteres especiales ni espacios en el campo contraseña!'});
        return;
    }

    var ajax = new XMLHttpRequest();
    var URL = 'ajax/users.ajax.php';
    var method = 'POST';
    ajax.onreadystatechange = () => {
        if(ajax.readyState === 4 && ajax.status === 200) {
            var response = ajax.responseText;

            console.log(response);
            if(response === 'email_invalid') {
                M.toast({html: 'El email enviado no es valido!'});
            } else if(response === 'username_invalid') {
                M.toast({html: 'El usuario enviado no es valido!'});
            } else if(response === 'password_invalid') {
                M.toast({html: 'La contraseña enviado no es valido!'});
            } else if(response === 'fields_empty') {
                M.toast({html: 'Algunos campos estan vacios!'});
            } else if(response === 'OK') {
                M.toast({html: `Los datos se han guardado correctamente! Por favor verifique correo electronico ${email} para ingresar`});
                document.getElementById('form').reset();
            } else if(response === 'user_exist') {
                M.toast({html: 'El usuario ya se encuentra registrado, intente con uno diferente!'});
            } else if(response === 'email_exist') {
                M.toast({html: 'El email ya se encuentra registrado, intente con uno diferente!'});
            } else if(response === 'no_exist') {
                M.toast({html: 'No se encontro ningun resultado! Verifique que el usuario sean correctos o active la cuenta para poder ingresar.'});
            } else if(response === 'login') {
                window.location = 'profile';
            }
        }
    }
    ajax.open(method, URL, true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(`username=${username}&password=${password}&status=${status}`);
}
