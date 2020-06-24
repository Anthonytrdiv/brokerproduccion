<?php
session_start();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tu Perfil
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Panel</a></li>
      <li><a href="#">Tu Perfil</a></li>
      <li class="active">Datos Personales</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            
          
            <img class="profile-user-img img-responsive img-circle" id='fperfil1' src="<?php echo "../bienvenido/images/users/".$_SESSION['imageuserperfil'];?>" alt="User profile picture">



            <h3 class="profile-username text-center"><?php echo $_SESSION['nameandlast']; ?></h3>
            
            <p class="text-muted text-center"><?php echo $_SESSION['aliastipouser']; ?></p>

         

         
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
  
          <div class="box-body">
         

           

            <button type="button" data-toggle="modal" data-target="#MYFOTO" class="btn btn-block btn-warning btn-lg">Subir Foto</button>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
       
            <li><a href="#settings" data-toggle="tab">Datos Personales</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
            


            <div class="tab-pane" id="settings">
          
              <div id="datospersonales">


              </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="modal fade" id="subirfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

