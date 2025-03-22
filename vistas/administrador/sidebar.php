<div id="sidebar" class="navbar-collapse collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Buscar ..." autocomplete="on" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->
                    
                    <li class="active">
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-file"></i>
                            <span>Gestionar tesis</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="mostrar_tesis.php">Gestionar informacion de las tesis</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>

                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-list"></i>
                            <span>Gestionar usuarios</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li>
                                <li><a href="mostrar_usuarios.php">Gestionar usuarios del sistema</a></li>
                            </li>
                        </ul>
                        <!-- END Submenu -->

                    </li>
                </ul>

                

                
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-lg">
                    <i class="fa fa-angle-double-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->


        
</div>