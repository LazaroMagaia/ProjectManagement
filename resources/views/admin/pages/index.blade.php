
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
                    @for ($i = 0; $i < 3; $i++)
                    <div class="card-project-single">
                        <div>
                            <p>150</p>
                            <span>Projectos concluidos</span>
                        </div>
                        <div>
                            <i class="bi bi-bookmark-check-fill"></i>
                        </div>
                    </div><!--card-project-single-->
                    @endfor

                </div><!--col-sm-->
           </div><!--col-->
        </section>
    </div><!--page content-->
    </div>

    @include('admin.pages.includes.footer')