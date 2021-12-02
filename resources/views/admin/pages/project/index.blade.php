
@include('admin.pages.includes.header')
@include('admin.pages.includes.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Projectos</h3>
    </div>
    <div class="page-content">
        <section class="row">
           <div class="col-12 p-3">
                <div class="card">
                    <div class="card-header ">
                        <a href="{{route('project.create')}}" class="btn btn-dark">Novo projecto</a>
                    </div><!--card header-->
                    <div class="card-body">
                        <section class="section">
                            <div class="row" id="table-borderless">
                                <div class="col-12">
                                    <div class="card">
                                    <!-- table with no border -->
                                    <div class="table-responsive m-2">
                                        <table class="table table-borderless mb-0 text-center">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Metodo</th>
                                                    <th>preco</th>
                                                    <th>data</th>
                                                    <th>situacao</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($projects as $project)
                                                <tr>
                                                    <td class="text-bold-500">{{$project->name}}</td>
                                                    <td>{{$project->method}}</td>
                                                    <td class="text-bold-500">
                                                        {{'MZN '.number_format($project->price, 2, ',', '.')}}
                                                        </td>
                                                    <td>
                                                        {{ date('d/m/Y', strtotime($project->start_project))."-".date('d/m/Y', strtotime($project->done_project))}}
                                                    </td>
                                                    <td>
                                                        <span class="{{$project->status ? ' badge bg-success' : 'badge bg-danger'}}">
                                                            {{$project->status ? 'concluido' : 'em progresso'}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-info">Ver</a>
                                                        <a href="{{route('project.edit',$project->id)}}" class="btn btn-warning">Editar</a>
                                                       <a href="" class="btn btn-danger">Remover</a> 
                                                    </td>
                                                </tr>   
                                                @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div><!--card-body-->
                </div><!--card-->
                </div><!--col-sm-->
           </div><!--col-->
        </section>
    </div><!--page content-->
    </div>

    @include('admin.pages.includes.footer')