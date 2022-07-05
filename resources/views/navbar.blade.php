<html>
<body>
    
    <header>

        
    <nav>
            <ul class="menu">
                <li><a href="{{route('home2')}}">Home</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Orari</a></li>
                <li class="has-children"><a href="#">Profilo</a>
                <ul class="sub-menu">
                <li><a href="{{route('profilo')}}"> Impostazioni</a></li>
                <li><a href="{{route('logout')}}"> LogOut </a></li>
                </ul>
            </li>
            </ul>
           
        </nav> 
    </header>
    </html>
</body>