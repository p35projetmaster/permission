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
              <h6 class="m-0 font-weight-bold text-primary">Rechercher Annonces</h6>
            </div>
            
            <div class="card-body">
          <form method="POST" id="annance" action="{{ route('searchresult')}}">
                        {{ csrf_field() }}

                <div class="form-row">
                    <div class="col-md-8 col-lg-2 form-group">
                          <input type="number" class="form-control" id="numB" name="numB" placeholder="N_Baosem">
                    </div>
                   <div class="col-md-8 col-lg-5 form-group">
                    
                       <div class="form-group">
                        <select name="ananceur_id" id="ananceur_id" class="form-control ">

                            <option value="">Select annonceur</option>
                            @foreach($annanceur as $an)

                            <option value="{{ $an->code_annonceur }}">{{ $an->abreviation }}</option>

                            @endforeach
                        </select>
                     </div>
                  </div>

                   <div class="form-group col-md-5 form-group">
                        <select name="nature_id" id="nature_id" class="form-control">

                            <option value="">Select nature</option>
                            @foreach($natures as $nature)

                            <option value="{{ $nature->code_nature }}">{{ $nature->libelle_nature }}</option>

                            @endforeach
                        </select>
                     </div>
                
                  </div>

                <div class="form-row">
                    <div class="col-md-8 col-lg-2 form-group">
                          <input type="number" class="form-control" id="numA" name="numA" placeholder="N_Annance">
                    </div>

                    <div class="form-group  col-md-5 form-group">
                        <select name="rubrique_id" id="rubrique_id" class="form-control">

                            <option value="">Select rubrique</option>
                            @foreach($rubriques as $rubrique)

                            <option value="{{ $rubrique->code_rubrique }}">{{ $rubrique->libelle_rubrique }}</option>

                            @endforeach
                        </select>
                     </div>

                  <div class="col-md-5 form-group">
                   <input type="text" class="form-control" id="type" name="type" placeholder="Type"> 
                  </div>                 
                  </div>

                    <div class="form-row">
                    <div class="col-md-8 col-lg-3 form-group">
                        <input type="text" class="form-control" id="objet" name="titre" placeholder="objet">
                    </div>
                   <div class="col-md-8 col-lg-3 form-group">
                        <input id="dateD" type="date" class="form-control" name="dateD"  placeholder="date_debut">
                  </div>
                    <div class="col-md-8 col-lg-3 form-group">
                        <input id="dateF" type="date" class="form-control" name="dateF" placeholder="Date_fin">
                   </div>
                         <div class="col-md-8 col-lg-3 form-group">
                        <input type="text" class="form-control" id="motcles" name="motcles" placeholder="Mot cles placard">
                     </div>                 
                    </div>
                 <div class="col-md-12 form-group">
                  <div class="form-group" align="center">
                    <button type="reset" class="btn btn-danger col-md-2 " name="annuler" id="annuler">Annuler</button>
                    <button class="btn btn-primary col-md-2" type="submit" name="search" id="search">Rechercher</button>
                    
                  </div>
                 </div>

       </form> 
          

    

      
        

            </div>      
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