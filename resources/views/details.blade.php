@extends('layouts/master')

@section('style')
<link rel="stylesheet" type="text/css" href="../css/app.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/details.css">	
<link rel="stylesheet" type="text/css" href="../css/responsive.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
@stop

@section('content')

<section class="details mt-4">
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-6">
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
	    <div class="cars-overview  card-body pt-3 bg-primary border mt-2">
	       <div class="row">
	          <div class="col-md-12">
	            <h4>Spécifications détaillées</h4>     
		        </div>
		      </div>
		      <div class="row pt-2">
		        <div class="col-md-4">
		          <ul class="list-inline list-unstyled">
                <li class="list-inline-item "> <i class="fas fa-swimmer"></i> piscine</li>
                <li class="list-inline-item"> 24000KM</li>
              </ul>
		        </div>
           <div class="col-md-4">
              <ul class="list-inline list-unstyled">
                <li class="list-inline-item "> <i class="fa fa-calendar-o pr-1"></i> Year :</li>
                <li class="list-inline-item"> 2010</li>
              </ul>
           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-car pr-1"></i> Fuel Type :</li>
		                   <li class="list-inline-item"> Petrol</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-road pr-1"></i> Transmission :</li>
		                   <li class="list-inline-item"> automatic</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-calendar-o pr-1"></i> Condition :</li>
		                   <li class="list-inline-item"> Slightly used</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-car pr-1"></i> Body style :</li>
		                   <li class="list-inline-item">  SUV</li>
		               </ul>
		           </div>
		           
		       </div>
		   </div>

		   <div class="cars-overview  card-body pt-3 bg-primary border mt-2">
		       <div class="row">
		           <div class="col-md-12">
		               <h4>Overview</h4>
		               
		           </div>
		       </div>
		       <div class="row pt-2">
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-road pr-1"></i> Km's Driven :</li>
		                   <li class="list-inline-item"> 24000KM</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-calendar-o pr-1"></i> Year :</li>
		                   <li class="list-inline-item"> 2010</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-car pr-1"></i> Fuel Type :</li>
		                   <li class="list-inline-item"> Petrol</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-road pr-1"></i> Transmission :</li>
		                   <li class="list-inline-item"> automatic</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-calendar-o pr-1"></i> Condition :</li>
		                   <li class="list-inline-item"> Slightly used</li>
		               </ul>
		           </div>
		           <div class="col-md-4">
		               <ul class="list-inline list-unstyled">
		                   <li class="list-inline-item "> <i class="fa fa-car pr-1"></i> Body style :</li>
		                   <li class="list-inline-item">  SUV</li>
		               </ul>
		           </div>
		           
		       </div>
		   </div>    
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
        <div class="col-md-12">
            <h3> Maison similaire</h3>
            <p>Maison dans la meme zone</p>
        </div>
    </div>
    
          <div class="col">
            <div class="row">
                <div class="col-sm-3 my-2 mr-2">
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
                <div class="col-sm-3 my-2 mr-2">
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
                <div class="col-sm-3 my-2 mr-2">
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
                <div class="col-sm-3 my-2 mr-2">
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
                
                <div class="col-sm-3 my-2 mr-2">
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