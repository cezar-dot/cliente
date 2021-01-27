function acesso(form) {



    if ((form.nome.value == "cezar" && form.senha.value == "987789") || (form.nome.value == "lucas" && form.senha.value == "123") ||
        (form.nome.value == "alexandre" && form.senha.value == "Prestacon@2021") || (form.nome.value == "roosevelt" && form.senha.value == "Prestacon@2021")) {

        location = "acesso.html"

    } else {

        alert("Dados Incorretos")



    }
}