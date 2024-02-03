<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Desarollo web-BlackBox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

html,body{

background: url({{ asset('static/img/fondo.jpg') }});


}
.wrapper .icon{
    position: relative;
    background: #000000;
    border-radius: 50%;
    padding: 15px;
    margin: 10px;
    width: 50px;
    height: 50px;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 10px 10px rgba(0,0,0,0.1);
    cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}


.wrapper{
    display: inline-flex;
    list-style: none;
    margin-top: 15px;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      *{
        padding:0;
        margin: 0;
      }
      .p-3
{
  padding: 0rem !important;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark" style="backdrop-filter:blur(5px); background-position:bottom;
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;">
    
   
    
 

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" >
  <header class="mb-auto">
    
    <div>
    <nav class="navbar bg-dark border-bottom border-body ma-0" data-bs-theme="dark">
    <!--  <img src="{{ asset('static/img/cubo.png') }}" class="img-fluid rounded-start" style="height:auto;" alt="..."-->
      <h3 class="float-md-start mb-0" style="margin-top: 15px;">Black box</h3>
      <h6 class="float-md-start mb-0" style="margin-top: 55px;margin-left: -1420px;">Tú lo sueñas, nosotros lo programamos</h6>
      
      <nav class="nav nav-masthead justify-content-center float-md-end">
      <ul class="wrapper">
        <li class="icon facebook">
            <span class="tooltip">Facebook</span>
            <span><i class="fab fa-facebook-f"></i></span></li>
            <li class="icon tiktok">
            <span class="tooltip">Tiktok</span>
            <span><i class="fab fa-tiktok"></i></span></li>
        <li class="icon instagram">
            <span class="tooltip">Instagram</span>
            <span><i class="fab fa-instagram"></i></span></li>
        <li class="icon github">
            <span class="tooltip">Github</span>
            <span><i class="fab fa-github"></i></span></li>
    </ul>
      <!--  <a class="nav-link" href="#">Trabajos realizados</a>-->
      </nav>
      
    </div>
    </nav>
  </header>

  <main class="px-3 " >
  <div class="card mb-3 position-absolute top-50 start-50 translate-middle bg-dark " style="max-width: 540px;">
  <div class="row g-0 ">
    <div class="col-md-4">
      <img src="{{ asset('static/img/black.jpg') }}" class="img-fluid rounded-start" style="height:auto;" alt="...">
      <p class="lead text-white">Contactanos en nuestro correo como blackboxtectux@gmail.com </p>
    </div>
    <div class="col-md-8">
      <div class="card-body">
     
        <h3 class="text-white">SERVICIOS DE DESARROLLO DE SOFTWARE</h3>
        <p class="lead text-white">Desarrollamos software y aplicaciones para toda clase de publicos y proyectos para startups, pequeñas , medianas  y grandes empresas.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-black bg-black text-white bg-black">Trabajos realizados</a>
    </p>
      </div>
    </div>
  </div>
</div>

        <h1></h1>
        
      
   
    
   

   
  </main>

  <footer class="mt-auto text-white-50">
    <p>Siguenos en nuestras redes como <a href="https://getbootstrap.com/" class="text-white">  Instagram</a>, y <a href="https://www.tiktok.com/@blackboxtec?is_from_webapp=1&sender_device=pc" class="text-white">Tik tok</a>.</p>
  </footer>
</div>


    
  </body>
</html>
