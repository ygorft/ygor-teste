var form = document.getElementById('cadastraPassageiro');

if(form.addEventListener){
  form.addEventListener("submit", validaPassageiro);
}

function validaPassageiro(evt){
  var nomePassageiro = document.getElementById('nomePassageiro');
  var nascimentoPassageiro = document.getElementById('nascimentoPassageiro');
  var cpfPassageiro = document.getElementById('cpfPassageiro');
  var contErro = 0;

  var caixa_nome_passageiro = document.querySelector('.msg-nomePassageiro');
  if (nomePassageiro.value == "")
  {
    caixa_nome_passageiro.innerHTML = 'Preencha o nome';
    caixa_nome_passageiro.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    caixa_nome_passageiro.style.display = 'none';
  }

  var caixa_nascimento_passageiro = document.querySelector('.msg-nascimentoPassageiro');
  if (nascimentoPassageiro.value == "")
  {
    caixa_nascimento_passageiro.innerHTML = 'Preencha este campo';
    caixa_nascimento_passageiro.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    caixa_nascimento_passageiro.style.display = 'none';
  }

  var caixa_cpf_passageiro = document.querySelector('.msg-cpfPassageiro');
  if (cpfPassageiro.value == "")
  {
    caixa_cpf_passageiro.innerHTML = 'Preencha este campo';
    caixa_cpf_passageiro.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    caixa_cpf_passageiro.style.display = 'none';
  }

  if (contErro > 0){
     evt.preventDefault();
  }

}