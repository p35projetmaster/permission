
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

                                                    <li><a class="menue"  href="{{url('/')}}">Accueil</a></li>
                                                    {{-- <li><a class="menue"  href="{{url('/Presentation')}}">Présentation</a></li> --}}
                                                    <li class="dropdown1"><a class="dropbtn menue">Abonnement</a>
                                                        <div class="dropdown-content">
                                                            <a class="link-hover" href="{{url('Abonnement')}}">S'abonner</a>
                                                            <a class="link-hover" data-toggle="modal" data-target="#modalLoginForm">Se Connecter</a>
                                                            <a class="link-hover" href="{{url('tarif')}}">Tarif</a>
                                                        </div>
                                                    </li>

                                                    <li  ><a  class="menue" href="{{url('/Cahier_de_charge')}}">Cahier de charge</a></li>

                                                    <li  ><a  class="menue" href="{{url('/Points_de_ventes')}}">Point de Ventes</a></li>
                                                    

                                                    
                                                    <li><a class="menue" href="{{url('tarif')}}">Tarifs</a></li>

                                                    <li   class="active"><a class="menue" href="{{url('Contact')}}">Contactez Nous</a></li>
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




            <!-- Breadcrumbs -->
			<section style="background-image: url('{{asset('site/images/slider/slider-image1.jpg')}}')" class="breadcrumbs overlay" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Contactez-Nous</h2>
							<ul>
								<li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
								<li><a href="#"><i class="fa fa-clone"></i>Contactez-Nous</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Breadcrumbs -->
            <!-- Contact Us -->
			<section class="contact-us section-padding">
				<div class="container">
					<!-- <div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<div class="section-title text-center m-bottom-30">
								<h2><span>Contactez</span>Nous</h2>
							</div>
						</div>
					</div>
				-->
					<div class="row">
						<!-- Contact Form -->
						<div class="col-lg-8 col-12">
							<form class="contact-form m-top-30" method="post" action="#">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<span><i class="fa fa-user-o"></i></span>
											<input type="text" name="nom" placeholder="Nom" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<span><i class="fa fa-envelope-o"></i></span>
											<input type="email" name="email" placeholder="Email" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<span><i class="fa fa-clone"></i></span>
											<input type="text" name="sujet" placeholder="Sujet" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group message">
											<span><i class="fa fa-pencil"></i></span>
											<textarea name="msg" rows="4" placeholder="Ecrire votre message Ici" ></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="btn theme-2 effect">Envoyer Message<i class="fa fa-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ Contact Form -->
						<div class="col-lg-4 col-12">
							<div class="contact-info m-top-30">
								<div class="info-head">
									<h2>Informations de contact </h2>
									{{-- <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it kille You think water moves fast.</p> --}}
								</div>
								<div class="info-list">
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-headphones"></i>24/7 Téléphone</span>
										<p>+(213) 23 31 85 92,  +(213) 23 31 86 15</p>
									</div>
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-home"></i>Notre Adresse</span>
										<p>125 Bois des Cars III,Dely-Ibrahim Alger </p>
									</div>
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-envelope"></i>Email Officiel</span>
										<p><a href="mailto:contact@baosem.com">contact@baosem.com</a>, <a href="mailto:support@baosem.com">support@baosem.com</a></p>
									</div>
									<!--/ End Single Address -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Clients Us -->



@endsection
@section('footer')


@endsection
