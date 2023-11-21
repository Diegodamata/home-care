const form = document.querySelector("#formu");
const userName = document.getElementById("nome");
const data = document.getElementById("data_nasc");
const rg = document.getElementById("rg");
const cpf = document.getElementById("cpf");
const email = document.getElementById("email");
const fone = document.getElementById("fone");
const cep = document.getElementById("cep");
const religiao = document.getElementById("religiao");
const profissao = document.getElementById("profissao");

//variaveis de adicionar e de erro do input estado civil
const inputEstadoCivil = document.querySelectorAll('input[name="estado_civil"]');
const estadoCivilError = document.querySelector('.estado-civil-error');

//variavel de adicionar raca e erro
const inputRaca = document.querySelectorAll('input[name="raca"]');
const racaErro = document.querySelector('.raca-error');

//variavel para adicionar um erro de genero
const inputGenero = document.querySelectorAll('input[name="genero"]') ;
const generoErro = document.querySelector('.genero-error');

//variavel para adicionar um erro de escolaridade
const inputEscolaridade = document.querySelectorAll('input[name="escola"]');
const escolaridadeErro = document.querySelector('.escolaridade-error');

//variaveis para verificar se esta selecionado alguma opção de radio de trabalho
const opcoesRadio = document.querySelectorAll('input[name="opcoes"]');
const campoFoco = document.getElementById('campoFoco');
const trabalhoErro = document.querySelector('.trabalho-error');

//variaveis para verificar se esta selecionado alguma opção de radio de voce é
const inputVoceE = document.querySelectorAll('input[name="vce"]');
const voceeErro = document.querySelector('.vocee-error');
const campoFocoVCe = document.getElementById('outro_vce')

//variaveis para verificar se esta selecionado alguma opção de radio de vc tem filho
const inputVCtemFilhos = document.querySelectorAll('input[name="filhos" ]');
const vcTemErro = document.querySelector('.filhos-error');
const campoFocoFilhoqtd = document.getElementById('filhos_qtd')
const campoFocoFilhoIdade = document.getElementById('filhos_idade')
const campoFocoFilhoEscola = document.getElementById('filhos_escolaridade')

console.log(inputVCtemFilhos);

form.addEventListener("submit", (event) => {
    event.preventDefault();

    checarSeEstaCorreto();

    const valida = validateEstadoCivil();
    const validaRaca = validateRaca();
    const validaGenero = validateGenero();
    const validaEscolaridade = validateEscolaridade();
    const validaTrabalho = validateTrabalho();
    const validaVocee = validateVOCEe();
    const validaFilhos = validateFilhos();
    if(valida && validaRaca && validaGenero && validaEscolaridade && validaTrabalho && validaVocee && validaFilhos){
        console.log("foii");
    
    }
   
});


userName.addEventListener("input", () => {
    checarNome();
})
data.addEventListener("input", () => {
    checarData();
  })
  rg.addEventListener("input", () => {
    checarRG();
  })
  cpf.addEventListener("input", () => {
    checarCPF();
  })
  email.addEventListener("input", () => {
    checarEmail();
  })
  fone.addEventListener("input", () => {
    checarFone();
  })
  cep.addEventListener("input", () => {
    checarCEP();
  })
  religiao.addEventListener("input", ()=>{
    checarReligiao();
  })
  profissao.addEventListener("input", ()=>{
    checarProfissao();
  })


function checarNome() { //função para checar o nome se esta vazio
    const nameValue = userName.value; //adicionei o valor do input a uma variavel

    if(nameValue === ""){ //se vazio
        errorInput(userName, "O nome é obrigatório.") //chama a classe errorIput e passa dois parametros
    }else if(nameValue.length > 3){
        errorInput(userName, "Mínimo 3 caracteres.");
    }else{
        const formItem = userName.parentElement;
        formItem.className = "group";
      }
}
function checarData() { //função para checar o nome se esta vazio
    const dataValue = data.value; //adicionei o valor do input a uma variavel

    if(dataValue === ""){ //se vazio
        errorInput(data, "Informe a data.") //chama a classe errorIput e passa dois parametros
    }else{
        const formItem = data.parentElement;
        formItem.className = "group";
      }
}

