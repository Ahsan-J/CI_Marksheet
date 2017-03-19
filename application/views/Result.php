<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    
    <?= link_tag('public/css/paper_bootstrap.css');?>
</head>
<body>
    <div class = "container">
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Subject</th>
      <th>Marks</th>
      <th>Grade</th>
      <th>Percentage</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Sindhi </td>
      <td><?= $Sindhi; ?></td>
      <td><?php if($Sindhi>33){
        echo 'Cleared';
      }
      else{
        echo 'Failed';
      } ?></td>
      <td><?= $SindhiPer; ?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Computer Science</td>
      <td><?= $Comp; ?></td>
      <td><?php if($Comp>34){
        echo 'Cleared';
      }
      else{
        echo 'Failed';
      } ?></td>
      <td><?= $CompPer; ?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>English</td>
      <td><?= $English; ?></td>
      <td><?php if($English>33){
        echo 'Cleared';
      }
      else{
        echo 'Failed';
      } ?></td>
      <td><?= $EngPer; ?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Pakistan Studies</td>
      <td><?= $Pst; ?></td>
      <td><?php if($Pst>33){
        echo 'Cleared';
      }
      else{
        echo 'Failed';
      } ?></td>
      <td><?= $PstPer; ?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Chemistry</td>
      <td><?= $Chemistry; ?></td>
      <td><?php if($Chemistry>33){
        echo 'Cleared';
      }
      else{
        echo 'Failed';
      } ?></td>
      <td><?= $ChemPer; ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class="success">
      <td>Total</td>
      <td></td>
      <td><?= $total; ?></td>
      <td><?= $Grade; ?></td>
      <td><?= $percentage; ?></td>
    </tr>
    
  </tbody>
</table> 
</div>
<script src = "<?= base_url()?>public/js/jquery.js"></script>
<script src = "<?= base_url()?>public/js/bootstrap.js"></script>
</body>
</html>