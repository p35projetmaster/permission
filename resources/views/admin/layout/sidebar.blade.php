<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-5">Baosem</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->

<li class="nav-item">
  <a class="nav-link" href="{{url('/')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Appel d'offre</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Components</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Components:</h6>
      <a class="collapse-item" href="#">Buttons</a>
    </div>
  </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
@can('Importation')
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
     <i class="fas fa-fw fa-table"></i>
    <span>Importation</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
    
      <a class="collapse-item" href="{{url('/importer_annonceur')}}">Annonceur</a>
      <a class="collapse-item" href="{{url('/importer_annonce')}}">Annonce</a>
    </div>
  </div>
</li>
@endcan
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Addons
</div>

<!-- Nav Item - Pages Collapse Menu 
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Pages</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Login Screens:</h6>
      <a class="collapse-item" href="#">Login</a>
      <a class="collapse-item" href="#">Register</a>
      <a class="collapse-item" href="#">Forgot Password</a>
      <div class="collapse-divider"></div>
      <h6 class="collapse-header">Other Pages:</h6>
      <a class="collapse-item" href="#">404 Page</a>
      <a class="collapse-item" href="#">Blank Page</a>
    </div>
  </div>
</li>
-->
<!-- Nav Item - Charts -->
<!--
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span></a>
</li>
-->
@can('Demandes')

<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-poll-h"></i>
    <span>Demandes</span></a>
</li>
@endcan

@can('Abonnees')
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-users"></i>
    <span>Abonneés</span></a>
</li>
@endcan
@can('Role')
<li class="nav-item">
  <a class="nav-link" href="{{url('/adminslist')}}">
    <i class="fas fa-user-graduate"></i>
    <span>Admin</span></a>
</li>
@endcan

<!-- Nav Item - Tables -->
@can('Archive')
<li class="nav-item">
  <a class="nav-link" href="{{url('/TransfertArchive')}}">
   <i class="fas fa-retweet"></i> 
   
    <span>Archive</span></a>
</li>
@endcan

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
