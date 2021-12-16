
@include('admin.pages.includes.header')
@include('admin.pages.includes.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Painel de controle</h3>
    </div>
    <div class="page-content">

        <section class="row">
           <div class="col-12 p-3">
                <div class="card-project">
                    <div class="card-project-single">
                        <div>
                            <p>{{$projectsON}}</p>
                            <span>Projectos concluidos</span>
                        </div>
                        <div>
                            <i class="bi bi-bookmark-check-fill"></i>
                        </div>
                    </div><!--card-project-single-->

                    <div class="card-project-single">
                        <div>
                            <p>{{$projectsOFF}}</p>
                            <span>Projectos não concluidos</span>
                        </div>
                        <div>
                            <i class="bi bi-bookmark-x-fill"></i>
                        </div>
                    </div><!--card-project-single-->

                </div><!--card-project-->
           </div><!--col-->
        </section>
    </div><!--page content-->
    </div>

    @include('admin.pages.includes.footer')