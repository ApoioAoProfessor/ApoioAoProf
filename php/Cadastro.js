function validaForm(frm) {
       
    if(frm.nome.value == "" || frm.nome.value == null) {
        alert("Por favor, indique o seu nome.");
        frm.nome.focus();
        return false;
    }

    else if(frm.email.value.indexOf("@") == -1 ||
      frm.email.valueOf.indexOf(".") == -1 ||
      frm.email.value == "" ||
      frm.email.value == null) {
        alert("Por favor, indique um e-mail válido.");
        frm.email.focus();
        return false;
    }

    else if(frm.ra.value == "" || frm.ra.value == null) {
        alert("Por favor, indique o seu nome.");
        frm.ra.focus();
        return false;
    }

}