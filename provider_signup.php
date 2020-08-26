<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Alertify -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Alertify Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="assets/css/global_sign.css">

    <title>TimeToFood | Sign up</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">TimeToFood</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="client_signin.php">Client</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="provider_signin.php">Provider</a>
          </li>
        </ul>
      </div>
    </nav>
    <form id="signup-form">
      <div class="form-group"><input class="form-control" id="username" type="text"
      minlength="5" maxlength="50"
      placeholder="Username" autocomplete="off"
      autofocus required>
      <i class="fas" style="display: none;"></i></div>
      <div class="form-group"><input class="form-control" id="email" type="email"
        minlength="5" maxlength="50"
        placeholder="Email" autocomplete="off"
        autofocus required>
        <i class="fas" style="display: none;"></i></div>
      <div class="form-group"><input class="form-control" id="restaurant" type="text"
        minlength="5" maxlength="50"
        placeholder="Restaurant name" autocomplete="off"
        autofocus required>
        <i class="fas" style="display: none;"></i></div>
      <div class="form-group"><input class="form-control" id="phone" type="text"
        minlength="10" maxlength="10"
        placeholder="Phone" autocomplete="off"
        autofocus required>
        <i class="fas" style="display: none;"></i></div>
      <div class="form-group"><input class="form-control" id="password" type="password"
        minlength="5" maxlength="50"
        placeholder="Password" autocomplete="off"
        autofocus required>
        <i class="fas" style="display: none;"></i></div>
      <button type="submit" class="btn btn-primary btn-block">Sign up</button>
      <small class="form-text text-muted pt-3">You already have an account?, click <a href="provider_signin.php">here</a>.</small>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Alertify -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="assets/js/global_control.js"></script>
    <script src="assets/js/provider_signup.js"></script>
  </body>
</html>