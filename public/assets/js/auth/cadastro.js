function formatarCPF() {
    let campoCPF = document.getElementById("cpf");
    let valor = campoCPF.value;

    valor = valor.replace(/\D/g, '');

    valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
    valor = valor.replace(/(\d{3})(\d)/, '$1.$2');
    valor = valor.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

    campoCPF.value = valor;
}