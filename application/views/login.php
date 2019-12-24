<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron">
      <h1 class="display-3">Login</h1>
      <hr class="my-2">
    </div>
    <div class="container">
      <form method="post" action="<?php echo base_url(); ?>Login/userLogin">
      <div class="row">
        <div class="col-md-4">
          Username
        </div>
        <div class="col-md-4">
          <div class="input-group">
             <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-user"></i></span>
             </div>
             <input type="text" class="form-control" placeholder="Username" name="txtusername" Required>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
          Password
        </div>
        <div class="col-md-4">
          <div class="input-group">
             <div class="input-group-prepend">
               <span class="input-group-text"><i class="fas fa-key"></i></span>
             </div>
             <input type="password" class="form-control" name="txtpassword" placeholder="password" Required>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <input type="submit" value="Login" class="btn btn-primary">
        </div>
      </div>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>