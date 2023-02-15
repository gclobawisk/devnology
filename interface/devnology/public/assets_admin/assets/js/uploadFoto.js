function trocarFoto(){
    var arquivo_inserido = $('#inputArquivo').val();
    event.preventDefault();
    document.getElementById("resultadoUpload").innerHTML = '<p class="alert alert-danger">Uma nova foto foi selecionada: ' + arquivo_inserido + '</p>' +
    '<button type="submit" class="btn btn-primary">Salvar Alteração</button>' +
    ' <a href="http://127.0.0.1:8000/perfil" class="btn btn-danger">Cancelar Envio</a>';

}