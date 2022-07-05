<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<meta charset="utf-8">
<link rel="stylesheet" href="{{asset('css/slide.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Roboto+Flex:opsz@8..144&family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>

<body>



<header>
        <nav>
            <ul class="menu">
                <li><a href="{{route('home2')}}">Home</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Orari</a></li>
                
            </ul>
           
        </nav> 
    </header>






<div class="container-fluid">
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center">SCEGLI IL TUO PIANO</h2>

        @if(isset($items))



        
            @foreach ($items as $item)
            
         
            <div class="col-md-4">

            <form method="post">
            @csrf 
            <img src="immagini/{{$item->image}}"  style= 'height: 150px;margin: 25px 335px;'>
            <h5  class="text-center" style="margin: 3px 335px;">{{$item->name}}</h5>
            <h5 class="text-center" style="margin: 3px 335px;">{{$item->price}}</h5>
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="hidden" name="name" value="{{$item->name}}">
            <input type="hidden" name="price" value="{{$item->price}}">
            <input  type="number" name="quantity" value="1" class="form-control" style="margin: 3px 335px;">
            <input  type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Aggiungi al carrello" style="margin-left: 335px;">
            <input type="hidden" name="action" value="add">

            </form>
            </div>

            @endforeach
            @endif


           

            
        </div>
        <div class="col-md-6">
            <h2 class="text-center">CARRELLO</h2>


            
            <table class = 'table table-bordered table-striped'>
            <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Item Price</th>
            <th>Item quantity</th>
            <th>Total Price</th>
            <th>Action</th>
            </tr>

           
            @foreach($carrello as $value)

            <tr>
                    <td>{{$value["id"]}}</td>
                    <td>{{$value["name"]}}</td>
                    <td>{{$value["price"]}}</td>
                    <td>{{$value["quantity"]}}</td>
                    <td>{{$value["tot"]}}</td>

                    <td>

                    <form method="post">
                    @csrf
                      
                    <input type="hidden" name="action" value="remove">
                    <input type="hidden" name="id" value='{{$value["id"]}}'>
                    <button class='btn btn-danger btn-block'>Remove</button>
                    </form>
  
                    </td>

                    </tr>
            @endforeach

            <tr>
                <td colspan='3'></td> 
                <td><strong>Total Price</strong></td>
               
                <td>
                    {{$totale}}

                </td>
                <td>
                <form method="post">
                @csrf
                <input type="hidden" name="action" value="clearall">
                <button class='btn btn-warning btn-block'>Clear All</button>
                </form>
                
                </td>
                </tr>

      

            </div>
    </div>
</div>

</div>

</body>

</html>