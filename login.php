<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
    <link rel="icon" href="assets/image/component/logo.png" type="image/png">
</head>

<body>
  <div class="container">
<form class="form-horizontal" action="admin/ceklogin.php" method="post">
  <br>
  <input type="text" class="form-control" id="inputEmail" placeholder="Username" name="user">
  <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button class="btn btn-danger"><a href="index.php" style="text-decoration: none;color:white;">Cancel</a></button>  
</form>
</div>
</body>

