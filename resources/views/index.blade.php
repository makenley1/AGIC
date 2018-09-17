@extends('layouts/master')

@section('content')
 <!-- Home -->
<div class="home">
	<div class="home_content">
		
 <!-- Caroussel -->
<section class="slide-wrapper">
  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item item1 active carousel-item">
          <div class="fill" style=" background-color:#bdb76b;">
            <div class="inner-content">
              <div class="carousel-img">
                <img src="{{ asset('images/agic/Agic.gif') }}" alt="sofa" class="img img-fluid"/>
              </div>

              <div class="carousel-desc">
                <h2>Modern Designer Sofa</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum,
                                          scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique.
                                          Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus,
                                          nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae
                                          cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula
                                          odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut
                                          ut viverra libero.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item item2 carousel-item">
          <div class="fill" style="background-color:#8fbc8f;">
            <div class="inner-content">
              <div class="carousel-img">
                <img src="{{ asset('images/agic/Agic.gif') }}" alt="white-sofa" class="img img-fluid">
              </div>
              <div class="carousel-desc">
                <h2>Vintage Style Sofa </h2>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum,
                      scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique.
                      Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus,
                      nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae
                      cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula
                      odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut
                      ut viverra libero.
                  </p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="item item2 carousel-item">
          <div class="fill" style="background-color:#87cefa;">
            <div class="inner-content">
              <div class="carousel-img">
                <img src="{{ asset('images/agic/Agic.gif') }}" alt="white-sofa" class="img img-fluid">
              </div>
              <div class="carousel-desc">
                <h2>Vintage Style Sofa </h2>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum,
                      scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique.
                      Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus,
                      nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae
                      cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula
                      odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut
                      ut viverra libero.
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
</div>
</div>
<section class="services-next" style="margin-top: -60px;">
  <div class="container">
    <h2>OUR SERVICES</h2>
      <div class="row mt-5">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="our-services-wrapper mb-60">
                  <div class="services-inner">
                    <div class="our-services-img">
                    <img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
                    </div>
                    <div class="our-services-text">
                      <h4>business growth</h4>
                      <p>Proin varius pellentesque nuncia tincidunt ante. In id lacus</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="our-services-wrapper mb-60">
                  <div class="services-inner">
                    <div class="our-services-img">
                    <img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
                    </div>
                    <div class="our-services-text">
                      <h4>business growth</h4>
                      <p>Proin varius pellentesque nuncia tincidunt ante. In id lacus</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="our-services-wrapper mb-60">
                  <div class="services-inner">
                    <div class="our-services-img">
                    <img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
                    </div>
                    <div class="our-services-text">
                      <h4>business growth</h4>
                      <p>Proin varius pellentesque nuncia tincidunt ante. In id lacus</p>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
</section>

<section id="what-we-do">
  <div class="container-fluid">
    <h2 class="section-title h1">What we do</h2>
    <div class="row mt-3">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mr-2">
        <div class="card">
          <div class="card-block block-1">
            <h3 class="card-title">Special title</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ ('products') }}" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mr-2">
        <div class="card">
          <div class="card-block block-2">
            <h3 class="card-title">Special title</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ ('products') }}" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mr-2">
        <div class="card">
          <div class="card-block block-3">
            <h3 class="card-title">Special title</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ ('products') }}" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>
@stop