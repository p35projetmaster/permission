@extends('site.partials.layout')
@section('header')
@endsection
@section('corp')

    <!-- Breadcrumbs -->


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

                                                    <li class="menue"><a class="menue"  href="{{url('/')}}">Accueil</a></li>
                                                    {{-- <li><a class="menue"  href="{{url('/Presentation')}}">Présentation</a></li> --}}
                                                    <li class="dropdown1"><a class="dropbtn menue">Abonnement</a>
                                                        <div class="dropdown-content">
                                                            <a class="link-hover" href="{{url('Abonnement')}}">S'abonner</a>
                                                            <a class="link-hover" data-toggle="modal" data-target="#modalLoginForm">Se Connecter</a>
                                                            <a class="link-hover" href="{{url('tarif')}}">Tarif</a>
                                                        </div>
                                                    </li>
                                                    <li ><a  class="menue" href="{{url('/Cahier_de_charge')}}">Cahier de charge</a></li>
                                                    <li  ><a  class="menue" href="{{url('/Points_de_ventes')}}">Point de Ventes</a></li>
                                                    

                                                    <li class="active"><a class="menue" href="{{url('tarif')}}">Tarifs</a></li>


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
            




    <section style="background-image: url('{{asset('site/images/slider/slider-image1.jpg')}}')" class="breadcrumbs overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Tarifs</h2>
                    <ul>
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Accueil</a></li>
                        <li><a href="#"><i class="fa fa-clone"></i>Tarifs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
                        <div class="col-lg-9 col-12">
                            <div class="contact-form m-top-20" >
                                <div class="welcome-text">
                                     <div class="welcome-text-inner">
                                         <div class="welcome-text-content">
                                <h4 class="text-primary" align="center">Tarifs d'abonnement</h4></br>
           
           <p>Que vous soyez lecteur régulier ou occasionnel, le <span class="color" style="font-weight:600">BAOSEM</span> a conçu plusieurs formules d'abonnement adaptées à votre style de vie. A vous de choisir la formule qui vous convient le mieux !</p></br>
                              

                                  <table class="table table-bordered">
                                      <thead>
                                         <tr class="table-primary">
                                              <th>Durée</th>
                                              <th>Abonnement version Internet</th>
                                              <th>Abonnement version imprimée</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="table-active">
                                              <td>6 Moins</td>
                                              <td>  14 875 DA / 300 € *</td>
                                              <td>  14 875 DA</td>
                                         </tr>
                                         <tr class="table-active">
                                             <td>1 Ans</td>
                                              <td>  29 750 DA / 600 € *</td>
                                             <td>   29 750 DA / 600 € *</td>
                                         </tr>
                                     </tbody>
                                 </table> </br>
                                <h4 class="text-primary" align="center">Tarifs de retrait du cahier de charge </h4></br>
                                <p>Le <span class="color" style="font-weight:600">BAOSEM</span>  assure le service du retrait de cahiers des charges pour le compte de ses clients</p>
                           </br>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-centre-tab" data-toggle="pill" href="#pills-centre" role="tab" aria-controls="pills-centre" aria-selected="true">Centre</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-est-tab" data-toggle="pill" href="#pills-est" role="tab" aria-controls="pills-est" aria-selected="false">Est</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-ouest-tab" data-toggle="pill" href="#pills-ouest" role="tab" aria-controls="pills-ouest" aria-selected="false">Ouest</a>
  </li>
    <li class="nav-item">
    <a class="nav-link" id="pills-sud-tab" data-toggle="pill" href="#pills-sud" role="tab" aria-controls="pills-sud" aria-selected="false">Sud</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-centre" role="tabpanel" aria-labelledby="pills-centre-tab">


          <table class="table table-bordered">
                                      <thead>
                                         <tr class="table-primary">
                                              <th scope="col">Villes</th>
                                              <th scope="col">Tarifs</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="table-active">
                                       
                                              <td>Béjaia</td>
                                              <td>  4500 DA / 90 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Zone d'activités Béjaia</td>
                                             <td>4500 DA / 90 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Zone industrielle Béjaia</td>
                                              <td>4500 DA / 90 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Bordj Bou Arrerij</td>
                                             <td>4500 DA / 90 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Sétif </td>
                                              <td>4500 DA / 90 € *</td>
                                         </tr>
                                     </tbody>
                                 </table>





  </div>
  <div class="tab-pane fade" id="pills-est" role="tabpanel" aria-labelledby="pills-est-tab">  <table class="table table-bordered">
                                      <thead>
                                         <tr class="table-primary">
                                              <th scope="col">Villes</th>
                                              <th scope="col">Tarifs</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="table-active">
                                       
                                              <td>Annaba</td>
                                              <td>4000 DA / 80 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Azzaba (Skikda)</td>
                                             <td>3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Skikda</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Zone d'activités Skikda</td>
                                             <td>3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Zone industrielle Skikda</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                     </tbody>
                                 </table>
