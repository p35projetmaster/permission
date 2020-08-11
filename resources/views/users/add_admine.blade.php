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
          
           <div class="container mt-5">
           <div class="card shadow mb-4">
            <div class="card-header py-3 ">
              
            <h6 class="m-0 font-weight-bold text-primary text-center"> Admine</h6> 
            </div>
            <div class="card-body">
              @if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
              @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
            <form class="user" action="{{ route('create_admine') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="name" type="text" class="form-control form-control-user {{ $errors->has('name') ? 'is-invalid' : '' }}"  placeholder="Votre nom" value="{{ old('name') }}" id="exampleFirstName" placeholder="First Name">
                     {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="col-sm-6">
                    <input name="prenom" type="text" class="form-control form-control-user {{ $errors->has('prenom') ? 'is-invalid' : '' }}" value="{{ old('prenom') }}" id="exampleLastName" placeholder="Prenom">
                     {!! $errors->first('prenom', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="email" type="email" class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}" id="exampleInputEmail" placeholder="Email Address">
                     {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="col-sm-6">
                    <input name="role" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Role">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}" id="exampleInputPassword" placeholder="Password">
                    
                    {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="col-sm-6">
                    <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" onkeypress="checkPass();">
                  </div>
                </div>
              
<hr>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="webmaster" id="customCheck1" type="checkbox">
    <label class="m-0 font-weight-bold text-primary custom-control-label" for="customCheck1">Web master</label>
</div>
   <hr>
<div class="form-group row">
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="Importation" id="customCheck2" type="checkbox">
    <label class="custom-control-label" for="customCheck2">Importation</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="Annonnces" id="customCheck3" type="checkbox">
    <label class="custom-control-label" for="customCheck3">Annonnces</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="Archive" id="customCheck4" type="checkbox">
    <label class="custom-control-label" for="customCheck4">Archive</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="supression" id="customCheck5" type="checkbox">
    <label class="custom-control-label" for="customCheck5">Supression placard</label>
</div>
</div>
<hr>
<div class="form-group row">
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="Abonnees" id="customCheck6" type="checkbox">
    <label class="custom-control-label" for="customCheck6">Abonnées</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="Demandes" id="customCheck7" type="checkbox">
    <label class="custom-control-label" for="customCheck7">Demandes</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="admin" id="customCheck8" type="checkbox">
    <label class="custom-control-label" for="customCheck8">Admin</label>
</div>
</div>
<hr>
                  <button class="btn btn-primary btn-user btn-block" type="submit" >Register Account</button>
                <hr>
              </form>
            
            <div class="card-body">
  
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
<script type="text/javascript">
  $('#customCheck1').change(function(e) {
  if (e.currentTarget.checked) {
  $('.rows').find('input[type="checkbox"]').prop('checked', true);
} else {
    $('.rows').find('input[type="checkbox"]').prop('checked', false);
  }
});

$('input[type=submit]').on('click', validate);


</script>