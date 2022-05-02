
function tempo(){
    var msg = document.getElementById('msg').style.display='none';
}





function deletarEvento(element){
    var codigo = element.getAttribute('codigo'); //Captura o valor deste atributo
    document.getElementById('codigoEvento').setAttribute('value',codigo); //Referencia o elemento e seta o valor  
    console.log(codigo);
}
