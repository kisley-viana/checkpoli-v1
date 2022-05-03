function deletarTema(element){
    var codigo = element.getAttribute('codigo'); //Captura o valor deste atributo
    document.getElementById('codigoTema').setAttribute('value',codigo); //Referencia o elemento e seta o valor  
    console.log(codigo);
};

function editarTema(element){
    var id = element.getAttribute('idTema');
    var nome = element.getAttribute("nomeTema");
    console.log(nome);

    document.getElementById('idTema').setAttribute('value',id);
    document.getElementById('nometema').setAttribute('value',nome);
    console.log("valor id: "+id);
    console.log("nome tema: "+nome);
}
