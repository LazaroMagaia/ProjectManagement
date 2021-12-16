
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
        <section class="row">
           <div class="col-12 p-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Projecto {{$project->name}}</h4> 
                        <div class="flex">
                            <a href="" class="btn btn-info"><i class="bi bi-people"></i></a>
                            @if ($project->status)
                            <form action="{{route('project.success',$project->id)}}" method="POST">
                                @csrf
                                <button class="btn btn-danger mx-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                    </svg>
                                </button>
                            </form> 
                            @else
                            <form action="{{route('project.success',$project->id)}}" method="POST">
                                @csrf
                                <button class="btn btn-success mx-1">
                                <i class="bi bi-check-circle-fill"></i></button>
                            </form>
                            @endif
                        </div><!--flex-->
                    </div><!--card header-->
                    <div class="card-body">
                        {!!$project->description!!}
                    </div><!--card-body-->
                </div><!--card-->
                </div><!--col-sm-->
           </div><!--col-->
        </section>
    </div><!--page content-->
    </div>

    @include('admin.pages.includes.footer')