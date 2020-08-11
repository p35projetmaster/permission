@extends('site.partials.layout')
@section('header')
@endsection
@section('corp')





        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>




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

                                                    <li ><a  class="menue" href="{{url('/Cahier_de_charge')}}">Cahier de charge</a></li>

                                                    <li  class="active"><a  class="menue" href="{{url('/Points_de_ventes')}}">Point de Ventes</a></li>

                                                    
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
                    <h2>Point de ventes</h2>
                    <ul>
                        <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Accueil</a></li>
                        <li><a href="#"><i class="fa fa-clone"></i>Point de ventes</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
        
    <div style="width:100%; height:3%"> </div>
        
    <!--/ End Breadcrumbs -->
    <!-- Contact Us -->

  <div class="position-relative" style="left: 300px"><p>Le Bulletin  <span class="color" style="font-weight:600">BAOSEM</span> est aussi disponible au niveau des points de ventes au : Centre, Est, Ouest et sud du pays</p>
  </div></br>
	
    <div id="map"  style="width:100%; height:80%"> </div>
   
  
   
    <!--/ End Clients Us -->



@endsection
@section('footer')


@endsection

<script type="text/javascript">
         function initialize() {
		var data = <?php echo JSON_encode($localisations); ?>;

        var map = L.map('map').setView([28.5, 3.5], 5); // LIGNE 18

        var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { // LIGNE 20
            attribution: '© OpenStreetMap contributors',
            maxZoom: 20
        });
	
		 var greenIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

L.marker([28.5, 3.5], {icon: greenIcon}).addTo(map);
		
L.marker([data[0].lat, data[0].lng], {icon: greenIcon}).bindPopup('<h3>'+data[0].Nom+'</h3></br>'+data[0].city).addTo(map);     
        
    for (var i = 1; i < data.length; i++)
    {     
   L.marker([data[i].lat, data[i].lng])
  .bindPopup('<h5>'+data[i].Nom+'</h5></br>'+'<h6>'+data[i].city+'</h6>')
  .addTo(map);
        map.addLayer(osmLayer);
         console.log(data);
         }

         }


</script>


