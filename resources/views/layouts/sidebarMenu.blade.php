<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
        <li><a  href="{{ route('asistencias.index') }}"><i class="fa fa-home"></i> Home <span class="fa"></span></a></li>
        <li><a><i class="fa fa-bar-chart"></i> Estadisticas <span class="fa "></span></a></li>
        <li><a><i class="fa fa-edit"></i> Membresias, Vistas <span class="fa"></span></a></li>
        <li><a><i class="fa fa-shopping-cart"></i>Ventas <span class="fa"></span></a></li>
        <li><a><i class="fa fa-group"></i> Clientes <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ route('clientes.create') }}">ingresar</a></li>
                <li><a href="{{ route('clientes.index') }}">Listado</a></li>
            </ul>
        </li>
        <li><a><i class="fa fa-suitcase"></i>Rutinas <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="#">Insert</a></li>
                <li><a href="#">Mostrar</a></li>
                <li><a href="#">Editar</a></li>
            </ul>
        </li>
        <li><a><i class="fa fa-archive"></i> Inventario <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="#">ingresar producto</a></li>
                <li><a href="#">Compra</a></li>
                <li><a href="#">venta</a></li>
                <li><a href="#">Mostrar</a></li>
            </ul>
        </li>
        <li><a><i class="fa fa-user"></i>Empleados <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="#">Insert</a></li>
                <li><a href="#">Mostrar</a></li>
                <li><a href="#">Editar</a></li>
            </ul>
        </li>
    </ul>     
    </div>
</div>