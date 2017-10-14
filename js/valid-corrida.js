var form = document.getElementById('cadastraCorrida');

if(form.addEventListener){
  form.addEventListener("submit", validaCorrida);
}

function validaCorrida(evt){
  var qualMotorista = document.getElementById('qualMotorista');
  var qualPassageiro = document.getElementById('qualPassageiro');
  var valorCorrida = document.getElementById('valorCorrida');
  var contErro = 0;

  var qual_motorista = document.querySelector('.msg-qualMotorista');
  if (qualMotorista.value == "")
  {
    qual_motorista.innerHTML = 'Preencha o nome';
    qual_motorista.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    qual_motorista.style.display = 'none';
  }

  var qual_passageiro = document.querySelector('.msg-qualPassageiro');
  if (qualPassageiro.value == "")
  {
    qual_passageiro.innerHTML = 'Preencha este campo';
    qual_passageiro.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    qual_passageiro.style.display = 'none';
  }

  var valor_corrida = document.querySelector('.msg-valorCorrida');
  if (valorCorrida.value == "")
  {
    valor_corrida.innerHTML = 'Preencha este campo';
    valor_corrida.style.display = 'block';
    contErro += 1;
  } 
  else 
  {
    valor_corrida.style.display = 'none';
  }

  if (contErro > 0){
     evt.preventDefault();
  }

}