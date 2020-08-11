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

              <h6 class="m-0 font-weight-bold text-primary">Importer Annonceur</h6>
            </div>
            
            <div class="card-body">

        <form action="{{ route('fileimport') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-12 col-12">  </div>
            <div class="col-lg-8 col-12">
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile" value="file" required>
                    <label class="custom-file-label" for="customFile">Choisir annonceur</label>
                </div></div>
            </div>
            <div class="col-lg-4 col-12">
           <button class="btn btn-primary">Import Annonceur</button>
       </div>
   </div>
   
        </form>
   
   @if( Session::has( 'success' ))
    <div class="alert alert-success"  role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'success' ) }}</em></div>
   @elseif( Session::has( 'warning' ))
      <!-- here to 'withWarning()' -->
     <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'warning' ) }}</em></div>
@endif      
</div></div></div>
<script type="text/javascript">
  var regex = new RegExp("(.*?)\.(csv)$");

function triggerValidation(el) {
  if (!(regex.test(el.value.toLowerCase()))) {
    el.value = '';
    alert('Inserer un Fichier csv');
  }
}


$('.custom-file-input').on('change', function() { 
   let fileName = $(this).val().split('\\').pop(); 
   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
})


</script>

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
