<link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
            <img src="{{ asset('images/admin1.jpg') }}" alt="fotografia" width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <a href="{{url('/inicio/perfil')}}">
                    <h4 class="m-0">Joana Afonso</h4>
                </a>
                <p class="font-weight-light text-muted mb-0">Cargo do admin</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">MENU</p>

    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="/" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Inicio </a>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('/inicio/lista_utentes')}}" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Utentes
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('/inicio/lista_funcionarios')}}" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Funcionários
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark font-italic" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Stock
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('/inicio/stock-alimentos')}}">Alimentos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('/inicio/stock-produtos')}}">Produtos</a>
            </div>
        </li>


        <li class="nav-item">
            <a href="{{url('inicio/ementa')}}" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Ementa
            </a>
        </li>


        <li class="nav-item">
            <a href="{{url('inicio/recados')}}" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Recados
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('inicio/contactos')}}" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Contactos
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('inicio/controlo_mp')}}" class="nav-link text-dark font-italic">
                <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                Matérias-Primas
            </a>
        </li>
    </ul>
    <div class="mt-4 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                {{ __('Terminar sessão') }}
            </x-responsive-nav-link>
        </form>
    </div>
</div>
<!-- End vertical navbar -->

<style>
    .vertical-nav {
        min-width: 17rem;
        width: 17rem;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.4s;
    }
</style>