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

function mostrarMensagem(formulario, campo, texto) {
    const elemento = formulario.querySelector(`#erro-${campo}`);

    if (elemento && texto) {
        elemento.textContent = texto;
        elemento.style.display = 'block';
        elemento.classList.add('show');

        setTimeout(() => {
            elemento.classList.add('animar');
        }, 10);
    }
}

function esconderMensagem(formulario) {
    formulario.querySelectorAll('.mensagem-erro').forEach(elemento => {
        elemento.classList.remove('animar');
        setTimeout(() => {
            elemento.classList.remove('show');
        }, 400);
    });
}

function mudarEstadoDoTexto(botao, carregando) {
    console.log(botao.innerHTML);
    const textoOriginal = botao.querySelector('.botao-texto');
    const textoCarregando = botao.getAttribute('texto-carregando');

    if (carregando) {
        botao.dataset.originalText = textoOriginal.textContent;
        botao.disabled = true;
        textoOriginal.textContent = textoCarregando;
    } else {
        botao.disabled = false;
        textoOriginal.textContent = botao.dataset.originalText;
    }
}

function mostrarPopup(mensagem) {
    
}

async function enviarFormulario(formulario, event) {
    event.preventDefault();

    const botaoEnviar = formulario.querySelector('button[type="submit"]');
    
    esconderMensagem(formulario);
    mudarEstadoDoTexto(botaoEnviar, true);

    const formularioData = new FormData(formulario);
    const url = formulario.getAttribute('action');
    const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    try {
        const resposta = await fetch(url, {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json'
            },
            body: formularioData
        });

        const data = await resposta.json();

        if (resposta.ok) {
            if (data.redirecionar) {
                window.location.href = data.redirecionar;
                return;
            }
            
            const evento = new CustomEvent('formularioSucesso', { detail: { formulario, data } });
            document.dispatchEvent(evento);
        } else {
            if (data.errors) {
                Object.keys(data.errors).forEach(campo => {
                    const mensagem = data.errors[campo][0];
                    mostrarMensagem(formulario, campo, mensagem);
                });
            }
        }
    } catch (error) {
        console.error(error);
    } finally {
        mudarEstadoDoTexto(botaoEnviar, false);
    }
}