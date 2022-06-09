function validarForm() {
    // Selecionando os dados dos formulário
    let dadosForm = document.querySelector("#formContato").elements
    let nome = dadosForm.nome.value.trim()
    let telefone = dadosForm.telefone.value
    let email = dadosForm.email.value
    let mensagemContato = dadosForm.mensagem.value.trim()

    // Mensagem (alerts)
    let mensagemTitulo = document.querySelector("#mensagemTitulo")
    let mensagemCorpo = document.querySelector("#mensagemCorpo")

    /* Iniciando o processo de validações */

    //Validando o nome
    if (nome.match(/^[A-Z a-z]+$/) == null) {
        mensagemTitulo.innerHTML = `
            <div class="alert alert-danger" role="alert">
                Erro ao inserir um <u>nome</u>
            </div>
        `
        mensagemCorpo.innerHTML = `Informe somente <strong>caracteres textuais</strong> e sem acentos.`
    } else {
        //Validando o email
        mensagemTitulo.innerHTML = `
            <div class="alert alert-danger" role="alert">
                Erro ao inserir um <u>email</u>
            </div>
        `
        if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) == null) {
            mensagemCorpo.innerText = `Digite um email válido.`
        } else {
            // Validando o domínio do email (os caracteres pós @)
            let dominio = email.substring(email.indexOf("@") + 1)
            let dominiosAceitos = ["gmail.com", "hotmail.com", "outlook.com", "ifpb.edu.br", "academico.ifpb.edu.br"]

            if (!(dominiosAceitos.includes(dominio))) {
                mensagemCorpo.innerHTML = `Insira um <strong>domínio de email</strong> válido.`
            } else {
                //Validando telefone -> telefone é opcional
                if (telefone.length > 0 && telefone.match(/^(?:\(0?[1-9]{2}\)|0?[1-9]{2}) ((?:[2-5]|9[1-9])[0-9]{3}\-[0-9]{4})$/) == null) {
                    mensagemTitulo.innerHTML = `
                        <div class="alert alert-danger" role="alert">
                            Erro ao inserir um <u>telefone</u>
                        </div>
                    `
                    mensagemCorpo.innerHTML = `Insira o <strong>DDD</strong> ou <strong>corrija algum caracter</strong> caso seja um telefone celular ou telefone fixo.`
                } else {
                    //Validando a mensagem
                    if (mensagemContato == "") {
                        mensagemTitulo.innerHTML = `
                            <div class="alert alert-danger" role="alert">
                                Erro ao inserir uma <u>mensagem</u>
                            </div>
                        `
                        mensagemCorpo.innerHTML = `Digite uma mensagem.`
                    } else {
                        mensagemTitulo.innerHTML = `
                            <div class="alert alert-success" role="alert">
                                Dados enviados.
                            </div>
                        `
                        mensagemCorpo.innerHTML = `Os dados foram enviados com sucesso. :)`
                        return true
                    }
                }
            }
        }
    }

    return false
}