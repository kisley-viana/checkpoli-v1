function deletarColaborador(element){
    var codigo = element.getAttribute('codigo'); 
    document.getElementById('codigoVinculo').setAttribute('value',codigo);
    console.log(codigo);
}

function addParticipante(){
    /** var colaborador = document.getElementById('addColaborador').value;
    var participante = document.getElementById('participante').setAttribute('value',colaborador);
    console.log(colaborador);
    var planilha = document.getElementById('planilhaColaboradores');
    var item = document.createElement('p');
    item.textContent = 'yhvui';
    planilha.appendChild(item);
    */

    const addCelula = document.getElementById('tbody');
    //console.log('33');

    var select = document.getElementById('addColaborador');
    var idColaborador = select.options[select.selectedIndex].value;
    var nomeColaborador = select.options[select.selectedIndex].text;
    var cargo = select.options[select.selectedIndex].getAttribute('cargo');
    
    const coluna = document.createElement('tr'); 
    var celula = document.createElement('td');
    var conteudo;
    conteudo.innerHTML ='<td>'+'<input type="hidden" value='+idColaborador+'>'+nomeColaborador+'</td>'+'<td>'+cargo+'</td>';
    //celula.appendChild(addCelula.innerHTML = '<td>'+'<input type="hidden" name="idColaborador" value='+idColaborador+'>'+nomeColaborador+'</td>'+'<td>'+cargo+'</td>');
    addCelula.appendChild(celula);
    addCelula.appendChild(conteudo);
    addCelula.appendChild(coluna);
    
    
    //celula.appendChild(conteudo); 
    //const addCelula = document.getElementById('tbody').appendChild(celula);

    //addCelula.innerHTML="<tr><td>"+"<input type='hidden' name='idColaborador' value='"+idColaborador+"'"+">"+nomeColaborador+"</td>"+"<td>"+cargo+"</td></tr>";
    console.log(idColaborador);
    console.log(nomeColaborador);
    console.log(cargo);



}