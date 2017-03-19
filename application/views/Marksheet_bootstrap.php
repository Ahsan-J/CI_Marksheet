<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MarkSheet</title>
    <?= link_tag('public/css/paper_bootstrap.css'); ?>
</head>
<body>
    <div class="container">
    <?php echo form_open('Marksheet/result'); ?>
  <fieldset>
    <legend>Marksheet</legend>
    <div class="row">
      <div class="col-lg-6">
      <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name of Student</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'Name','id'=>'inputName','class'=>'form-control','placeholder'=>'Name','value'=>set_value('Name')]); ?>
      </div>
      </div>
      </div>
      <div class="col-lg-6"><?= form_error('Name'); ?></div>
      </div>

      <div class="row">
      
      <div class="col-lg-6">
      <div class="form-group">
      <label for="inputFName" class="col-lg-2 control-label">Father's Name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'FName','id'=>'inputFName','class'=>'form-control','placeholder'=>'Fathers Name','value'=>set_value('FName')]); ?>
      </div>
      </div>
      </div>
       <div class="col-lg-6"><?= form_error('FName'); ?></div>
    </div>
    
      
      <h5>Marks Obtained : </h5>
      <hr>
      <div class="row">
        <div class="col-lg-6"><div class="form-group">

      <label for="inputSindhi" class="col-lg-2 control-label">Sindhi</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'Sindhi','id'=>'inputSindhi','class'=>'form-control','placeholder'=>'Sindhi','type'=>'number','value'=>set_value('Sindhi')]); ?>
      </div>
      </div>
      </div>
        <div class="col-lg-6"><?= form_error('Sindhi'); ?></div>
      </div>
      <div class="row">
        <div class="col-lg-6">
        <div class="form-group">
        <label for="inputComp" class="col-lg-2 control-label">Computer Science</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'Comp','id'=>'inputComp','class'=>'form-control','placeholder'=>'Computer Science','type'=>'number','value'=>set_value('Comp')]); ?>
      </div>
        </div>
        </div>
        <div class="col-lg-6"><?= form_error('Comp'); ?></div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
          <label for="inputEng" class="col-lg-2 control-label">English</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'English','id'=>'inputEng','class'=>'form-control','placeholder'=>'English','type'=>'number','value'=>set_value('English')]); ?>
      </div>
          </div>
        </div>
        <div class="col-lg-6"><?= form_error('English'); ?></div>
        </div>
      

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
          <label for="inputPst" class="col-lg-2 control-label">Pakistan studies</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'Pst','id'=>'inputPst','class'=>'form-control','placeholder'=>'Pakistan studies','type'=>'number','value'=>set_value('Pst')]); ?>
      </div>
      </div>
        </div>
        <div class="col-lg-6"><?= form_error('Pst'); ?>
          </div>
        </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="form-group"><label for="inputChem" class="col-lg-2 control-label">Chemistry</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'Chemistry','id'=>'inputChem','class'=>'form-control','placeholder'=>'Chemistry','type'=>'number','value'=>set_value('Chemistry')]); ?>
      </div></div>
        </div>
        <div class="col-lg-6"><?= form_error('Chemistry'); ?>
        </div>
      </div>
      <hr>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <?php echo form_submit('submit','Enter',['class'=>'btn btn-primary']); ?>
      </div>
    </div>
  </fieldset>
</form>
</div>
<script src = "<?= base_url()?>public/js/jquery.js"></script>
<script src = "<?= base_url()?>public/js/bootstrap.js"></script>
</body>
</html>