</div>
  <div class="tab-pane fade" id="pills-ouest" role="tabpanel" aria-labelledby="pills-ouest-tab">
      
    <table class="table table-bordered">
                                      <thead>
                                         <tr class="table-primary">
                                              <th scope="col">Villes</th>
                                              <th scope="col">Tarifs</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="table-active">
                                       
                                              <td>Ain-el-Bia (Oran)</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Zone industrielle d'Arzew</td>
                                             <td>3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Bethioua (Oran)</td>
                                              <td>3600 DA / 60 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Bir-el-Djir</td>
                                             <td>3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Es-seddikia</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                                  <tr class="table-active">
                                     
                                              <td>Zone industrielle Es Senia</td>
                                             <td>3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Gdyel (Oran)</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Zone industrielle Hassi-Bounif</td>
                                             <td>3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Oran</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                      
                                     </tbody>
                                 </table>

  </div>
   <div class="tab-pane fade" id="pills-sud" role="tabpanel" aria-labelledby="pills-sud-tab">
      <table class="table table-bordered">
                                      <thead>
                                         <tr class="table-primary">
                                              <th scope="col">Villes</th>
                                              <th scope="col">Tarifs</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr class="table-active">
                                       
                                              <td>Base 24 février</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Haoud el Hamra</td>
                                             <td>5000 DA / 100 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Zone d'activités Hassi-Messaoud</td>
                                              <td>3000 DA / 60 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Zone industrielle Hassi-Messaoud</td>
                                             <td>   3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>In Aménas</td>
                                              <td>  6500 DA / 130 € *</td>
                                         </tr>
                                                  <tr class="table-active">
                                     
                                              <td>Base Irara</td>
                                             <td>   3000 DA / 60 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Djelfa</td>
                                              <td>  3000 DA / 60 € *</td>
                                         </tr>
                                         <tr class="table-active">
                                     
                                              <td>Ghardaia</td>
                                             <td>5000 DA / 100 € *</td>
                                         </tr>
                                            <tr class="table-active">
                                       
                                              <td>Laghouat</td>
                                              <td>5000 DA / 100 € *</td>
                                         </tr>
                                             <tr class="table-active">
                                       
                                              <td>Toughourt</td>
                                              <td>5000 DA / 100 € *</td>
                                         </tr>
                                             <tr class="table-active">
                                       
                                              <td>Bechar</td>
                                              <td>6500 DA / 130 € *</td>
                                         </tr>
                                     </tbody>
                                 </table>
  
   </div>
</div>



                            </div></div></div></div>
                        </div>
                        <!--/ Contact Form -->
              

      <!--/ End Hero Area -->


           <!-- Skills -->
  
        <!--/ End Skill Video -->
      
    







                <div class="col-lg-3 col-12">
                            <div class="contact-info m-top-20">
                               
                                            <h5>Vous pouvez télécharger la grille tarifaire</h5></br>
                                            <button type="button" class="btn btn-info"> <a href="{{asset('site/formulaire.pdf')}}">Télécharger</a></button>
   
                            </div>
                        </br></br> </br> </br> </br> </br> </br> </br> </br> </br> </br> </br>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

                            <div class="contact-info m-top-20">
                               
                                            <h5>Vous pouvez télécharger la grille tarifaire</h5></br>
                                            <button type="button" class="btn btn-info"> <a href="{{asset('site/formulaire.pdf')}}">Télécharger</a></button>
   
                            </div>
                </div></br>

                </div>
                </div>
            </section>

            <!--/ End C



@endsection
@section('footer')


@endsection


