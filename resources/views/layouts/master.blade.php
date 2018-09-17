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
      

      <!-- Lingua -->
      <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css"> -->
      <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
      <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
      <link rel="stylesheet" type="text/css" href="css/main_styles.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">







      <title>Faite le meilleur choix avec AGIC !!!</title>
    
    </head>

    <body>
      <div class="super_container">
        @include('layouts/partials/_header')  

        @include('layouts/menus/_nav')

        @yield('content')

        @include('layouts/partials/_footer')  
      </div>

    </body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</html>








  