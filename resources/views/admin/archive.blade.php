<!DOCTYPE html>
<html lang="en">

@include('admin.layout.header')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  @include('admin.layout.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin.layout.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
           <div class="container mt-5 text-center">
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Transfert Archives</h6>
            </div>
            
            <div class="card-body">
             <form action="{{ route('archive') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
                <div class="form-row">
                  <div class="col-lg-10 col-12">
                    <input input type="text" class="form-control" placeholder="Entrez l'anne que vous volez archiver" name="year"  required align="centre">
                    
                    
                </div>
            <div class="col-lg-2 col-12">
            <button class="btn btn-primary">Archive</button>
            
    </div></div>
            
        </form></div>
      @if( Session::has( 'success' ))
    <div class="alert alert-success"  role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'success' ) }}</em></div>
   @elseif( Session::has( 'warning' ))
      <!-- here to 'withWarning()' -->
     <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'warning' ) }}</em></div>
@endif        
            </div>
          </div>

    </div>
  


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  @include('admin.layout.footer')

</body>

</html>
