
@extends('site.partials.layout')
@section('header')
@endsection
@section('corp')

<div class="header-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-12">
                <!-- Logo -->
                <div class="logo">
                  <!-- Text Logo -->
                  {{-- <div class="text-logo">
                    <a href="index.html">Baosem.</a>
                  </div> --}}
                  <!-- Image Logo-->
                  <div class="img-logo">
                    <a href="{{url('/')}}"><img src="{{asset('site/images/logo/logo.png')}}" alt="logo"></a>
                  </div>
                </div>
                <!-- Mobile Menu -->
            <div class="mobile-nav"></div>
              </div>
              <div class="col-lg-10 col-12">
                <div class="main-menu-bar">
                  <!-- Main Menu -->
                  <div class="main-menu">
                    <nav class="navbar navbar-expand-lg">
                      <div class="navbar-collapse">
                        <ul class="nav menu navbar-nav">

                                                    <li class="active"><a class="menue"  href="{{url('/')}}">Accueil</a></li>
                          {{-- <li><a class="menue"  href="{{url('/Presentation')}}">Présentation</a></li> --}}
                          <li class="dropdown1"><a class="dropbtn menue">Abonnement</a>
                                                        <div class="dropdown-content">
                                                            <a class="link-hover" href="{{url('Abonnement')}}">S'abonner</a>
                                                            <a class="link-hover" data-toggle="modal" data-target="#modalLoginForm">Se Connecter</a>
                                                            <a class="link-hover" href="{{url('tarif')}}">Tarif</a>
                                                        </div>
                                                    </li>
                                                    <li  ><a  class="menue" href="{{url('/Cahier_de_charge')}}">Cahier de charge</a></li>

                                                    <li><a class="menue" href="{{url('/Points_de_ventes')}}">Point de Ventes</a></li>
                                                     
                                                    <li><a class="menue" href="{{url('tarif')}}">Tarifs</a></li>

                          <li><a class="menue" href="{{url('Contact')}}">Contactez Nous</a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                  <!--/ End Main Menu -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ End Header Inner -->
            



            <!-- Hero Area -->
      <section class="hero-area">
        <div class="hero-slider">
          <!-- Single Slider -->
           <div class="single-slide " style="background-color: #17a2b8">
            <div class="container">
              <div class="row">
			  
                <div class="col-xs-12 col-sm-4" >
                  <!-- Welcome Text -->
                  <div class="welcome-text">
                    <div class="welcome-text-inner">
                      <div class="welcome-text-content">
                        <h1 align="center">Qui somme <span>Nous</span></h1>
                        <p>La société <span class="color" style="font-weight:600">BAOSEM</span> est spécialisée dans l'édtlon et la publication
                                                    du bulletin des appels d'offres du secteur de l'Energle BAOSEM, incluant les publications d'appels à concurrence:</p>
                                                    <ul class="qui_somme_ul">
                                                        <li>Appels d'offres des soclétés du Groupe <span class="color">SONATRACH.</span></li>
                                                        <li>Appels d'offres des sociétés du Groupe <span class="color">SONELGAZ.</span></li>
                                                        <li>Appels d'offres d'autres Entités du Secteur de <span class="color">l'Energie.</span></li>
                                                    </ul>
                        <div class="button">
                          <a href="#presentation"  class="btn theme-2 effect scrolll">Découvrir Plus<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Welcome Text -->
                </div>
               
                <div class="col-xs-12 col-sm-6">
                  
<div class="wrapper fadeInDown " >
  <div class="welcome-text ">
  <div id="formContent" style="background-color: #ffffff ">
    <!-- Tabs Titles -->
 <h1 aligne="center">Accés <Span>Abonné</Span> </h1> 
    <!-- Icon -->
   

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
                        @csrf
       <div>              
      <input id="email" type="email" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
       @error('email')
           <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
           </span>
       @enderror
         </div> 
         <div>                     
      
      <input id="password" type="password" class="fadeIn second @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>

      <input type="submit" class="fadeIn fourth" value="Se connecter">
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      @if (Route::has('password.request'))
                                    <a class="underlineHover" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                    </a>
                                @endif
      
    </div>
    </form>
    <div id="formFooter">
      <a class="underlineHover" href="{{url('Abonnement')}}">s'abonner</a>

    </div></div>

  </div>
