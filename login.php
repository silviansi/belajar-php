<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Book Store | Log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container-fluid login">
  <div class="row h-100">
    <div class="col-12 col-md-4 mx-auto my-auto">
      <div class="card login-card">
        <div class="card-body">
          <h1 class="card-title text-center">Login</h1>
          <form class="form-login w-100" action="product.php">
            <div class="form-group input-user">
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group input password">
              <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn login-btn mt-3">Submit</button>
          </form>

          <p class="new-account text-center text-light">Not a member? <a href="#">Sign Up now!</a></p>

          <br>

          <p class="f-pass text-center">
            <a href="#">Forget password?</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
