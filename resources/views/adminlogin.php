<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Packt Admin Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
</head>
<style>

:root{
  --main-bg:linear-gradient(to right, #da8cff, #9a55ff) !important;
}

.main-bg {
  background: var(--main-bg) !important;
}

input:focus, button:focus {
  border: 1px solid var(--main-bg) !important;
  box-shadow: none !important;
}

.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}

.card, .btn, input{
  border-radius:0 !important;
}

</style>
<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Packt Admin Login</h2>
            <img src="../../assets/images/Packt.png">
          </div>
          <div class="card-body">
            <!-- <form> -->
              <div class="mb-4">
                <label for="username" class="form-label">Email</label>
                <input type="text" class="form-control" id="username" value="sonalraj@gmail.com"/>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"  value="123456"/>
              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" />
                <label for="remember" class="form-label">Remember Me</label>
              </div>
              <div class="d-grid">
                <a href="/admin"><button type="submit" class="btn text-light main-bg">Login</button></a>
              </div>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>