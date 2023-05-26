<DOCTYPE html>
    <html>
        <head>

        <link href='login.css' rel='stylesheet'>
        </head>
        <body>
        <div class="wrapper fadeInDown">
  <div id="formContent">
   
    <h2 class="inactive underlineHover">Sign Up </h2>

    <!-- Icon -->
   

    <!-- Login Form -->
    <form method="post">
      {{ crsf_field() }}

      <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Login">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
        </body>
        <script src="login.js"></script>
    </html>