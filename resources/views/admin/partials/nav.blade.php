<ul class="sidebar-nav">
    <li>
        <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Inicio</span></a>
    </li>
    @can('haveAccess', 'user.index')
    <li>
        <a href="#" class="sidebar-nav-menu {{ request()->is('usuarios*') ? 'active' : '' }}"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Usuarios</span></a>
        <ul>
            <li>
                <a href="{{ route('usuarios.index') }}" class="{{ request()->is('usuarios') ? 'active' : '' }}">Ver Todos <i class="fa fa-eye sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
            <li>
                <a href="{{ route('usuarios.create') }}">Agregar Nuevo <i class="fa fa-user-plus sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
            <li>
                <a href="{{ route('reports.user') }}">Ver Reportes <i class="fa fa-search sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
        </ul>
    </li>
    @endcan
    @can('haveAccess', 'role.index')
    <li>
        <a href="#" class="sidebar-nav-menu {{ request()->is('role*') ? 'active' : '' }}"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Roles</span></a>
        <ul>
            <li>
                <a href="{{ route('role.index') }}" class="{{ request()->is('role') ? 'active' : '' }}">Ver Todos <i class="fa fa-eye sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
            <li>
                <a href="{{ route('role.create') }}">Agregar Nuevo <i class="fa fa-user-plus sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
        </ul>
    </li>
    @endcan
    <li>
        <a href="#" class="sidebar-nav-menu {{ request()->is('role*') ? 'active' : '' }}"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Divisiones</span></a>
        <ul>
            <li>
                <a href="{{ route('divisiones.index') }}" class="{{ request()->is('divisiones') ? 'active' : '' }}">Ver Todos <i class="fa fa-eye sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
            <li>
                <a href="{{ route('divisiones.create') }}">Agregar Nuevo <i class="fa fa-user-plus sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" class="sidebar-nav-menu {{ request()->is('role*') ? 'active' : '' }}"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Rotulos</span></a>
        <ul>
            <li>
                <a href="{{ route('rotulos.index') }}" class="{{ request()->is('rotulos') ? 'active' : '' }}">Ver Todos <i class="fa fa-eye sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
            <li>
                <a href="{{ route('rotulos.create') }}">Agregar Nuevo <i class="fa fa-user-plus sidebar-nav-indicator sidebar-nav-mini-hide"></i></a>
            </li>
        </ul>
    </li>
</ul>
