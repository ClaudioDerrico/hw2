<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/slide.css')}}">
<script src="{{asset('js/apifood.js')}}" defer></script>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Roboto+Flex:opsz@8..144&family=Roboto:wght@500&display=swap" rel="stylesheet">



</head>
<body>
    
    <header>
     @include('navbar')
    </header>



    

    <form method="POST" class="barra">
    
    <span id="api">Scopri i valori nutrzionali per 100g di alimento</span>
    <input type='text' id='food' name="alimento" placeholder="insert food in english">
    <input type='submit' id='invia' value='cerca'>
       
    </form>



    <div class="raggruppamento">
        <div></div>

    </div>
        

    <div class="ali2">

     <p>Calcola le tue calorie nel miglior modo possibile, creando la tua dieta personalizzata. Attenzione però al tuo metabolismo e soprattuto al tuo somatotipo:</p>

</div>



<section class="contenitore_immagini">

<div class="contenuto">
<img src="immagini/endo.jpg"/>

<p> Il fisico è morbido, rotondo, dai fianchi larghi. Gli arti sono corti, rispetto al busto. Di solito sono bassi. Hanno difficoltà a dimagrire e sembrano aumentare di peso ogni volta che pensano al cibo. Con un metabolismo molto lento che causa un aumento di peso notevole in poco tempo</p>

</div>

<div class="contenuto">
    <img src="immagini/ecto.jpg"/>
 
    <p>L'ectomorfo è l'hard-gainer per eccellenza. Questi soggetti sono alti, esili, un ossatura minuta, con una muscolatura scarsa e una percentuale di grasso molto bassa. Con un metabolismo molto veloce e quindi vi sarà difficoltà nel prendere peso</p>
  
    </div>

<div class="contenuto">
<img src="immagini/meso.jpg"/>

<p>Il mesomorfo ha un fisico !perfetto!, caratterizzato da notevole massa muscolare ed una bassa percentuale di grasso. Con un metabolismo in grado di poter prendere e perdere facilmente peso</p>


</div>

</section>



@include('footer')


</body>
</html>