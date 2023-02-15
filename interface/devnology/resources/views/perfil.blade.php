@extends ('layouts.layout_admin')
@section ('title', 'Perfil')
@section ('content')

<?php $user = Auth::user() ?>

<style>
.input-group-text{width: 17%;}body {font-family: Helvetica;}input[type="file"] {display: none;}.labelfoto {padding: 10px 10px;width: 100%;background-color: red; color: white;text-transform: uppercase;text-align: center; display: end; margin-top: -60px; cursor: pointer;}
.middle{opacity: 0;}.aaaaa:hover .middle {opacity: 1;}.mb-2.mt-4{display: grid;}
</style>



<div class="container-fluid">
                    <h3 class="text-dark mb-4">Meu Perfil</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">

                            <div class="card mb-3 aaaaa">
                                <div class="card-body text-center shadow"><img class="mb-2 mt-4" src="assets_admin/assets/img/avatars/<?=$user->image?>" width="100%" height="100%">
                                    
                                    <form method="POST" action="/events/processaimagem" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <div class="middle">
                                                <label for="inputArquivo" class="labelfoto">Alterar Foto</label>
                                            </div>
                                            
                                            <input type="file" onchange="trocarFoto()" class="file text-light bg-dark" name="image" id="inputArquivo" accept="image/*," required/>
                                                
                                                <div id="resultadoUpload">
                                                
                                                </div>

                                                @if(session('formato_invalido'))
                                                    <p class="alert alert-danger text-center"> <b>{{ session('formato_invalido') }} </b></p>
                                                @endif
                                            
                                        </div>
                                    </form>
                                
                                </div>
                            </div>

                        

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Links Favoritos</h6>
                                </div>
                                <div class="card-body">

                                    <h4 class="small fw-bold">Link 1<span class="float-end">ver</span></h4>
                                    <h4 class="small fw-bold">Link 2<span class="float-end">ver</span></h4>
    
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card textwhite bg-primary text-white shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card textwhite bg-success text-white shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Minhas Informações</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="get" action="">
                                                <div class="row">
                                                    
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Endereço de E-mail</strong></label><input class="form-control" type="email" id="email" value="{{$user->email}}" name="email"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Nome Completo</strong></label><input class="form-control" type="text" id="first_name" value="{{$user->name}}" name="first_name"></div>
                                                    </div>
                                                  
                                                </div>
                                                <div class="mb-3"><button hidden class="btn btn-primary btn-sm" type="submit">Salvar Alterações</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Contato</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="mb-3"><label class="form-label" for="address"><strong>Endereço</strong></label><input class="form-control" type="text" id="address" placeholder="Rua Tal" name="address"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="city"><strong>Cidade</strong></label><input class="form-control" type="text" id="city" placeholder="RJ" name="city"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="country"><strong>Pais</strong></label><input class="form-control" type="text" id="country" placeholder="BRASIL" name="country"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button hidden class="btn btn-primary btn-sm" type="submit">Salvar&nbsp;Alterações</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

            
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="http://127.0.0.1:8000/assets_admin/assets/js/uploadFoto.js"></script>



@endsection
  
