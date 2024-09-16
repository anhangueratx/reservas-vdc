var titleLab = document.getElementById('titleLab');
var infocolor = document.getElementById('info');
var multicolor = document.getElementById('multi');
var usuario = document.getElementById('usuario').value;
var senha = document.getElementById('senha').value;
var informatica = 0
var multidisciplinar = 0
var permitirInformatica = document.getElementById('validacao-info');
var numero = 0



function multi(){
    titleLab.innerHTML = "Laboratório Multidisciplinar";
    $('#multi').css("background-color", "#F04E23");
    $('#info').css("background-color", "#FFF");
    $(".informatica").css("display", "none");
    $(".multidisciplinar").css("display", "flex");
}

function info(){
    titleLab.innerHTML = "Laboratório DE INFORMáTICA";
    $('#info').css("background-color", "#F04E23");
    $('#multi').css("background-color", "#FFF");
    $(".informatica").css("display", "flex");
    $(".multidisciplinar").css("display", "none");
}



function entrar(){
    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;
    if(usuario == "administrador"  && senha == "Kr0t0nAdm"){
        informatica = 1
        location.href = "../pages/admin-info.html";
    }if(usuario == "laboratorio" && senha == "labs@2023"){
        multidisciplinar = 1
        location.href = "../pages/admin-multi.html";
    }else{
        msgError()
        informatica = 0
        multidisciplinar = 0
    }
    
}

function sair(){
    informatica = 0;
    multidisciplinar = 0;
    location.href = "../index.html";
}

const handleSubmit = (event) => {
    event.preventDefault()
}

document.addEventListener("keypress" , function(e){
    if(e.key === "Enter"){
        var usuario = document.getElementById('usuario').value;
        var senha = document.getElementById('senha').value;
        if(usuario === null && senha == null){
            preencha()
        }else{
            entrar()
        }
    }
});

function msgError(){
    $('.inputbox-erro').css("display", "block");

}



function mudarLabs() {
    document.querySelector('#dia1').innerHTML = "1"
    document.querySelector('#labVersion').innerHTML = "Laboratório de Estética"
}

function voltarLabs() {
    document.querySelector('#labVersion').innerHTML = "Laboratório de Anatomia"
}


var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Informática', 'Multidisciplinar'],
    datasets: [{
      label: 'Comparação',
      data: [10, 20], // Valores que serão comparados
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)', // Cor da barra para "Informática"
        'rgba(54, 162, 235, 0.2)' // Cor da barra para "Multidisciplinar"
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)', // Cor da borda da barra para "Informática"
        'rgba(54, 162, 235, 1)' // Cor da borda da barra para "Multidisciplinar"
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
