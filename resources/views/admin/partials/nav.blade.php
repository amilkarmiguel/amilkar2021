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
    <li class="sidebar-header">
        <span class="sidebar-header-options clearfix"><i class="fa fa-link"></i></span>
        <span class="sidebar-header-title">Otros Enlaces</span>
    </li>
    <li>
        <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-certificate sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
        <ul>
            <li>
                <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
            </li>
            <li>
                <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
            </li>
            <li>
                <a href="page_ui_typography.html">Typography</a>
            </li>
            <li>
                <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
            </li>
            <li>
                <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
            </li>
            <li>
                <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
            </li>
            <li>
                <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
            </li>
            <li>
                <a href="page_ui_preloader.html">Page Preloader</a>
            </li>
            <li>
                <a href="page_ui_color_themes.html">Color Themes</a>
            </li>
        </ul>
    </li>
</ul>
