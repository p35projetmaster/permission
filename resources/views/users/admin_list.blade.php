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
          
           <div class="container mt-5 ">
         <div class="card shadow mb-4">
            <div class=" card-header py-3">
              <a class=" nav-link" href="{{url('/addadmine')}}">

    <i class="fas fa-user-plus"></i>
    <span>Ajouter admin</span></a>
       </div>       
            
            <div class="card-body">
              <div class="table-responsive">
                 @if(count($data) > 0)
                <table class="table table-sm" id="dataTable" cellspacing="0">
                    <thead>
                    <tr>
                      <th scope="col" >Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Email</th>
                      <th scope="col"> </th>
                    </tr>
                  </thead>
                  @foreach($data as $row)
                  <tbody>
                    <td>{{$row->name}}</td>
                    <td>{{$row->prenom}}</td>
                    <td>{{$row->email}}</td>
                    <td >
                      <div class="row">
                        <div class="col">
                      <a href="{{ route('admins.show',$row->id)}}" class="btn btn-light"><i class="fas fa-user-edit fa-2x" style="color: orange" ></i></a></div>
                     <!-- <div class="col">
                        
                <a href="{{ route('admins.show',$row->id)}}" class="btn btn-light"><i class="fas fa-book-reader fa-2x" style="color: green"></i></a>
              </div>-->
              <div class="col">
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalLong">
            <i class="fas fa-trash-alt fa-2x" style="color: red;" type="submit"></i>
             </button></div>
              </div>


                      <!--<div >
                
                      <a class="" href="#">
                       
                      </a>
                      <a class="" href="#">
                       <i class="fas fa-user-edit fa-2x" style="color: orange" ></i>
                      
                      </a>
                      </div>-->
                    </td>
                    
                  </tbody>
                  @endforeach
                </table>
                {{$data->links()}}
                
                @endif</div>

              <div class="col-sm-12">
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Êtes-vous sûr de vouloir supprimer cet utilisateur
      </div>
      <div class="modal-footer">
        <div class="col">
                  <form action="{{ route('admins.destroy', $row->id)}}" method="post">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Yes</button>
                  <!--<i class="fas fa-trash-alt fa-2x" style="color: red;" type="submit"></i>-->
                </form></div>
                
       
      </div>
    </div>
  </div>
</div>

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div></div></div>
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
