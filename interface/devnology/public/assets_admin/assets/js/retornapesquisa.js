function RetornaPesquisa(){
    event.preventDefault();
    var termo_pesquisado = $('#termo_pesquisado').val();
    console.log(termo_pesquisado);
    
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax({
        url: "/events/pesquisa",
        type: "post",
        data: {termo_pesquisado: termo_pesquisado},
        dataType: 'html'
    }).done(function(result){
        $("#resultadopesquisa").html(result);        

    });

}