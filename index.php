<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <title>Login - Dashboard</title>
  <style type="text/css">
    #cor {
      color:#fff;
    }
  </style>
</head>
<body style="background-color: #2a3542">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top: 150px">
        <center>
         

        </center>
        <br><br>

        <form action="index1.php" method="post">
        

          <?php

            if(isset($_GET['err'])) {?>
              <div class="alert alert-danger" role="alert">
                E-mail ou senha inválidas!
              </div>
          <?php }	?>

          

          <div class="form-group">
            <label for="exampleInputEmail1" id="cor">E-Mail</label>
            <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" id="cor">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
          </div>
          <br>
          <button type="submit" class="btn btn-block" style="background-color: #fb7e6d;color:#fff">Submit</button>
        </form>
        <br>

        <center>
          <a href="signup.php">Sign Up?</a>
        </center>

      </div>
      <div class="col-md-4"></div>
    </div>

  </div>








</body>
</html>