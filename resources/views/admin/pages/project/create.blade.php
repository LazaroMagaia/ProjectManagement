
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
                            <h4 class="card-title">Novo projecto</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" action="{{route("project.store")}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Nome</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="Nome do projecto" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="method-column">Metodo</label>
                                                <input type="text" id="method-column" class="form-control"
                                                    placeholder="Metodo para o projecto" name="method">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="price-column">Orçamento</label>
                                                <input type="text" id="price-column" class="form-control"
                                                    placeholder="Orçamento de projecto" name="Price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="start_project">Data inicial</label>
                                                <input type="date" id="start_project" class="form-control"
                                                    name="start_project" placeholder="inicio do projecto">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="done_project">Data da conclusão </label>
                                                <input type="date" id="done_project" class="form-control"
                                                    name="done_project" placeholder="conclusão do projecto">
                                            </div>
                                        </div>
                                        
                                        <section class="section">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card my-2">
                                                        <div class="card-body">
                                                            <div><label for="default">Descrição </label></div>
                                                            <textarea id="default" name="description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">criar</button>
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