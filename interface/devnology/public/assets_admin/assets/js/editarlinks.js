function editarLink(e){
    

    var linha = $(e).closest("tr");

    var li_id = linha.find("td:eq(0)").text().trim(); // texto da segunda coluna TD
    var li_titulo = linha.find("td:eq(1)").text().trim(); // texto da segunda coluna TD
    var li_url = linha.find("td:eq(2)").text().trim(); // texto da segunda coluna TD

    $("#li_id").val(li_id);
    $("#li_titulo").val(li_titulo);
    $("#li_url").val(li_url);

}