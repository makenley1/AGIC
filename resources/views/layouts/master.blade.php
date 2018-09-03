<!DOCTYPE html>
  <html lang="{{ app()->getLocale() }}">
    <head>

       <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->

      @yield('style')

      <link rel="stylesheet" type="text/css" href="css/app.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" type="text/javascript" href="js/animate.js">
      

      <title>Faite le meilleur choix avec AGIC !!!</title>
    
    </head>

    <body>
        
        @include('layouts/partials/_header')  

        @include('layouts/menus/_nav')

        @yield('content')

        @include('layouts/partials/_footer')  
      </div>

    </body>
</html>








  