function checarRG() { //função para checar o nome se esta vazio
    const rgValue = rg.value; //adicionei o valor do input a uma variavel

    if(rgValue === ""){ //se vazio
        errorInput(rg, "Informe o seu RG.") //chama a classe errorIput e passa dois parametros
    }else if(rgValue < 0){
        errorInput(rg, "Não pode numeros negativos.")
    }else{
        const formItem = rg.parentElement;
        formItem.className = "group";
      }
}
function checarCPF() { //função para checar o nome se esta vazio
    const cpfValue = cpf.value; //adicionei o valor do input a uma variavel

    if(cpfValue === ""){ //se vazio
        errorInput(cpf, "Informe o seu CPF.") //chama a classe errorIput e passa dois parametros
    }else if(cpfValue < 0){
        errorInput(cpf, "Não pode numeros negativos.");
    }else{
        const formItem = cpf.parentElement;
        formItem.className = "group";
      }
}
function checarEmail() { //função para checar o nome se esta vazio
    const emailValue = email.value; //adicionei o valor do input a uma variavel

    if(emailValue === ""){ //se vazio
        errorInput(email, "Informe o seu email.") //chama a classe errorIput e passa dois parametros
    }else{
        const formItem = email.parentElement;
        formItem.className = "group";
      }
}
function checarFone() { //função para checar o nome se esta vazio
    const foneValue = fone.value; //adicionei o valor do input a uma variavel

    if(foneValue === ""){ //se vazio
        errorInput(fone, "Informe o seu telefone.") //chama a classe errorIput e passa dois parametros
    }else if(foneValue < 0){
        errorInput(fone, "Não pode numeros negativos.")
    }else{
        const formItem = fone.parentElement;
        formItem.className = "group";
      }
}
function checarCEP() { //função para checar o nome se esta vazio
    const cepValue = cep.value; //adicionei o valor do input a uma variavel

    if(cepValue === ""){ //se vazio
        errorInput(cep, "Informe o seu cep.") //chama a classe errorIput e passa dois parametros
    }else if(cepValue < 0){
        errorInput(cep, "Não pode numeros negativos.")
    }else{
        const formItem = cep.parentElement;
        formItem.className = "group";
      }
}
function checarReligiao (){
    const cepValue = religiao.value; //adicionei o valor do input a uma variavel

    if(cepValue === ""){ //se vazio
        errorInput(religiao, "Informe sua religião.") //chama a classe errorIput e passa dois parametros
    }else if(cepValue.length > 3){
        errorInput(religiao, "Mínimo 3 caracteres.")
    }else{
        const formItem = religiao.parentElement;
        formItem.className = "group";
      }
}
function checarProfissao (){
    const profissaoValue = profissao.value; //adicionei o valor do input a uma variavel

    if(profissaoValue === ""){ //se vazio
        errorInput(profissao, "Informe sua profissão.") //chama a classe errorIput e passa dois parametros
    }else if(profissaoValue.length > 3){
        errorInput(profissao, "Mínimo 3 caracteres.")
    }else{
        const formItem = profissao.parentElement;
        formItem.className = "group";
      }
}



function checarSeEstaCorreto (){ //função para checar se todos os campos estão preencgidos
    checarNome();
    checarData();
    checarRG();
    checarCPF();
    checarEmail();
    checarFone();
    checarCEP();
    checarReligiao();
    checarProfissao();
   
    const formItems = form.querySelectorAll(".group")
  
    const isValid = [...formItems].every( (item) => { //every vai verificar se todas as condições passa em alguma condição q a gente colocar
      return item.className === "group"; //pro formulario ser enviado precisa estar todos validados com as classe group
    });
  
    if(isValid){ //se estiver validado ira enviar
      alert("CADASTRADO COM SUCESSO!")
    }
}

function errorInput (input, msg){ //função para o erro se os campos não estiverem preenchidos vai adicionar uma classe com a msg de erro
    const item = input.parentElement; 
    const msgError = item.querySelector("a");
    
    msgError.innerText = msg;

    item.className = "group error";
}

