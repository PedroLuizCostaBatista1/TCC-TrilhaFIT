function mostrarSenha() {
    const senhaCampo = document.getElementById("senha-campo");
    const botaoMostrarSenha = document.getElementById("botao-mostrar-senha");
    const iconeMostrarSenha = document.getElementById("icone-mostrar-senha");

    if (senhaCampo.type === "password") {
        senhaCampo.type = "text";
        iconeMostrarSenha.textContent = "visibility";
    } else {
        senhaCampo.type = "password";
        iconeMostrarSenha.textContent = "visibility_off";
    }
}

function mudarEstadoDoTexto(botao, texto) {
    const formulario = botao.closest('form');

    if (formulario && !formulario.checkValidity()) {
        formulario.reportValidity();
        return;
    }

    const icone = botao.querySelector('.material-symbols-outlined');

    setTimeout(() => {
        botao.disabled = true;
    }, 1);

    if (icone) {
        botao.innerHTML = icone.outerHTML + ' ' + texto;
    } else {
        botao.innerHTML = texto;
    }
}

async function enviarFormulario(formulario, event) {
    event.preventDefault();

    const formularioData = new FormData(formulario);
    const mensagem = formulario.querySelector('.mensagem-erro');

    if (mensagem) {
        mensagem.style.display = "none";
    }

    const url = formulario.getAttribute('action');
    const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    if (!url) {
        console.error('O formulário precisa do atributo "data-url" definido.');
        return;
    }

    try {
        const resposta = await fetch(url, {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': token || '',
                'Accept': 'application/json'
            },
            body: formularioData
        });

        const data = await resposta.json();

        if (resposta.ok) {
            if (data.redirecionar) {
                window.location.href = data.redirecionar;
            } else if (data.mensagem && mensagem) {
                console.log('weeeee');
            }
        } else {
            if (mensagem) {
                mensagem.textContent = data.mensagem || 'Ocorreu um erro.';
                mensagem.style.display = 'block';
            }
        }
    } catch (error) {
        console.error(error);
    }
}

/*const campos = document.querySelectorAll("input");
const mensagem = document.getElementById("mensagem");

if (mensagem) {
    campos.forEach((campo) => {
        campo.addEventListener("input", (evento) => {
            mensagem.style.display = "none";
        });
    });
}*/