
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
                                                    <li class="active" > <div class="dropdown1"><a class="dropbtn menue">Abonnement</a>
                                                        <div class="dropdown-content">
                                                            <a class="link-hover" href="{{url('Abonnement')}}">S'abonner</a>
                                                            <a class="link-hover" data-toggle="modal" data-target="#modalLoginForm">Se Connecter</a>
                                                            <a class="link-hover" href="{{url('tarif')}}">Tarif</a>
                                                        </div></div>
                                                    </li>

                                                    <li  ><a  class="menue" href="{{url('/Cahier_de_charge')}}">Cahier de charge</a></li>
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
 <!--   <section style="background-image: url('{{asset('site/images/slider/slider-image1.jpg')}}')" class="breadcrumbs overlay" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Abonnement</h2>
                            <ul>
                                <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="#"><i class="fa fa-clone"></i>Abbonnement</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section> -->

 <section class="skills section-padding p-top-40" >
        <!--/ End Skill Video -->
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12">
              <div class="skill-main m-top-30">
                
                <div class="tab-main">
                  <!-- Tabs Nav -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a class="active" href="#tab1" role="tab" data-toggle="tab">Personne</a></li>
                    <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">Entreprise</a></li>
                </ul>
                <!--/ End Tabs Nav -->
                  <div class="tab-content">
                    <!-- Tab Single  -->
                    <div role="tabpanel" class="tab-pane active fade show" id="tab1">
                         <div class="content-inner m-top-30">
                            
                            
                <!--form personne abonnement en cours -->
                <form class="text-center  border-light p-5" action="#!">


                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="prenom" class="form-control" placeholder="Prenom" required>
                        </div>
                        
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" name="identite" autocomplete="off" class="form-control mb-4" placeholder="Nemero d'identite ou carte d'artisan">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text"name="facturation" autocomplete="off" class="form-control mb-4" placeholder="facturation" required>
                        </div>
                        
                    </div>

                   
                    <!-- E-mail -->
                    <input type="email" name="email" autocomplete="off" class="form-control mb-4" placeholder="E-mail">
                    <input type="text" name="facturation" autocomplete="off" class="form-control mb-4" placeholder="facturation" >
                     <div class="form-row mb-4">
                        <div class="col">
                            <!-- telephone -->
                            <input type="text" name="tel" class="form-control" placeholder="Telephone">
                        </div>
                        <div class="col">
                            <!-- fax -->
                            <input type="text" name="fax" class="form-control" placeholder="fax">
                        </div>

                        
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- mobile 1 -->
                            <input type="text" name="Mobile1" class="form-control" placeholder="Mobile 01">
                        </div>
                        <div class="col">
                            <!-- mobile2 -->
                            <input type="text" name="Mobile2" class="form-control" placeholder="Mobile 02">
                        </div>
                     
                        <!-- mobile 1 -->
                    </div>
                    <input type="text" name="Siteweb" autocomplete="off" class="form-control mb-4" placeholder="Site web">

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
                    <div class="form-group col-md-14">
      
                      <select id="inputState" class="form-control">
                         <option class="hidden"  selected disabled>Secture d'activite principale...</option>
                         <option>...</option>
                     </select>
                    </div>
                    <div class="form-group shadow-textarea">
  <label for="exampleFormControlTextarea6">Shadow and placeholder</label>
  <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."></textarea>
