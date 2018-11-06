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

<section class="services-next">
  
<div class="services page_section">
    
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h1>Nos Services</h1>
          </div>
        </div>
      </div>

      <div class="row services_row">

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
          <div class="icon_container d-flex flex-column justify-content-end">
            <img src="images/earth-globe.svg" alt="">
          </div>
          <a href="{{'services'}}">
          <h3>Démenagement</h3>
          <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p></a>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
          <div class="icon_container d-flex flex-column justify-content-end">
            <img src="images/earth-globe.svg" alt="">
          </div>
          <a href="{{'services'}}">
            <h3>Traiteur</h3>
          <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
          </a>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
          <div class="icon_container d-flex flex-column justify-content-end">
            <img src="images/earth-globe.svg" alt="">
          </div>
          <a href="services">
            <h3>Amazing Library</h3>
          <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
          </a>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
          <div class="icon_container d-flex flex-column justify-content-end">
            <img src="images/earth-globe.svg" alt="">
          </div>
          <a href="services">
          <h3>Exceptional Professors</h3>
          <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
          </a>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
          <div class="icon_container d-flex flex-column justify-content-end">
            <img src="images/earth-globe.svg" alt="">
          </div>
          <a href="services">
            <h3>Top Programs</h3>
          <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
          </a>
        </div>

        <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
          <div class="icon_container d-flex flex-column justify-content-end">
            <img src="images/earth-globe.svg" alt="">
          </div>
          <a href="services">
          <h3>Graduate Diploma</h3>
          <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

<div class="register">
    <div class="container">
      <div class="row">
        
        <!-- Register Form -->

        <div class="col-lg-6">
          <div class="register_form_container">
            <div class="register_form_title">Contactez-nous</div>
            <form action="#" id="register_form" class="register_form">
              <div class="row register_row">
                <div class="col-lg-6 register_col">
                  <input class="form_input" placeholder="Votre Nom" required="required" type="text">
                </div>
                <div class="col-lg-6 register_col">
                  <input class="form_input" placeholder="Votre Mail" required="required" type="email">
                </div>
                <div class="col-lg-12">
                  <textarea class="form_input form_text" placeholder="Message..." required="required"></textarea>
                </div>
                <div class="col">
                  <button type="submit" class="form_button trans_200">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Register Timer -->

        <div class="col-lg-6">
          <div class="register_timer_container">
            <div class="register_timer_title">AGIC</div>
            <div class="register_timer_text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop