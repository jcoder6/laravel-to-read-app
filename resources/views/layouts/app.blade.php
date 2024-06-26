<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">   
    <title>Document</title>
</head>
   <body>

   <header class="header" id="header">
      <div class="navbar-container">
         <p>To Read App</p>
      </div>
   </header>

      @yield('content')

      <footer class="footer">
         <div class="footer-container">
               <p class="name">Jomer Dorego</p>

               <div class="code-link">
                  <a target="_blank" href="https://github.com/jcoder6/laravel-to-read-app.git"><i class="fa-brands fa-github"></i> Download Code Here.</a>
               </div>
         </div>
      </footer>
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="/script/app.js"></script>                                                 
   </body>                                
</html>