<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
     @vite(['resources/css/app.css']) 

     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos-tablas.css')}}">   
    <link rel="stylesheet" href="{{asset('css/estilos-formularios.css')}}">
    
    
</head>

<body>
  <!-- slidebar   -->
   <aside class="slidebar" id="slidebar">
   
    <a href="" class="logo mr-4">
        <img src="{{asset('img/logo-magi-and-vanity.png')}}" alt="Logo" class="logo-img">
        <p class="logo-text">Tienda</p>
      </a>
    
    <!-- PERFIL -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn profile">
         <span><img src="{{asset('img/corona.png')}}" alt="avatar"></span>
         <p>{{ Auth::user()->name }}</p>
        </div>
        <div class="element-slidebar-content">
            <a href="{{route('profile.edit')}}">Perfil</a>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
               <input type="submit" value="Salir" class="logout-link">

             </form>

        </div>
    </div>
     <!-- Categorias -->
         
        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/categorias.png')}}" alt="Product"></span>
         <a href="{{route('categoria.index')}}">Categorias</a>
        </div>
       
  
    <!-- Productos -->
    
    
        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/agregar-producto.png')}}" alt="Product"></span>
         <a href="{{route('producto.index')}}">Productos</a>
       
        </div>
        
     
    <!-- Provedores -->
   
        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/cadena-de-suministro.png')}}" alt="Provedor"></span>      
         <a href="{{route('categoria.index')}}">Provedores</a>
        </div>
       
    
    <!-- Compras -->

        <div class="element-slidebar-btn">
         <span><img  src="{{asset('img/verificar.png')}}" alt="Product"></span>
         <a href="{{route('categoria.index')}}">Compras</a>         
        </div>
       
        <!-- Ventas -->
        
            <div class="element-slidebar-btn">
             <span><img  src="{{asset('img/ventas.png')}}" alt="ventas"></span>
             <a href="{{route('categoria.index')}}">Ventas</a>
            </div>
           
    </div>
   </aside>

   <!-- main -->
   <main class="main">
    <!-- header -->
    <header class="header">
        <div class="titulo-nav">@yield('titulomain')</div>  

        <button id="menu-toggle" class="menu-hamburger">☰</button>
    </header>
    {{-- aqui se coloca todos los elmentos cambiantes --}}
      
      @yield('contenido')

   </main>
   
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>