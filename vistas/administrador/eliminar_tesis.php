<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gestion de tesis - ISMI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="css/flaty.css">
        <link rel="stylesheet" href="css/flaty-responsive.css">

        <link rel="shortcut icon" href="img/minimalist logo for a thesis management platform.png">
    </head>
    <body>

        <!-- BEGIN Theme Setting -->
        <div id="theme-setting">
            <a href="#"><i class="fa fa-gears fa fa-2x"></i></a>
            <ul>
                <li>
                    <span>Skin</span>
                    <ul class="colors" data-target="body" data-prefix="skin-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Navbar</span>
                    <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Sidebar</span>
                    <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span></span>
                    <a data-target="navbar" href="#"><i class="fa fa-square-o"></i> Fixed Navbar</a>
                    <a class="hidden-inline-xs" data-target="sidebar" href="#"><i class="fa fa-square-o"></i> Fixed Sidebar</a>
                </li>
            </ul>
        </div>
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#">
                <small>
                    <i class="fa fa-desktop"></i>
                    Gestión de tesis en el ISMI
                </small>
            </a>

            <!-- BEGIN Navbar Buttons -->
            <ul class="nav flaty-nav pull-right">
                <!-- BEGIN Button Tasks -->
                
                <!-- END Button Tasks -->

                <!-- BEGIN Button Notifications -->
                
                <!-- END Button Notifications -->

                <!-- BEGIN Button Messages -->
                
                <!-- END Button Messages -->

                <!-- BEGIN Button User -->
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        <img class="nav-user-photo" src="img/demo/avatar/avatar.png" alt="Penny's Photo" />
                        <span class="hhh" id="user_info">
                            Admin
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                        <li class="nav-header">
                            <i class="fa fa-clock-o"></i>
                            Sesión iniciada 20:45
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                Ajustes de la cuenta
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Editar perfil
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-question"></i>
                                Ayuda
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="fa fa-off"></i>
                                Cerrar sesión
                            </a>
                        </li>
                    </ul>
                    <!-- BEGIN User Dropdown -->
                </li>
                <!-- END Button User -->
            </ul>
            <!-- END Navbar Buttons -->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
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
                    <li>
                        <a href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="typography.html">
                            <i class="fa fa-text-width"></i>
                            <span>Typography</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-desktop"></i>
                            <span>UI Elements</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="ui_general.html">General</a></li>
                            <li><a href="ui_button.html">Button</a></li>
                            <li><a href="ui_tabs.html">Tab & Accordion</a></li>
                            <li><a href="ui_slider.html">Slider</a></li>
                            <li><a href="ui_tile.html">Tile</a></li>
                            <li><a href="ui_timeline.html">Timeline</a></li>
                            <li><a href="ui_chart.html">Chart</a></li>
                            <li><a href="ui_message.html">Conversation</a></li>
                            <li><a href="ui_horizontal-menu.html">Horizontal Menu</a></li>
                            <li><a href="ui_icon.html">Icon</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li class="active">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-edit"></i>
                            <span>Forms</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="form_layout.html">Layout</a></li>
                            <li><a href="form_component.html">Component</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li class="active"><a href="form_validation.html">Validation</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-list"></i>
                            <span>Tables</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="table_basic.html">Basic</a></li>
                            <li><a href="table_advance.html">Advance</a></li>
                            <li><a href="table_dynamic.html">Dynamic</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-globe"></i>
                            <span>Maps</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="map_google.html">Google Maps</a></li>
                            <li><a href="map_vector.html">Vector Maps</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="box.html">
                            <i class="fa fa-list-alt"></i>
                            <span>Box</span>
                        </a>
                    </li>

                    <li>
                        <a href="calendar.html">
                            <i class="fa fa-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href="gallery.html">
                            <i class="fa fa-picture-o"></i>
                            <span>Gallery</span>
                        </a>
                    </li>

                    <li>
                        <a href="grid.html">
                            <i class="fa fa-th"></i>
                            <span>Griding System</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-file-text-o"></i>
                            <span>Sample Pages</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="extra_login.html">Login &amp; Register</a></li>
                            <li><span>Email</span>
                                <ul>
                                    <li><a href="extra_mail-list.html">Inbox</a></li>
                                    <li><a href="extra_mail-msg.html">Mail Thread</a></li>
                                    <li><a href="extra_mail-compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="extra_profile.html">User Profile</a></li>
                            <li><a href="extra_invoice.html">Invoice</a></li>
                            <li><a href="extra_search.html">Search Results</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-file"></i>
                            <span>Other Pages</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="more_blank.html">Blank Page</a></li>
                            <li><a href="more_full-width.html">Full Width Page</a></li>
                            <li><span>Errors</span>
                                <ul>
                                    <li><a href="more_error-404.html">Error 404</a></li>
                                    <li><a href="more_error-500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li><a href="more_set-skin.html">Skin</a></li>
                            <li><a href="more_set-sidebar-navbar-color.html">Sidebar &amp; Navbar</a></li>
                            <li><a href="more_sidebar-collapsed.html">Collapsed Sidebar</a></li>
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
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Form Validation</h1>
                        <h4>Form validation sample</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li>
                            <a href="mostrar_tesis.html">Gestionar tesis</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="fa fa-bars"></i> Validation Form</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <form action="#" class="form-horizontal" id="validation-form" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="username">Username:</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" name="username" id="username" class="form-control" data-rule-required="true" data-rule-minlength="3" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="email">Email Address:</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="email" name="email" id="email" class="form-control" data-rule-required="true" data-rule-email="true" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="password">Password:</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="password" name="password" id="password" class="form-control" data-rule-required="true" data-rule-minlength="6" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 col-lg-2 control-label" for="confirm-password">Confirm Password:</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="password" name="confirm-password" id="confirm-password" class="form-control" data-rule-required="true" data-rule-minlength="6" data-rule-equalTo="#password" />
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label for="select" class="col-sm-3 col-lg-2 control-label">Select</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <select class="form-control" name="select" id="select" data-rule-required="true">
                                                <option value="">-- Please select --</option>
                                                <option value="1">Option-1</option>
                                                <option value="2">Option-2</option>
                                                <option value="3">Option-3</option>
                                                <option value="4">Option-4</option>
                                                <option value="5">Option-5</option>
                                                <option value="6">Option-6</option>
                                                <option value="7">Option-7</option>
                                                <option value="8">Option-8</option>
                                                <option value="9">Option-9</option>
                                                <option value="10">Option-10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="urlfield" class="col-sm-3 col-lg-2 control-label">URL</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="Enter valid URL" name="urlfield" id="urlfield" data-rule-url="true" data-rule-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="minlengthfield" class="col-sm-3 col-lg-2 control-label">Minlength</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="At least 3 characters" name="minlengthfield" id="minlengthfield" data-rule-minlength="3" data-rule-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="maxlengthfield" class="col-sm-3 col-lg-2 control-label">Maxlength</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="Max 6 characters" name="maxlengthfield" id="maxlengthfield" data-rule-maxlength="6" data-rule-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datefield" class="col-sm-3 col-lg-2 control-label">Date</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" name="datefield" id="datefield" data-rule-dateISO="true" data-rule-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="numberfield" class="col-sm-3 col-lg-2 control-label">Number</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="Only numbers" name="numberfield" id="numberfield" data-rule-number="true" data-rule-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="digitsfield" class="col-sm-3 col-lg-2 control-label">Digits</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="Only digits" name="digitsfield" id="digitsfield" data-rule-digits="true" data-rule-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="creditcardfield" class="col-sm-3 col-lg-2 control-label">Creditcard</label>
                                        <div class="col-sm-6 col-lg-4 controls">
                                            <input type="text" class="form-control" placeholder="Enter valid creditcard. ex: 446-667-651" name="creditcardfield" id="creditcardfield" data-rule-creditcard="true" data-rule-required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                            <button type="button" class="btn">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->
                
                <footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.0.3.min.js"><\/script>')</script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/jquery-cookie/jquery.cookie.js"></script>

        <!--page specific plugin scripts-->
        <script type="text/javascript" src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assets/jquery-validation/dist/additional-methods.min.js"></script>

        <!--flaty scripts-->
        <script src="js/flaty.js"></script>
        <script src="js/flaty-demo-codes.js"></script>

    </body>
</html>
