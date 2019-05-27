<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
        <li><a  href="{{ route('asistencias.index') }}"><i class="fa fa-home"></i> Home <span class="fa"></span></a></li>
        <li><a href="{{ route('membresias.index') }}"><i class="fa fa-edit"></i> Membresias, Vistas <span class="fa"></span></a></li>
        <li><a  href="{{ route('ventas.index') }}"><i class="fa fa-shopping-cart"></i>Ventas <span class="fa"></span></a></li>
        <li><a><i class="fa fa-group"></i> Clientes <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ route('clientes.create') }}">ingresar</a></li>
                <li><a href="{{ route('clientes.index') }}">Listado</a></li>
            </ul>
        </li>
        <li><a href="{{ route('rutinas.index') }}"><i class="fa fa-suitcase"></i>Rutinas <span class="fa"></span></a>
        </li>
        <li><a><i class="fa fa-archive"></i> Inventario <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                @can('create')
                <li><a href="{{ route('productos.create') }}">ingresar producto</a></li>
                @endcan
                <li><a href="{{ route('productos.index') }}">listado de productos</a></li>

            </ul>
        </li>
        <li><a><i class="fa fa-user"></i>Empleados <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                @can('edita_empleado')
                <li><a href="{{ route('empleados.create') }}">ingresar empleado</a></li>
                @endcan
                <li><a href="{{ route('empleados.index') }}">listado de empleados</a></li>
            </ul>
        </li>
    </ul>     
    </div>
</div>