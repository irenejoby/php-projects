<?php include_once('admin_header.php'); ?>

  <div class="container">
    <?= form_open('admin/store_article', ['class'=>'form-horizontal']) ?>
    <?= form_hidden('user_id', $this->session->userdata('user_id'));?>
    <fieldset>
      <legend>Add Article</legend>
      <div class="row">
        <div class="col-lg-6">
      <div class="form-group">
        <label for="exampleInputEmail1" class="col-lg-4 control-label">Article Title</label>
        <div class="col-lg-8">
          <?= form_input(['name'=>'title', 'class'=>'form-control', 'placeholder'=>'Title of the Article', 'value'=>set_value('title')]); ?>
          <?= form_error('title'); ?>
        </div>
      </div>
      </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="exampleInputEmail1" class="col-lg-4 control-label">Article Body</label>
            <div class="col-lg-8">
              <?= form_input(['name'=>'body', 'class'=>'form-control', 'placeholder'=>'Add the Article', 'value'=>set_value('body')]); ?>
              <?= form_error('body'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <?php
            echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default']),
                 form_submit(['name'=>'submit', 'value'=>'Add Article', 'class'=> 'btn btn-primary']);

          ?>
      <!-- <button type="submit" class="btn btn-primary">Submit</button>
      <button type="submit" class="btn btn-primary">Cancel</button> -->
        </div>
      </div>
    </fieldset>
    </form>
  </div>

  <?php include_once('admin_footer.php'); ?>
