<?php include('public_header.php'); ?>
  <div class="container">
    <!-- <form class="form_validation" action="" method=""> -->
  <?= form_open('login/admin_login', ['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend>Admin Login</legend>
    <?php if($error = $this->session->flashdata('login_failed')):?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-success">
          <?= $error ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div class="row">
      <div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputEmail1" class="col-lg-2 control-label">UserName</label>
      <div class="col-lg-10">
        <?= form_input(['name'=>'username', 'class'=>'form-control', 'placeholder'=>'UserName', 'value'=>set_value('username')]); ?>
        <?= form_error('username'); ?>
      </div>
    </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="exampleInputPassword1" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <?= form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'password']); ?>
            <?= form_error('password'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?php
          echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default']),
               form_submit(['name'=>'submit', 'value'=>'Login', 'class'=> 'btn btn-primary']);

        ?>
    <!-- <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit" class="btn btn-primary">Cancel</button> -->
      </div>
    </div>
  </fieldset>
  </form>
  </div>

<?php include('public_footer.php'); ?>
