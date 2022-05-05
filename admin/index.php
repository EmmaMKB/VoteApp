<?php 
    namespace Admin;
    use Controllers\ElectionController;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Vote App</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="header-bg">
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <div>
                        <a href="/admin/" class="logo">
                            <h2>Vote App</h2>
                        </a>
                    </div>

                    <div class="menu-extras topbar-custom navbar p-0">
                        <ul class="navbar-right ml-auto list-inline float-right mb-0">
                            <li class="dropdown notification-list list-inline-item">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Deconnexion</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="/admin/"><i class="dripicons-meter"></i> Accueil</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="dripicons-briefcase"></i> Elections</a>

                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
    </div>
    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <h4 class="mt-0 header-title mb-4">Elections</h4>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#electionModal">Creer Une Election</button>
                                </div>
                                <div id="electionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Nouvelle Election</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="../app/controllers/ElectionController.php" method="post">
                                                <input type="hidden" name="action" value="post_election">
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Titre</label>
                                                        <div class="col-sm-10">
                                                            <input name="title" required class="form-control" type="text" id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input" class="col-sm-2 col-form-label">Description</label>
                                                        <div class="col-sm-10">
                                                            <input name="description" required class="form-control" type="text" id="example-search-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-sm-2 col-form-label">Date de Debut</label>
                                                        <div class="col-sm-10">
                                                            <input name="start_date" required class="form-control" type="datetime-local"  id="example-email-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-sm-2 col-form-label">Date de Fin</label>
                                                        <div class="col-sm-10">
                                                            <input name="end_date" required class="form-control" type="datetime-local"  id="example-email-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Enregister</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Date de Debut</th>
                                            <th scope="col">Date de Fin</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>April, 25</td>
                                            <td>April, 25</td>
                                            <td>
                                                <a href="#" class="btn btn-light waves-effect">Voir</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>April, 25</td>
                                            <td>April, 25</td>
                                            <td>
                                                <a href="#" class="btn btn-light waves-effect">Voir</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>April, 25</td>
                                            <td>April, 25</td>
                                            <td>
                                                <a href="#" class="btn btn-light waves-effect">Voir</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>April, 25</td>
                                            <td>April, 25</td>
                                            <td>
                                                <a href="#" class="btn btn-light waves-effect">Voir</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                <div class="card">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-10">
                                    <h4 class="mt-0 header-title mb-4">Candidats</h4>
                                </div>
                                <div class="col-2">
                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#candidateModal">Creer Un Candidat</button>
                                </div>
                                <div id="candidateModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Nouveau Candidat</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nom complet</label>
                                                        <div class="col-sm-10">
                                                            <input name="full_name" class="form-control" type="text" id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input" class="col-sm-2 col-form-label">Bio</label>
                                                        <div class="col-sm-10">
                                                            <input name="bio" class="form-control" type="text" id="example-search-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-sm-2 col-form-label">Date de Naissance</label>
                                                        <div class="col-sm-10">
                                                            <input name="birthdate" class="form-control" type="date"  id="example-email-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-sm-2 col-form-label">Photo</label>
                                                        <div class="col-sm-10">
                                                            <input name="picture" class="form-control" type="file"  id="example-email-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Enregister</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Date de Naissance</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- start 1 -->
                                        <tr>
                                            <td>
                                                #
                                            </td>
                                            <td> <img src="assets/images/users/user-1.jpg" alt="" class="thumb-md rounded-circle mr-2"> Philip Smead</td>
                                            <td>April, 25</td>
                                            <td><span class="badge badge-primary">High</span></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

    <!-- Footer -->
    <footer class="footer">
        © 2022 Jean-Baptiste
    </footer>

    <!-- End Footer -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <!-- Plugins js -->
    <script src="../plugins/apexchart/apexcharts.min.js"></script>
    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael.min.js"></script>

    <script src="assets/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>