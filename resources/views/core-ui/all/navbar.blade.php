<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="http://www.sena.edu.co/Style%20Library/alayout/images/logoSena.png"
            width="40" height="40" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="http://www.sena.edu.co/Style%20Library/alayout/images/logoSena.png"
            width="30" height="30" alt="CoreUI Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="{{route('Administrador.index')}}">Inicio</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{route('Administrador.perfil')}}">Perfil</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Por asignar</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <img class="img-avatar"
                    src="https://www.americanaircraftsales.com/wp-content/uploads/2016/09/no-profile-img.jpg"
                    alt="admin@bootstrapmaster.com">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Cuenta</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-shield"></i> Configuración cuenta</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-lock"></i> Salir</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>