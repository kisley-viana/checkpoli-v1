function deletarTema(element){
    var codigo = element.getAttribute('codigo'); //Captura o valor deste atributo
    document.getElementById('codigoTema').setAttribute('value',codigo); //Referencia o elemento e seta o valor  
    console.log(codigo);
}
