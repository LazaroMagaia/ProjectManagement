
@include('admin.pages.includes.header')
@include('admin.pages.includes.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Projectos</h3> <a href="{{URL::previous()}}" class="btn btn-dark">voltar</a>
    </div>
    <div class="page-content">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Editar {{$project->name}}</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{route("project.update",$project->id)}}" method="POST">
                                    @csrf
                                    @method("PUT")
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nome</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                value="{{$project->name}}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="method-column">Metodo</label>
                                                <input type="text" id="method-column" class="form-control"
                                                value="{{$project->method}}" name="method">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="price-column">Or??amento</label>
                                                <input type="text" id="price-column" class="form-control"
                                                value="{{$project->price}}" name="Price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="start_project">Data inicial</label>
                                                <input type="date" id="start_project" class="form-control"
                                                value="{{$project->start_project}}" name="start_project">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="done_project">Data da conclus??o </label>
                                                <input type="date" id="done_project" class="form-control"
                                                value="{{$project->done_project}}" name="done_project">
                                            </div>
                                        </div>
                                        <section class="section">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card my-2">
                                                        <div class="card-body">
                                                            <div><label for="default">Descri????o 
                                                            </label></div>
                                                            <textarea id="default" name="description"
                                                            value="{{$project->description}}">
                                                            
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end p-2">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">editar</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">limpar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!--page content-->
    </div>

    @include('admin.pages.includes.footer')