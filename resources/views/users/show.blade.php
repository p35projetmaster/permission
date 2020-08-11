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
           

       <div class="card-header py-3">
              
<a href="{{url('/adminslist')}}">
    <i class="  fa fa-arrow-circle-left fa-2x"></i>
   </a>
            </div>     
            
            <div class="card-body">
              <div class="container">

 <!-- Row -->
 @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div >
                            <div class="card-block">
                                <center class="m-t-30"> <!--<img src="{{asset('admin/img/admin.png')}}" width="150" /> -->
                                    
                                    
                                  <i class="fas fa-user-graduate fa-10x" style="color: blue"></i>
                                  <hr>
                                
                                <h6 class="m-0 font-weight-bold text-primary">{{$role[0]}}: {{$admin->name}} {{$admin->prenom}}</h6>
                                </center> 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" method="POST" action="{{ route('admins.update', $admin->id) }}">
                                  @csrf  

@method('PUT')
                                    <div class="form-group">
                                        <label class="col-md-12 text-primary">Nom</label>
                                        <div class="col-md-12">
                                            <input name="nom" type="text" class="form-control form-control-line" value={{$admin->name
                                          }}>
                                        </div>
                                    </div>
                                    <div class="form-group text-primary">
                                        <label class="col-md-12">Prenom</label>
                                        <div class="col-md-12">
                                            <input name="prenom" type="text" class="form-control form-control-line" value={{$admin->prenom
                                          }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12 text-primary">Email</label>
                                        <div class="col-md-12">
                                            <input name="email" type="email" class="form-control form-control-line" name="example-email" id="example-email"  value={{$user->email
                                          }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 text-primary">Password</label>
                                        <div class="col-md-12">
                                            <input name="password" type="password" class="form-control form-control-line" value={{$user->password
                                          }}>
                                        </div>
                                    </div>
                                    <!--<div class="form-group">
                                        <label class="col-md-12 text-primary">Role</label>
                                        <div  class=" col-md-12">
                                        <h5>{{$role[0]}}</h5></div>
                                       <div class="col-md-12">
                                            <input name="role" type="text" class="form-control form-control-line" name="example-email" id="example-email"  value={{$role[0]}}
                                          }}>
                                        </div>
                                        
                                    </div>-->
                                   
 
<div class="row container">
 
@foreach($permissions as $permission)
<div class="col-lg-4 form-group">
<input name="{{$permission->name}}" type='checkbox' value='{{$permission->id}}' {{$user->can($permission->name) ? 'checked':''}}>   {{$permission->name}}</input>
</div>

@endforeach
</div>



                                    <div class=" col-sm-12 form-group">
                                        <div class="p-3 float-right">
                                            <button class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

       </div></div>
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
