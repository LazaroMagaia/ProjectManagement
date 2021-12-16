
@include('admin.pages.includes.header')
@include('admin.pages.includes.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Novas amizades</h3>
        <a href="{{URL::previous()}}" class="btn btn-dark">voltar</a>
    </div>
    <div class="page-content">
        <section class="row">
           <div class="col-12 p-3">
               <div class="card">
                   <div class="card-header">
                        <form action="" class="form-inline" >
                            <input type="text" class="form-control" placeholder="Procuro por...">
                            <button class="btn btn-primary">Procurar</button>
                        </form>
                   </div><!--header-->
                <div class="card-body">
                    <div class="friends-wrapper">
                        @foreach ($users as $user)
                        @if ($user->id == $userAuth)
                            @continue
                        @endif
                        <div class="friends-single">
                            <div>
                                <img src="{{asset("images/pizza.png")}}">
                            </div>
                            <div>
                                <h3>{{$user->name}}</h3>
                                <p>Profissão</p>
                            </div> 
                            <div class="flex">
                                <form action="{{route('friends.store',$user->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-info mx-1" type="submit">
                                        <i class="bi bi-person-plus-fill"></i></button>
                                </form>
                                <form action="{{route('friends.store',$user->id)}}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger mx-1" type="submit"> 
                                        <i class="bi bi-person-x-fill"></i></button>
                                </form>
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