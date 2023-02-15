@extends ('layouts.layout_admin')
@section ('title', 'Detalhes do Blog')
@section ('content')

<?php $GLOBALS['url'] = "http://localhost:8000";
$url = $GLOBALS['url'];

?>

<style>
    td{
        color: black;
    }
    th{
        font-weight: bold;
        color: black;
    }
</style>

<div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Links de <b>devgo.com.br</b></h3>
                        <a class="btn btn-success btn-sm d-none d-sm-inline-block" role="button" href="javascript: if(confirm('Deseja Realizar Crawling na DevGo?')) location.href='http://127.0.0.1:8000/crawler'"><i class="fas fa-link fa-sm text-white-50"></i>&nbsp;Fazer Crawling</a>
                        <a class="btn btn-danger btn-sm d-none d-sm-inline-block" role="button" href="javascript: if(confirm('Deseja Apagar todos os Links deste Blog?')) location.href='http://localhost:8000/deletartodososlinks'"><i class="fas fa-trash fa-sm text-white-50"></i>&nbsp;Apagar Links</a>
                    </div>                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Minha lista de links</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Mostrar&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Pesquisar" oninput="RetornaPesquisa()" id="termo_pesquisado" name="termo_pesquisado" ></label></div>
                                </div>
                            </div>

                            @if(session('mensagem_alteracao_sucesso'))
                            <p class="alert alert-success text-center"> <b>{{ session('mensagem_alteracao_sucesso') }} </b></p>
                            @endif

                            @if(session('mensagem_exclusao'))
                            <p class="alert alert-danger text-center"> <b>{{ session('mensagem_exclusao') }} </b></p>
                            @endif

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="table-responsive table mt-2" id="resultadopesquisa" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TÍTULO</th>
                                            <th>LINK</th>
                                            <th>DATA</th>
                                            <th>EDIT</th>
                                            <th>DEL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        

                                        @foreach($linksArray as $row)
                
                                        <tr>           
                                            <td>{{ $row->li_id }}</td>                           
                                            <td>{{ $row->li_titulo }}</td>                           
                                            <td>{{ $row->li_url }}</td>                           
                                            <td>{{ $row->li_data }}</td>    

                                            <td><a style="color:blue;"><i class="fas fa-user-edit" data-toggle="modal" data-target="#exampleModal" onclick="editarLink(this)"></i></td>
                                            <td><a style="color:red;" href="javascript: if(confirm('Deseja Editar esse Registro?')) location.href='../events/deletarlink/{{$row->li_id}}/{{$row->li_blog_id}}'"><i class="fas fa-trash"></i></a></td>
                                                                                     
                                        </tr>

                                        @endforeach

                                                                                                         
                                    </tbody>
                                  
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Total de Links: {{count($linksArray)}}</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Links</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">   

            <form name="form" method="POST" action="/editarlink" >
            @csrf
      
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">ID: </span> 
                    <input type="text" class="form-control" id="li_id" name="li_id" aria-label="ano" aria-describedby="addon-wrapping" value="" readonly>
                </div></br>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Título: </span> 
                    <input type="text" class="form-control" id="li_titulo" name="li_titulo" aria-label="ano" aria-describedby="addon-wrapping" value="">
                </div></br>

                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">LINK: </span> 
                    <input type="text" class="form-control" id="li_url" name="li_url" aria-label="ano" aria-describedby="addon-wrapping" value="">
                </div></br>

                {{-- O campo abaixo é apenas para captura do BLOG ID --}}
                <input type="text"  class="form-control" id="li_blog_id" name="li_blog_id" aria-label="ano" aria-describedby="addon-wrapping" value="<?php if(isset($linksArray[0]['li_blog_id'] )) { echo $linksArray[0]['li_blog_id']; }?>" hidden>

                                
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Atualizar</button>

                </form>
            
            </div>
        </div>
       
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="http://127.0.0.1:8000/assets_admin/assets/js/editarlinks.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


@endsection
  
