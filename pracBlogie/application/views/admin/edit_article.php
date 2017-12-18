<?php include_once('admin_header.php'); ?>

  <div class="container">
    <?= form_open("admin/update_article/{$article->id}", ['class'=>'form-horizontal']); 
        // echo form_hidden('article_id', $article->id);
    ?>
    <fieldset>
      <legend>Edit Article</legend>
      <div class="row">
        <div class="col-lg-6">
      <div class="form-group">
        <label for="exampleInputEmail1" class="col-lg-4 control-label">Article Title</label>
        <div class="col-lg-8">
          <?= form_input(['name'=>'title', 'class'=>'form-control', 'placeholder'=>'Article Title', 'value'=>set_value('title', $article->title)]); ?>
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
              <?= form_input(['name'=>'body', 'class'=>'form-control', 'placeholder'=>'Edit the Article', 'value'=>set_value('body', $article->body)]); ?>
              <?= form_error('body'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <?php
            echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default']),
                 form_submit(['name'=>'submit', 'value'=>'Edit Article', 'class'=> 'btn btn-primary']);

          ?>
      <!-- <button type="submit" class="btn btn-primary">Submit</button>
      <button type="submit" class="btn btn-primary">Cancel</button> -->
        </div>
      </div>
    </fieldset>
    </form>
  </div>

  <?php include_once('admin_footer.php'); ?>
