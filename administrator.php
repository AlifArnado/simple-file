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
            <!-- <li><a href="?page=login">Login</a></li> -->
          </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
        <div class="row">
          <!-- <div class="col-md-3">
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
          </div> -->
          <div class="col-md-9">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Content</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
                  <fieldset>
                    <div class="col-md-10">
                      <input type="file" name="filemanager" value="" placeholder="">
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-md-offset-2">
                        <input type="submit" class="btn btn-info" name="submit" value="submit">
                        <input type="reset" class="btn btn-danger" name="reset" value="reset">
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </body>
    </html>
    <?php
    if ($_POST) {
    $file_max_weight = 900000; //limit the maximum size of file allowed (20Mb)
    $ok_ext = array('jpg','png','gif','jpeg','zip','sql','txt','text','rar'); // allow only these types of files
    $destination = 'files/'; // where our files will be stored
    // PHP sets a global variable $_FILES['file'] which containes all information on the file
    // The $_FILES['file'] is also an array, so to have the file name we're supposed to write $_FILES['file']['name']
    // To shorten that I added the following line. With that I could just do $file['name']
    $file = $_FILES['filemanager'];
    $filename = explode(".", $file["name"]);
    $file_name = $file['name']; // file original name
    $file_name_no_ext = isset($filename[0]) ? $filename[0] : null; // File name without the extension
    $file_extension = $filename[count($filename)-1];
    $file_weight = $file['size'];
    $file_type = $file['type'];
    // If there is no error
    if( $file['error'] == 0 )
    {
    // check if the extension is accepted
    if( in_array($file_extension, $ok_ext)):
    // check if the size is not beyond expected size
    if( $file_weight <= $file_max_weight ):
    // rename the file
    //$fileNewName = md5( $file_name_no_ext[0].microtime() ).'.'.$file_extension ;

    $fileNewName = $file_name_no_ext[0].'.'.$file_extension ;
    // and move it to the destination folder
    //if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ):
      if( move_uploaded_file($file['tmp_name'], $destination.$file_name) ):
    echo" File uploaded !";
    else:
    echo "can't upload file.";
    endif;
    else:
    echo "File too heavy.";
    endif;
    else:
    echo "File type is not supported.";
    endif;
    }
    }
    ?>
