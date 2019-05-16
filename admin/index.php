<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
    <link rel="icon" href="../assets/image/component/logo.png" type="image/png">
</head>
<body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="assets/image/component/logo.png" width="30"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Paket Program</a></li>
                      <li><a href="index.php?m=inputdata">Input Data Santri</a></li>
                      <li><a href="#">Reminder Setting</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Secondary Action</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                <li><a href="#">Admin Page</a></li>
                <li><a href="#">About</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;Hello 'User'<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Profile</a></li>
                              <li><a href="#">Projects</a></li>
                              <li><a href="#">Setting</a></li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header">Action</li>
                              <li><a href="">Sign Out</a></li>
                            </ul>
                          </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>

    <div class="container">
      <?php
      $m = $_GET['m'];

      if ($m=='') {
        echo "menu";
      }elseif ($m=='inputdata') {
        include 'daftarsantri.php';
      }elseif ($m=='regdetail') {
        include 'registrasi_detail.php';
      }else {
        include 'home.php';
      }
      ?>
    </div>
</body>
</html>