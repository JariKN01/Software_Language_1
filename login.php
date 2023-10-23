<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <header>
    <nav class="navbar">
      <div class="local">
        <h2>Profile App</h2>
      </div>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Login</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>
  <main>
      <div class="login" id="loginForm">
          <h1>Login</h1>
          <form action="authenticate" method="post" class="form">
              <label for="username">
              </label>
              <input type="text" name="username" placeholder="Username" id="username" required>
              <label for="password">
              </label>
              <input type="password" name="password" placeholder="Password" id="password" required>
              <input type="submit" value="Login">
          </form>
          <p>Don't have an account? <a href="javascript:void(0);" onclick="showSignUpForm()">Sign Up</a></p>
      </div>
      <div class="signup" id="signUpForm" style="display: none;">
          <h1>Sign-Up</h1>
          <form action="signup" method="post">
              <label for="FirstName"></label>
              <input type="text" name="FirstName" placeholder="FirstName" id="FirstName" required>
              <label for="LastName"></label>
              <input type="text" name="LastName" placeholder="LastName" id="LastName" required>
              <label for="Mail"></label>
              <input type="email" name="Mail" placeholder="E-Mail" id="Mail" required>
              <label for="username"></label>
              <input type="text" name="username" placeholder="Username" id="username" required>
              <label for="password"></label>
              <input type="password" name="password" placeholder="Password" id="password" required>
              <label for="passwordConfirm"></label>
              <input type="password" name="passwordConfirm" placeholder="Confirm password" id="passwordConfirm" required>
              <input type="submit" value="Sign up">
          </form>
          <p>Already have an account? <a href="javascript:void(0);" onclick="showLoginForm()">Log In</a></p>
      </div>
  </main>
</div>
<script>
  const Template_Home = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  Template_Home.addEventListener("click", mobileMenu);

  function mobileMenu() {
    Template_Home.classList.toggle("active");
    navMenu.classList.toggle("active");
  }

  function showLoginForm() {
      document.getElementById('loginForm').style.display = 'block';
      document.getElementById('signUpForm').style.display = 'none';
  }

  function showSignUpForm() {
      document.getElementById('loginForm').style.display = 'none';
      document.getElementById('signUpForm').style.display = 'block';
  }
</script>
</body>
</html>
