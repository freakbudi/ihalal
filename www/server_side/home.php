<!DOCTYPE html>
        <?php include 'config.php'; 
        session_start();
        if(empty($_SESSION['admin'])){
            header("location:index.php");
        }
        ?>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>index</title>
        <meta name="description" content="">
        <meta name="author" content="Budi Setiawan">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        
        
    </head>

    <body>
        <div class="container">
            <header>
                <h1>index</h1>
            </header>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="simpan.php">
              <div class="form-group">
                <label  class="col-sm-2 control-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Deskripsi</label>
                <div class="col-sm-10">
                  <input type="text" name="deskripsi" class="form-control" placeholder="deskripsi">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">File input</label>
                <div class="col-sm-10">
                  <input type="file" name="photo" >
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">save</button>
                </div>
              </div>
            </form>
            <a href="logout.php" class="btn btn-danger" role="button">Log-Out</a>    
        </div>
        <script src="dist/js/jquery-1.11.3.min.js"></script>
        <script src="dist/js/bootstrap.min.js"></script>
    </body>
</html>
