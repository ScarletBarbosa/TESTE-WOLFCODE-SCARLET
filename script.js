function valida(){

    var nome = formulario.name;
    var email = formulario.email;
    var password = formulario.password;
    
    if (nome.value == '') {
        alert('Nome não informado!');
        nome.focus();
    } if (email.value == '') {
        alert('E-mail não informado!');
        email.focus();
    } if (password.lenght < 6) {
        alert('A senha deve conter o menos 6 digitos!');
        password.focus();
    }
}