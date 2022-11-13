/** Função para definir o cabeçalho da requisição */
function setHeader(data) {

    /** Defino o cabeçalho padrão de requisição */
    let header = {

        /** Formato de envio */
        method: 'post',

        /** Modo de envio */
        mode: 'cors',

        /** Defino o cabeçalho da requisição */
        headers: {

            /** Converto a string para parâmetros de url */
            "Content-Type": "application/x-www-form-urlencoded",

            /** Envio a contagem de caracteres */
            "Content-Length": data.length,

            /** Defino o a prioridade */
            "X-Custom-Header": "ProcessThisImmediately"

        },

        /** Definição do cache */
        cache: 'no-store',

        /** Dados para envio */
        body: data,

    };

    /** Retorno da informação */
    return header;

}

/** Listagem de todos os campos */
function serializeForm(form) {

    /** Obtenho todos os dados do formulario */
    let tempForm = document.getElementById(form);

    /** Obtenho apenas os campos do formulário */
    let tempData = new FormData(tempForm);

    /** Transform os campos do formulário em parâmetros de URL */
    return new URLSearchParams(tempData);

}

/** Função para executar mudanças de páginas */
function sendRequest(data, file) {

            setTimeout(function(){
                
            

            /** Verifico se devo realizar o Serialize */
            if (data !== '' && !data.match(/=/)) {

                /** guardo o serialize */
                data = serializeForm(data)
            }

            /** Url para envio */
            fetch(file + '.php', setHeader(data))

                /** Fetch do objeto */
                .then(response => response.json())

                /** Dados definitivos */
                .then((response) => {

                    /** Retorno a mensagem de erro */
                    window.location.href = response.redirecionamento;

                })

                /** Erros da requisição */
                .catch(error => {

                    /** Retorno a mensagem de erro */
                    alert('Erro');

                })

                /** Encerramento da requisição */
                .finally(() => {})
            }, 3000);

}

function salve() {
    alert('2')
    var save = getElementById('salve');
    save.document.remove('invisible');    
}