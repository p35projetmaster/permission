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

                                                    <li class="active"><a  class="menue" href="{{url('/Cahier_de_charge')}}">Cahier de charge</a></li>

                                                    <li  ><a  class="menue" href="{{url('/Points_de_ventes')}}">Point de Ventes</a></li>

                                                    
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






    <!-- Breadcrumbs -->
    <section style="background-image: url('{{asset('site/images/slider/slider-image1.jpg')}}')" class="breadcrumbs overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Cahier de charge</h2>
                    <ul>
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Accueil</a></li>
                        <li><a href="#"><i class="fa fa-clone"></i>Cahier de charge</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
        
          
        
    <!--/ End Breadcrumbs -->
    <!-- Contact Us -->
 
    <!--/ End Clients Us -->

<div class="row">
                        <!-- Contact Form -->
            <div class="col-lg-9 col-12">
            <div class="container" style="margin-top:20px">
			
                <form style="margin-bottom:30px" class="text-center border border-light p-5" action="#!">

                    <p class="h4 mb-4">S'Abonner</p>

                    
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="prenom" class="form-control" placeholder="Prenom">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="tel" class="form-control" placeholder="Téléphone">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <input type="email" name="email" autocomplete="off" class="form-control mb-4" placeholder="E-mail">
                    <div class="form-row mb-4">
                        <div class="col">

                            <select name="pays" class="form-control" >
                                <option value="Algerie">Algerie</option>
                                <option value="Algerie">Algerie</option>
                                <option value="Algerie">Algerie</option>
                                <option value="Algerie">Algerie</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="wilaya" class="form-control" >
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                                <option value="Adrar">Adrar</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            J'accepte les <a href="">conditions d'utilisation</a>
                        </label>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn btn-info my-4 btn-block" type="submit">Valider</button>




                </form>
            <!-- Default form register -->
            </div> </div>
			
                        <!-- Contact Form -->
                        <div class="col-lg-3 col-12">
						<div class="container" style="margin-top:60px">
						<div class="border border-light p-4" >
						

               
				<h4 align="center">Vous pouvez télécharger le formulaire en format PDF</h4></br>
                                            <button type="button" class="btn btn-info" style="margin-left:25px"> <a href="{{asset('site/formulaire.pdf')}}">Telecharger</a></button>
				</div>
				</div>
				</div>
				</div>

@endsection
@section('footer')


@endsection