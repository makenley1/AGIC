@extends('layouts/master')

@section('style')
<link rel="stylesheet" type="text/css" href="../css/app.css">
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
<link rel="stylesheet" type="text/css" href="../css/details.css">	
<link rel="stylesheet" type="text/css" href="../css/responsive.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">



<link rel="stylesheet" type="text/css" href="css/bootstrap4/bootstrap.min.css">
      <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
      <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
      <link rel="stylesheet" type="text/css" href="../css/main_styles.css">
      <link rel="stylesheet" type="text/css" href="../css/responsive.css">
@stop

@section('content')

<section class="details mt-4">
  <div class="container">
  	<div class="row">
  		<div class="col-md-6 col-12">
  		  <div class="product-heading">
  		    <h2 class="text-dark">Maison a Vendre</h2>
  		    <ul class="list-unstyled list-inline text-dark">
		        <li class="list-inline-item">  Ahmedabad (reg) </li>
		        <li class="list-inline-item"> | </li>
		        <li class="list-inline-item">   Second Owner </li>
		        <li class="list-inline-item"> | </li>
		        <li class="list-inline-item">  36 Views  </li>
		        <li class="list-inline-item"> | </li>
		        <li class="list-inline-item"> 1959661 Used Car ID  </li>
		      </ul>
		    </div>
		    <div class="cars-gallery">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="swiper-zoom-container">
                  <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-zoom-container">
                  <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-zoom-container">
                  <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-zoom-container">
                  <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="swiper-zoom-container">
                  <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
                </div>
              </div>
              <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>

        <div class="swiper-container gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="https://gaadicdn.com/usedcar_image/gallery/VCC_851965_1_1522909196739_22_649825_8_1522909575.jpg">
              </div>
            </div>  
          </div>
        </div>
		  </div> 
		</div>
		<div class="col-md-5 ml-5 mt-5">
      <h3 class="my-3 text-dark">Project Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
      <h3 class="my-3 text-dark">Project Details</h3>
      <ul style="float: left;">
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>
	</div>
</div>

<div class="container mt-3">
  <h2>Toggleable Tabs</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item col-md-4">
      <a class="nav-link active" data-toggle="tab" href="#Details">Details</a>
    </li>
    <li class="nav-item col-md-4">
      <a class="nav-link" data-toggle="tab" href="#commentaire">Commentaire</a>
    </li>
    <li class="nav-item col-md-4">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="Details" class="container tab-pane active"><br>
      <h3>Details</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="commentaire" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>


 <div class="container-fluid">
    <div class="row mt-3">
        <div class="col-12">
            <h3> Maison similaire</h3>
            <p>Maison dans la meme zone</p>
        </div>
    </div>
    
          <div class="col">
            <div class="row ml-2 mr-2">
                <div class="col-12 col-md-3 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="products/details" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-3 my-2 mr-2">
                    <div class="box7">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo156/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ ('products/details') }}" title="View Product">Maison 4 pièces </a></h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-info">99.00 $</p>
                                </div>
                                <div class="col">
                                    <span class="view-count"> 5 <i class="far fa-eye"></i> </span>
                                    <span class="like-count"> 5 <i class="far fa-thumbs-up"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              </div>
            </div>
</div>

<script type="text/javascript">
	 var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      slideToClickedSlide: true,
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
</script>
</section>
@stop