<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <title>REGISTER – LawSync</title>

  <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<script src="{{ asset('js/main.js') }}" defer></script>

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

  <div class="register-container">
    
    <h1>Register</h1>

    <form method="POST" action="/register">

      <div class="forms">
        <label for="firstname">First name</label>
        <input class="form-field" type="text" id="firstname" name="firstname" placeholder="Enter first name">
      </div>

      <div class="forms">
        <label for="lastname">Last name</label>
        <input class="form-field" type="text" id="lastname" name="lastname" placeholder="Enter last name">
      </div>

      <div class="forms">
        <label for="role">Role</label>
        <select class="form-field" id="role" name="role">
          <option value="client">customer</option>
          <option value="lawyer">lawyer</option>
        </select>
      </div>

      <div class="forms">
        <label for="password">Password</label>

        <div class="input">
          <input class="form-field" type="password" id="password" name="password" placeholder="Enter password">
          <i class="bi bi-eye password-eye"></i>
        </div>

      </div>

      <button class="btn" type="submit">Register</button>

    </form>

  </div>

</body>
</html>