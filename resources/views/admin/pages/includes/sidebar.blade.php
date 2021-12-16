<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item {{ Request::is('admin') ? 'active' : '' }}">
                        <a href="{{route('admin.home')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Painel de controle</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ Request::path() == 'admin/project' ? 'active' : '' }}">
                        <a href="{{route('project.home')}}" class='sidebar-link'>
                            <i class="bi bi-bar-chart-fill"></i>
                            <span>Projectos</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ Request::path() == 'admin/friends' ? 'active' : '' }}">
                        <a href="{{route('friends.home')}}" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Amigos</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                            <form method="POST" action="{{ route('logout') }}" class='sidebar-link'>
                                @csrf
                                <button style="border: 0; background-color:transparent;
                                padding-top:8px; color:#25396f;" type="submit">
                                <i class="bi bi-box-arrow-right"></i> <span
                                 style=" position: absolute; margin-top:-4px; color:#25396f;"
                                 >Sair</span>
                            </button>
                            </form>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>