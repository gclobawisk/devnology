@extends ('layouts.layout_admin')
@section ('title', 'Meus Blogs')
@section ('content')

<div class="container-fluid">
    
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Meus Blogs</b></h3>
                    </div>                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Minha lista de Blogs </p>

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
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Pesquisar"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME DO BLOG</th>
                                            <th>URL DO BLOG</th>
                                            <th>VER</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($linksArray as $row)
                
                                        <tr>                   
                                            <td>{{ $row->blog_id }}</td>                           
                                            <td><a href="blogdetalhes/{{ $row->blog_id }}">{{ $row->blog_name }}</a></td>                                                    
                                            <td>{{ $row->blog_url }}</td>    

                                            <td><a style="color:blue;" href="blogdetalhes/{{ $row->blog_id }}"><i class="fas fa-eye"></i></a></td>                                      
                                        </tr>

                                        @endforeach
                                                                                                         
                                    </tbody>
                                  
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Total de Links: </p>
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

@endsection
  