</div>                </div>  
                
              </div>
            </div>
          </div>
          <!--/ End Slider Single -->
        </div>
      </section>
      <!--/ End Hero Area -->


      <!-- Skills -->
      <section class="skills section-padding p-top-70" id="presentation">
        <!--/ End Skill Video -->
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="skill-main m-top-30">
                <div class="section-title text-left">
                  <h2><span>Présentation</span></h2>
                </div>
                <div class="tab-main">
                  <!-- Tabs Nav -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a class="active" href="#tab1" role="tab" data-toggle="tab"><i class="fa fa-home"></i>A Propos</a></li>
                    <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-pencil"></i>Edition</a></li>
                    <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i>Bulletin</a></li>
                  </ul>
                  <!--/ End Tabs Nav -->
                  <div class="tab-content">
                    <!-- Tab Single  -->
                    <div role="tabpanel" class="tab-pane active fade show" id="tab1">
                      <div class="row">
                        <div class="col-lg-6 col-12">
                        <div class="content-inner m-top-30">
                          <p>La société BAOSEM, filiale des groupes SONATRACH et SONELGAZ été fondée
                                                        le 17 Novembre 2002 dans le cadre de la politique de passation des marchés du
                                                        Secteur de l'Energie.
                                                    </p>
                                                    <p> La société BAOSEM est spécialisée dans l'édition et la publication du bulletin des
                                                        appels d'offres du secteur de l'Energle BENEM, incluant les publications d'appels
                                                        à concurrence :
                                                    </p>
                                                    <ul class="qui_somme_ul">
                                                        <li>Appels d'offres des soclétés du Groupe <span class="color">SONATRACH.</span></li>
                                                        <li>Appels d'offres des sociétés du Groupe <span class="color">SONELGAZ.</span></li>
                                                        <li>Appels d'offres d'autres Entités du Secteur de <span class="color">l'Energie.</span></li>
                                                    </ul>

                                                    <p>Les journées de parutions sont alternées comme suit (sauf jours fériés) :</p>
                                                    <ul class="qui_somme_ul">
                                                        <li>Semaine N: Dimanche, Mardi, Jeudi</li>
                                                        <li>Semaine N1: Lundi, Mercredi,</li>
                                                        <li>Semaine N+2: Dimanche, Mardi, Jeudi...</li>
                                                    </ul>



                        </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="skill-img m-top-30">
                            <img src="{{asset('site/images/skill-img.jpg')}}" alt="#">
                          </div>
                        </div>
                      </div>
                    </div>
                                        <!--/ End Tab Single  -->

                    <!-- Tab Single  -->
                    <div role="tabpanel" class="tab-pane fade show" id="tab2">
                      <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="content-inner m-top-30">
                                                        <p>Notre activité édition s'articule autour de deux principaux axes:</p>
                                                        <ul class="qui_somme_ul">
                                                            <li>
                                                                Edition du bulletin des appels d'offres du becteur de l'Energie
                                                                Disponible en version imprimée et électronique, le bulletin des appels
                                                                d'offres du secteur del'Energie <span class="color">BAOSEM</span> offre la possibilité de consulter plus
                                                                de 400 offres d'affaires par semaine
                                                            </li>
                                                            <li>
                                                                Que vous soyez lecteur regulierou occasionnel, le bulletin des appels
                                                                d'offres du secteur de I Energie <span class="color">BAOSEM</span> offre plusieurs formules de vente et
                                                                d'abonnement adaptéc a vos attente:
                                                            </li>
                                                            <li>
                                                                Que vous soyez lecteur regulierou occasionnel, le bulletin des appels
                                                                d'offres du secteur de I Energie <span class="color">BAOSEM</span> offre plusieurs formules de vente et
                                                                d'abonnement adaptéc a vos attente:
                                                                <ul class="qui_somme_ul">
                                                                    <li>Vente au kiosque (voir nos poins de vente:</li>
                                                                    <li>Vente sur site (Localisation)</li>
                                                                    <li>Abonnenent impri etservica de Evraison assure par la Societe
                                                                        BAOSEM)</li>
                                                                    <li>AbonnenentInternet.</li>
                                                                </ul>
                                                            </li>
                                                        </ul>

                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="skill-img m-top-30">
                            <img src="{{asset('site/images/skill-img.jpg')}}" alt="#">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ End Tab Single  -->
                    <!-- Tab Single  -->
                    <div role="tabpanel" class="tab-pane fade show" id="tab3">
                      <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="content-inner m-top-30">
                                                        <p>
                                                            Le bulletin des appels d'offres du secteur de l'Energie Baostx est édité à raison de
                                                            5 numéros par quinzaine:
                                                        </p>
                                                        <p>
                                                            Le bulletin Beastm est un espace privilégie pour la promotion de l'image de marque
                                                            de votre entreprise avec des formats de placards publicitaires impactants
                                                            (publicité)
                                                        </p>
                                                        <p>
                                                            Notre société assure également des travaux d'édition des supports de
                                                            communication tels :
                                                        </p>
                                                        <ul class="qui_somme_ul">
                                                            <li>
                                                                les revues internes
                                                            </li>
                                                            <li>
                                                                les magazines spécialises
                                                            </li>
                                                            <li>
                                                                les bilans
                                                            </li>
                                                            <li>
                                                                reportages photos
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            Elle prend en charge toule ta chaine de t'edition en allant de la proposition
                                                            d'idées jusqu'a la realisation finale, en passant par la conception. la
                                                            rédaction, la correction et la traduction.
                                                            <br>
                                                            Autres services:
                                                        </p>

                                                        <ul class="qui_somme_ul">
                                                            <li>Publicités</li>
                                                            <li>Traduction</li>
                                                            <li>Retrait de cahier des charge</li>
                                                            <li>Vente sur site (Localisation)</li>
                                                            <li>Archives</li>

                                                        </ul>



                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                          <div class="skill-img m-top-30">
                            <img src="{{asset('site/images/skill-img.jpg')}}" alt="#">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ End Tab Single  -->


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
            <!--/ End Skills -->

<style type="text/css">


</style>





@endsection
@section('footer')


@endsection
<style type="text/css">
  input[type=password] {

  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
  input[type=email] {

  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}


</style>