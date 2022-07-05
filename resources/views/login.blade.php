<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="{{asset('css/stile.css')}}">
        <script src="{{asset('js/home.js')}}" defer></script>
    </head>
    <body>


    <div class="wrapper fadeInDown">
  <div id="formContent">

    <h2 class="active"> LOGIN </h2>
    
    <!-- Login Form -->
    <form method="post" action="{{url('login')}}">
    @csrf
    <div class="names">


              <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div><input type='text' name='username'></div>
                    <span></span>
              </div>

              <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                    <span></span>
              </div>
                    <div class="submit">
                    <input type="submit" class="fadeIn fourth" value="LOGIN">
              </div>
  </div>
    </form>

    
    <div id="formFooter">
      <a class="underlineHover" href="registrati.php">Registrati</a>
    </div>

  </div>
</div>
</body>
</html>