//função para o radio estado civil
function validateEstadoCivil() {
    let isRadioValid = false;

    for (const radioOption of inputEstadoCivil) {
        if (radioOption.checked) {
            isRadioValid = true;
            break;
        }
    }

    if (!isRadioValid) {
        estadoCivilError.classList.remove('error-hidden');
    } else {
        estadoCivilError.classList.add('error-hidden');
    }

    return isRadioValid;
}

//function de validar a raca
function validateRaca() {
    let isRadioValid = false;

    for (const radioOption of inputRaca) {
        if (radioOption.checked) {
            isRadioValid = true;
            break;
        }
    }

    if (!isRadioValid) {
        racaErro.classList.remove('error-hidden');
    } else {
        racaErro.classList.add('error-hidden');
    }

    return isRadioValid;
}
// function para validsar o genero
function validateGenero() {
    let isRadioValid = false;

    for (const radioOption of inputGenero) {
        if (radioOption.checked) {
            isRadioValid = true;
            break;
        }
    }

    if (!isRadioValid) {
        generoErro.classList.remove('error-hidden');
    } else {
        generoErro.classList.add('error-hidden');
    }

    return isRadioValid;
}
//function para validar o genero
function validateEscolaridade() {
    let isRadioValid = false;

    for (const radioOption of inputEscolaridade) {
        if (radioOption.checked) {
            isRadioValid = true;
            break;
        }
    }

    if (!isRadioValid) {
        escolaridadeErro.classList.remove('error-hidden');
    } else {
        escolaridadeErro.classList.add('error-hidden');
    }

    return isRadioValid;
}
function validateTrabalho(){
    let isRadioValid = false;

    for (const radioOption of opcoesRadio) {
        if (radioOption.checked) {
            isRadioValid = true;
            break;
        }
    }

    if (!isRadioValid) {
        trabalhoErro.classList.remove('error-hidden');
    } else {
        trabalhoErro.classList.add('error-hidden');
    }

    return isRadioValid;
}
function validateVOCEe(){
    let isRadioValid = false;

    for (const radioOption of inputVoceE) {
        if (radioOption.checked) {
            isRadioValid = true;
            break;
        }
    }

    if (!isRadioValid) {
        voceeErro.classList.remove('error-hidden');
    } else {
        voceeErro.classList.add('error-hidden');
    }

    return isRadioValid;
}
function validateFilhos(){
    let isRadioValid = false;

    for (const radioOption of inputVCtemFilhos) {
        if (radioOption.checked) {
            isRadioValid = true;
            break;
        }
    }

    if (!isRadioValid) {
        vcTemErro.classList.remove('error-hidden');
    } else {
        vcTemErro.classList.add('error-hidden');
    }

    return isRadioValid;
}

opcoesRadio.forEach(opcao => {
    opcao.addEventListener('change', () => {
        // Verifica se a opção desejada está selecionada
        if (opcao.value === 'sim') { // Troque 'opcao2' pela opção desejada
            // Foca no campo de texto
            campoFoco.focus();
            campoFoco.disabled = false;
        }else{
            campoFoco.disabled = true;
        }
    });
});

inputVoceE.forEach(opcao1 => {
    opcao1.addEventListener('change', () => {
        // Verifica se a opção desejada está selecionada
        if (opcao1.value === 'vce_outro') { // Troque 'opcao2' pela opção desejada
            // Foca no campo de texto
            campoFocoVCe.focus();
            campoFocoVCe.disabled = false;
        }else{
            campoFocoVCe.disabled = true;
        }
    });
});

inputVCtemFilhos.forEach(opcao1 => {
    opcao1.addEventListener('change', () => {
        // Verifica se a opção desejada está selecionada
        if (opcao1.value === 'filhoss') { // Troque 'opcao2' pela opção desejada
            // Foca no campo de texto
            campoFocoFilhoqtd.focus();
            campoFocoFilhoIdade.focus();
            campoFocoFilhoEscola.focus();
            campoFocoFilhoqtd.disabled = false;
            campoFocoFilhoIdade.disabled = false;
            campoFocoFilhoEscola.disabled = false;
        }else{
            campoFocoFilhoqtd.disabled = true;
            campoFocoFilhoIdade.disabled = true;
            campoFocoFilhoEscola.disabled = true;
        }
    });
});



// disabled = true para desabilitar o input