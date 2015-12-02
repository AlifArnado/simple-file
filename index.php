<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Server Student</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="node_modules/bootstrap-material/dist/css/material.min.css">
    <script type="text/javascript" src="node_modules/bootstrap-material/dist/js/material.min.js" ></script>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-danger" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/filemanager">Server Student</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                   <!--  <li><a href="administrator.php">Login</a></li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    <div class="row">
        <div class="col-md-3">
           <div class="panel panel-danger">
                 <div class="panel-body">
                      <h3 class="panel-title"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Panel title</h3>
                 </div>
                 <div class="panel-footer">
                       <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                            <li><a href="/filemanager" class="list-group-item"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                            <li><a href="?page=profil" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</a></li>
                            <li><a href="?page=about" class="list-group-item"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> About</a></li>
                            <li><a href="?page=berkas" class="list-group-item"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Berkas</a></li>
                        </ul>
                   </div>
           </div>
        </div>
        <div class="col-md-9">
           <div class="panel panel-danger">
                  <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Content</h3>
                  </div>
                  <div class="panel-body">
                        <?php
                            $page = @$_GET['page'];
                            if ($page == "profil") {
                                // echo "Output profil";
                                include 'include/profil.php';
                            } else if($page == "about") {
                                // echo "Output about";
                                include 'include/about.php';
                            } else if($page == "berkas") {
                                // echo "Output berkas";
                                include 'berkas.php';
                            } else if($page == "") {
                                // echo "Output Home";
                                include 'include/home.php';
                            }  else {

                            }
                         ?>
                  </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
