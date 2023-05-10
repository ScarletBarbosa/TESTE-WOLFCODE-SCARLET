function validarFormulario() {
    var nome = document.forms["formulario"]["name"].value;
    var email = document.forms["formulario"]["email"].value;
    var senha = document.forms["formulario"]["password"].value;

    if (nome === "") {
        alert("O campo nome é obrigatório");
        return false;
    }

    if (email === "") {
        alert("O campo email é obrigatório");
        return false;
    }

    if (senha.length < 6) {
        alert("A senha deve ter pelo menos 6 caracteres");
        return false;
    }
}