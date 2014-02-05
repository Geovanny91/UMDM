<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Panel Administracion - DimMak</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/font-awesome.min.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        <link rel="stylesheet" href="../css/ace-responsive.min.css" />
        <link rel="stylesheet" href="../css/jquery-ui-1.10.3.full.min.css" />
        <link rel="stylesheet" href="../css/ace-skins.min.css" />
        <link rel="stylesheet" href="../css/datepicker.css" />
        <link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.min.css" />
        <link rel="stylesheet" href="../css/chosen.css" />
        <link rel="stylesheet" href="../css/ace.min.css" />
        
        

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-leaf"></i>
                            Ace Admin
                        </small>
                    </a><!--/.brand-->

                    <ul class="nav ace-nav pull-right">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-grey">4</span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:65%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>
                        </li>

                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                        </li>

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo"  alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    Jason
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!--/.ace-nav-->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>

        <div class="main-container container-fluid">
            <a class="menu-toggler" id="menu-toggler" href="#">
                <span class="menu-text"></span>
            </a>

            <div class="sidebar" id="sidebar">
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-small btn-success">
                            <i class="icon-signal"></i>
                        </button>

                        <button class="btn btn-small btn-info">
                            <i class="icon-pencil"></i>
                        </button>

                        <button class="btn btn-small btn-warning">
                            <i class="icon-group"></i>
                        </button>

                        <button class="btn btn-small btn-danger">
                            <i class="icon-cogs"></i>
                        </button>
                    </div>

                </div><!--#sidebar-shortcuts-->

                <ul class="nav nav-list">
                    <li>
                        <a href="#" onclick="mostrarContenido();">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> Anime </span>
                        </a>                        
                    </li>
                    <li>
                        <a href="#" onclick="mostrarContenido1();">
                            <i class="icon-dashboard"></i>
                            <span class="menu-text"> Capitulos </span>
                        </a>     
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-edit"></i>
                            <span class="menu-text"> Forms </span>

                            <b class="arrow icon-angle-down"></b>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="form-elements.html">
                                    <i class="icon-double-angle-right"></i>
                                    Form Elements
                                </a>
                            </li>

                            <li>
                                <a href="form-wizard.html">
                                    <i class="icon-double-angle-right"></i>
                                    Wizard &amp; Validation
                                </a>
                            </li>

                            <li>
                                <a href="wysiwyg.html">
                                    <i class="icon-double-angle-right"></i>
                                    Wysiwyg &amp; Markdown
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul><!--/.nav-list-->

            </div>

            <div class="main-content">
                <div class="breadcrumbs" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home home-icon"></i>
                            <a href="#">Home</a>

                            <span class="divider">
                                <i class="icon-angle-right arrow-icon"></i>
                            </span>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul><!--.breadcrumb-->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search" />
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="icon-search nav-search-icon"></i>
                        </span>
                        </form>
                    </div><!--#nav-search-->
                </div>

                <div class="page-content">                    
                    <div class="row-fluid">
                        <div id="recargado" class="span12">

                        </div><!--/.span-->
                    </div><!--/.row-fluid-->
                </div><!--/.page-content-->


            </div><!--/.main-content-->
        </div><!--/.main-container-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <script src="../js/jquery-ui-1.10.3.full.min.js"></script>
        <script src="../js/jquery.dataTables.min.js"></script>
        <script src="../js/jquery.dataTables.bootstrap.js"></script>
        <script src="../js/bootstrap-datepicker.min.js"></script>        
        <script src="../js/bootstrap.min.js"></script>       
        <script src="../js/chosen.jquery.min.js"></script>
        <script src="../js/ace-elements.min.js"></script>
        <script src="../js/ace.min.js"></script>        
        <script src="../js/anime.js"></script>
        



        <script type="text/javascript">                        
            function mostrarContenido(id){
                var variable_post=id;
                $.post("../Intranet/Contenido.php", { variable: variable_post }, function(data){
                    $("#recargado").html(data);
                });
            }

            function mostrarContenido1(id){
                var variable_post=id;
                $.post("../Intranet/Contenido2.php", { variable: variable_post }, function(data){
                    $("#recargado").html(data);
                });
            }

            function mostrarContenido2(id){
                var variable_post=id;
                $.post("includes/contenido2.php", { variable: variable_post }, function(data){
                    $("#recargado").html(data);
                });
            }

            function mostrarContenido3(id){
                var variable_post=id;
                $.post("includes/contenido3.php", { variable: variable_post }, function(data){
                    $("#recargado").html(data);
                });
            }
        </script>
    </body>
</html>
