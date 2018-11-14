            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="color: white;">Gestion du prêt des documents | HCP</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="nav navbar-nav navbar-left navbar-top-links">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="script/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Accueil</a>
                            </li>
                            <li>
                                <a href="addpret.php"><i class="fa fa-edit fa-fw"></i> Ajouer un prêt</a>
                            </li>
                            <li>
                                <a href="prets.php"><i class="fa fa-list fa-fw"></i> Archive des prêt</a>
                            </li>
                            <li>
                                <a href="addfonctionnaire.php"><i class="fa fa-edit fa-fw"></i> Ajouter un fonctionnaire</a>
                            </li><li>
                                <a href="fonctionnaires.php"><i class="fa fa-list fa-fw"></i> Liste des fonctionnaires</a>
                            </li>
                            <li>
                                <a href="adddocument.php"><i class="fa fa-edit fa-fw"></i> Ajouter un document</a>
                            </li>
                            <li>
                                <a href="documents.php"><i class="fa fa-list fa-fw"></i> Liste des documents</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>