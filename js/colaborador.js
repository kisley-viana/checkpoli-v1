function deletarColaborador(element){
    var codigo = element.getAttribute('codigo'); 
    document.getElementById('codigoVinculo').setAttribute('value',codigo);
    console.log(codigo);
}