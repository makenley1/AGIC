@extends('layouts/master')

@section('content')

<div class="home">
	<div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
	<div class="home_content">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="home_title">Agence de Gestion d'Immobillier et de Courtage</h1>
					<div class="home_button trans_200"><a href="#">Savoir plus</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="services-next py-5">
  <div class="container">
    <h2>NOS SERVICES</h2>
      <div class="row mt-5">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="our-services-wrapper mb-60">
                  <div class="services-inner">
                    <div class="our-services-img">
                    <img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
                    </div>
                    <div class="our-services-text">
                      <h4>Location</h4>
                      <p>Trouver votre maison preferez en surfant sur notre site</p>
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
                      <h4>Demenagement</h4>
                      <p>Vous permettant de demanager sans trop vous fatiguer</p>
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
                      <h4>Traiteur</h4>
                      <p>Maintenir votre maison propre et saine en toute integralite</p>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
</section>

<section id="what-we-do" class="py-5">
  <div class="container-fluid">
    <h2 class="section-title h1">What we do</h2>
    <div class="row mt-3">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mr-2" >
          <div class="card-block block-1">
            <h3 class="card-title">Special title</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ ('products') }}" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mr-2" >
          <div class="card-block block-2">
            <h3 class="card-title">Special title</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{ ('products') }}" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mr-2" >
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