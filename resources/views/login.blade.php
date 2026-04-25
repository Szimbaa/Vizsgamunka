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
      <a href="/">MAIN PAGE</a>
      <a href="/about">ABOUT US</a>
      <a href="/team">THE TEAM</a>
      <a href="/services">SERVICES</a>
      <a href="/contact">CONTACT</a>
      <a href="/login">LOGIN</a>
      <a href="/register">REGISTER</a>
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
          <input class="forms" type="password" id="password" name="password" placeholder="Enter password">
          <i class="bi bi-eye password-eye"></i>
        </div>

      </div>

      <button class="btn" type="submit">Login</button>

    </form>

  </div>

</body>
</html>