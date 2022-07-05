<html>
    <head>
        <title>Registrazione</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="{{asset('css/stile.css')}}">
        <script src="{{asset('js/home.js')}}" defer></script>
    </head>
    <body>

<?php

if(isset($error))
foreach ($error as $errore ){
echo $errore;
echo "<br>";
}

?>
  

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Registrati </h2>
    

    
    <form method="post">
        @csrf
    <div class="names">
                    <div class="name">
                        <div><label for='name'>Nome</label></div>
                        <!-- Se il submit non va a buon fine, il server reindirizza su questa stessa pagina, quindi va ricaricata con 
                            i valori precedentemente inseriti -->
                        <div><input type='text' name='nome' ></div>
                        <span></span>
                    </div>
                    <div class="surname">
                        <div><label for='surname'>Cognome</label></div>
                        <div><input type='text' name='cognome'  ></div>
                        <span></span>
                    
                    </div>
                <div class="username">
                    <div><label for='username'>Nome utente</label></div>
                    <div><input type='text' name='username'></div>
                    <span></span>
                </div>
                
                <div class="email">
                    <div><label for='email'>Email</label></div>
                    <div><input type='text' name='email' ></div>
                    <span></span>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password'></div>
                    <span></span>
                </div>

                <div class="submit">
                <input type="submit" class="fadeIn fourth" value="REGISTRATI">
                </div>
</div>
      
    </form>
</div>
</div>
    </body>
</html>
