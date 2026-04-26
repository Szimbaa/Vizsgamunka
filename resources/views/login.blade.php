<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <title>LOGIN – LawSync</title>

  <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <script src="{{ asset('js/main.js') }}" defer></script>
</head>

<body>

  <header class="menu-nav">
    <nav>
      <a href="/">Főoldal</a>
      <a href="/about">Rólunk</a>
      <a href="/services">Szolgáltatások</a>
      <a href="/contact">Kapcsolat</a>
      <a href="/login">Bejelentkezés</a>
      <a href="/register">Regisztráció</a>
    </nav>
  </header>

  <div class="login-container">
    
    <h1>Login</h1>

    <form method="POST" action="/login">

      <div class="forms">
        <label for="email">Email</label>
        <input class="form-field" type="email" id="email" name="email" placeholder="Enter email">
      </div>

      <div class="forms">
        <label for="password">Password</label>

        <div class="input">
          <input class="form-field" type="password" id="password" name="password" placeholder="Enter password">
          <i class="bi bi-eye password-eye"></i>
        </div>

      </div>

      <button class="btn" type="submit">Login</button>

    </form>

  </div>

</body>
</html>