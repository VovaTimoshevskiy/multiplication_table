<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>

  <body class="bg">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Trainee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Посты</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Профиль</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Навигация</a>
          </li>
          </ul>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" href="#">Log</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <form>
                    <h1 class="h3 mb-3 font-weight-normal text-center">Please sign in</h1>
                    <div class="form-group">
                        <input type="email" class="form-control" style="height: 50px;" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"  style="height: 50px;" placeholder="Password">
                    </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                </form>
            </div>
        </div>
    </div>

<!-- Footer -->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
  <div class="container text-center">
    <small>Copyright &copy; Your Website</small>
  </div>
</footer>
  <!-- Footer -->
  </body>
</html>
