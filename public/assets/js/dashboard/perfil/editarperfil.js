function enviarForm(form, event) {
    const confirmacao = confirm('Tem certeza? Esta ação substituirá as informações anteriores');

    if (confirmacao) {
        return enviarFormulario(form, event);
    } else {
        return;
    }
}