</div>
                     <div  class="form-group col-md-14">
                        <select id="inputState" class="form-control">
                         <option  class="hidden"  selected disabled>Type d'abonnement</option>
                         <option onclick="Show('1');">Abonemment en cours</option>
                         <option onclick="Show('2');">Abonemment archives</option>
                         <option onclick="Show('3');">Abonemment en cours et archives</option>
                     </select>
                    </div>

                    <div id="encours" style="display: none">
                    <div class="form-group col-md-14" >
      
                      <select id="inputState" class="form-control" >
                         <option  class="hidden"  selected disabled>Choix formule d'abonnement</option>
                         <option>forme 1</option>
                         <option>forme 2</option>
                         <option>forme 3</option>
                     </select>
                    </div>
                     <div class="form-group col-md-14">
                        <select id="inputState" class="form-control" >
                         <option class="hidden"  selected disabled>Secteur a surveiller, choix multiple</option>
                         <option>enrgie</option>
                         <option>commerce</option>
                         <option>Economie</option>
                     </select>
                    </div>
                    </div>

                    <div id="archives" style="display: none">
                    <div class="form-group col-md-14" >
      
                      <select id="inputState" class="form-control" >
                         <option  class="hidden"  selected disabled>Duree d'abonnement</option>
                         <option>6 moin</option>
                         <option>1 ans</option>
                         <option>2 ans</option>
                     </select>
                    </div>
                    <div class="form-group col-md-14" >
                        <select id="inputState" class="form-control" >
                         <option class="hidden"  selected disabled>Annees archive</option>
                         <option>2000</option>
                         <option>2001</option>
                         <option>2002</option>
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

                </form> <!--endform -->
                         </div>
                     </div>
                       <!--/ End Tab Single personne  -->
                    <div role="tabpanel" class="tab-pane fade show" id="tab2">
                        <div class="content-inner m-top-30">
                            <!--forme -->
                         <form style="margin-bottom:30px" class="text-center border border-light p-5" action="#!">

                    <input type="text" name="nom" autocomplete="off" class="form-control mb-4" placeholder="Nom ou raison social">
                    <input  type="text" name="nrc" autocomplete="off" class="form-control mb-4" placeholder="Numero RC ou equiv">

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="fiscal" class="form-control" placeholder="Numero fiscal ou equiv">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" name="article" class="form-control" placeholder="Numero article d'imposition">
                        </div>
                        
                    </div>
                    

                    <!-- E-mail -->
                    <input type="email" name="email" autocomplete="off" class="form-control mb-4" placeholder="E-mail">
                    <input type="text" name="facturation" autocomplete="off" class="form-control mb-4" placeholder="facturation">
                     <div class="form-row mb-4">
                        <div class="col">
                            <!-- telephone -->
                            <input type="text" name="tel" class="form-control" placeholder="Telephone">
                        </div>
                        <div class="col">
                            <!-- fax -->
                            <input type="text" name="fax" class="form-control" placeholder="fax">
                        </div>

                        
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- mobile 1 -->
                            <input type="text" name="Mobile1" class="form-control" placeholder="Mobile 01">
                        </div>
                        <div class="col">
                            <!-- mobile2 -->
                            <input type="text" name="Mobile2" class="form-control" placeholder="Mobile 02">
                        </div>
                     
                        <!-- mobile 1 -->
                    </div>
                    <input type="text" name="Siteweb" autocomplete="off" class="form-control mb-4" placeholder="Site web">

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
                    <div class="form-group col-md-14">
      
                      <select id="inputState" class="form-control">
                         <option selected>Secture d'activite principale...</option>
                         <option>...</option>
                     </select>
                    </div>
                     <div  class="form-group col-md-14">
                        <select id="inputState" class="form-control">
                         <option  class="hidden"  selected disabled>Type d'abonnement</option>
                         <option onclick="Showentreprise('1');">Abonemment en cours</option>
                         <option onclick="Showentreprise('2');">Abonemment archives</option>
                         <option onclick="Showentreprise('3');">Abonemment en cours et archives</option>
                     </select>
                    </div>
                    <div id="encoursentreprise" style="display: none">
                        <h4 class="text-primary" align="center">Données abonnement en cours</h4>
                    <div class="form-group col-md-14" >
      
                      <select id="inputState" class="form-control" >
                         <option  class="hidden"  selected disabled>Choix formule d'abonnement</option>
                         <option>forme 1</option>
                         <option>forme 2</option>
                         <option>forme 3</option>
                     </select>
                    </div>
                     <div class="form-group col-md-14">
                        <select id="inputState" class="form-control" >
                         <option class="hidden"  selected disabled>Secteur a surveiller, choix multiple</option>
                         <option>enrgie</option>
                         <option>commerce</option>
                         <option>Economie</option>
                     </select>
                    </div>
                    </div>

                    <div id="archivesentreprise" style="display: none">
                    <h4 class="text-primary" align="center">Donneés abonnement archives </h4>
                    <div class="form-group col-md-14" >
      
                      <select id="inputState" class="form-control" >
                         <option  class="hidden"  selected disabled>Duree d'abonnement</option>
                         <option>6 moin</option>
                         <option>1 ans</option>
                         <option>2 ans</option>
                     </select>
                    </div>
                    <div class="form-group col-md-14" >
                        <select id="inputState" class="form-control" >
                         <option class="hidden"  selected disabled>Annees archive</option>
                         <option>2000</option>
                         <option>2001</option>
                         <option>2002</option>
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

                <!--endform -->
                        </div>
                    </div>
                </div>
            </div>
                </div>
             </div>
            
             <div class="col-lg-3 col-12">
                        <div class="tab-main" >
               
                <h4 align="center">Vous pouvez télécharger le formulaire d'abonnement.</h4></br>
                                            
                                            <button class="btn btn-info my-4 btn-block" type="submit"><a href="{{asset('site/formulaire.pdf')}}">Telecharger</a></button>
         </div>
        </div>
</section>
						
	<script type="text/javascript">
        
     function Show(t1) {
        var NameDiv1 = document.getElementById('encours');
        var NameDiv2 = document.getElementById('archives');
        if (t1==='1'){
         NameDiv1.style.display = 'block';
         NameDiv2.style.display = 'none';
        }
        else if (t1==='2'){
         NameDiv2.style.display = 'block';
         NameDiv1.style.display = 'none';
        }
        else{
            NameDiv1.style.display = 'block';
            NameDiv2.style.display = 'block';
        }
       
}   
function Showentreprise(t1) {
        var NameDiv1 = document.getElementById('encoursentreprise');
        var NameDiv2 = document.getElementById('archivesentreprise');
        if (t1==='1'){
         NameDiv1.style.display = 'block';
         NameDiv2.style.display = 'none';
        }
        else if (t1==='2'){
         NameDiv2.style.display = 'block';
         NameDiv1.style.display = 'none';
        }
        else{
            NameDiv1.style.display = 'block';
            NameDiv2.style.display = 'block';
        }
       
}   
    </script>					



@endsection
@section('footer')


@endsection
