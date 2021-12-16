
@include('admin.pages.includes.header')
@include('admin.pages.includes.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Amigos</h3>
        <a href="{{route('friends.news')}}" class="btn btn-dark">Nova amizade</a>
    </div>
    <div class="page-content">
        <section class="row">
           <div class="col-12 p-3">
               <div class="card">
                   <div class="card-header">
                        <form action="" class="form-inline">
                            <input type="text" class="form-control"
                            placeholder="Procuro por...">
                            <button class="btn btn-primary">Procurar</button>
                        </form>
                   </div><!--header-->
                <div class="card-body">
                    <div class="friends-wrapper">
                       <h2>Solicitacao de amizades</h2>
                        @foreach ($friends as $friend)
                        <div class="friends-single">
                            <div>
                                <img src="{{asset("images/pizza.png")}}">
                            </div>
                            <div>
                                <h3>{{$friend->name}}</h3>
                                <p>Profissão</p>
                            </div> 
                                <a href="" class="btn btn-success"><i class="bi bi-person-plus-fill"></i></a>
                                <a href="" class="btn btn-danger"><i class="bi bi-person-x-fill"></i></a>
                            </div>
                        </div><!--single-->
                    @endforeach
                    </div><!--friends-->

                </div><!--body-->
               </div><!--card-->
           </div><!--col-->
        </section>
    </div><!--page content-->
    </div>

    @include('admin.pages.includes.footer')