var form = document.getElementById('cadastraMotorista');

if(form.addEventListener){
  form.addEventListener("submit", validaCadastro);
}

function validaCadastro(evt){
  var nomeMotorista = document.getElementById('nomeMotorista');
  var nascimentoMotorista = document.getElementById('nascimentoMotorista');
  var cpfMotorista = document.getElementById('cpfMotorista');
  var modeloCarro = document.getElementById('modeloCarro');
  var statusMotorista = document.getElementById('statusMotorista');
  var sexoMotorista = document.getElementById('sexoMotorista');
  var contErro = 0;

  var caixa_nome_motorista = document.querySelector('.msg-nomeMotorista');
  if (nomeMotorista.value == "")
  {
    caixa_nome_motorista.innerHTML = 'Preencha o nome';
    caixa_nome_motorista.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    caixa_nome_motorista.style.display = 'none';
  }

  var caixa_nascimento_motorista = document.querySelector('.msg-nascimentoMotorista');
  if (nascimentoMotorista.value == "")
  {
    caixa_nascimento_motorista.innerHTML = 'Preencha este campo';
    caixa_nascimento_motorista.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    caixa_nascimento_motorista.style.display = 'none';
  }

  var caixa_cpf_motorista = document.querySelector('.msg-cpfMotorista');
  if (cpfMotorista.value == "")
  {
    caixa_cpf_motorista.innerHTML = 'Preencha este campo';
    caixa_cpf_motorista.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    caixa_cpf_motorista.style.display = 'none';
  }

  var caixa_modelo_motorista = document.querySelector('.msg-modeloCarro');
  if (cpfMotorista.value == "")
  {
    caixa_modelo_motorista.innerHTML = 'Preencha este campo';
    caixa_modelo_motorista.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    caixa_modelo_motorista.style.display = 'none';
  }

  if (contErro > 0){
     evt.preventDefault();
  }

}