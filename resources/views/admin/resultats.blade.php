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
              <h6 class="m-0 font-weight-bold text-primary">Appel d'offre</h6>
            </div>
           <div>
             @if(count($insert_data) > 1)
              <div class="card-body">
              <div class="table-responsive">
                  
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                  <thead>
            <tr>
                <th>num_baosem</th>
                <th>date_parution_reel</th>
                <th>code_annonceur</th>
                <th>ref_montage</th>
                <th>num_insertion</th>
                <th>titre</th>
               
            </tr>
            </thead>
            
            @foreach($insert_data as $data)
                <tr>
                    <td>{{$data['num_baosem']}}</td>
                    <td>{{$data['date_parution_reel']}}</td>
                    <td>{{$data['code_annonceur']}}</td>
                    <td>{{$data['ref_montage']}}</td>
                    <td>{{$data['num_insertion']}}</td>
                    <td>{{$data['titre']}}</td>
                    

                </tr>
            @endforeach
        </table>


 @endif


  </div></div></div>   </div>  

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

</div>
  @include('admin.layout.footer')

</body>

</html>
