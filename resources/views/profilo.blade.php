<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/slide.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Roboto+Flex:opsz@8..144&family=Roboto:wght@500&display=swap" rel="stylesheet">

<body>

<header>
        <nav>
            <ul class="menu">
                <li><a href="{{route('home2')}}">Home</a></li> 
                <li><a href="#">Studio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Orari</a></li>
                </ul>
            </li>
            </ul>
           
        </nav> 
    </header>

    
    
    <section class="utente">


     @if(isset($userid)) 
     <div> Nome:{{$userid['nome']}}</div> 
     <div>cognome:{{$userid['cognome']}}</div>
     <div>email:{{$userid['email']}}</div>
      @else 
       <h1 class='bigtext'> dada</h1>

     @endif
 
        

     </section>
     <footer class="profile">
    <span>PAGINA REALIZZATA DA:</span>
    <span>CLAUDIO D'ERRICO 1000004015</span>
    </footer>



</body>
</html>