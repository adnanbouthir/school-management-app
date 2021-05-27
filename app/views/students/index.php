<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>
<?php flash('student_message'); ?>


<div class="title">
<div class="d-flex justify-content-between">

<div class="py-1 px-4">
<h1>Students</h1>
</div>


  <div class="py-3 px-4">
    <a href="<?php echo URLROOT; ?>/students/add" class="btn btn-primary pull-right">
      <i class="fa fa-pencil"></i> Add student
    </a>
  </div>

</div>

</div>







<!-- 
<div class="row mb-3">
  <div class="col-md-6">
    <h1>Students</h1>
  </div>
  <div class="col-md-6">
    <a href="php echo URLROOT; ?>/students/add" class="btn btn-primary pull-right">
      <i class="fa fa-pencil"></i> Add student
    </a>
  </div>
</div> -->

<?php foreach($data['students'] as $student) : ?>

<div class="container">
<div class="card card-body  mb-3">
  <h5 class="card-tittle mb-4 mx-auto"><?php echo $student->first_name; ?></h5>
  <hr>
  <p class="card-tittle">last name : <?php echo $student->last_name; ?></p>
  <p class="card-tittle">Serial num : <?php echo $student->id; ?></p>

  <a href="<?php echo URLROOT; ?>/students/show/<?php echo $student->id;?>"
    class="btn btn-primary pull-right mx-auto">SHOW MORE</a>




</div>
</div>


<?php endforeach; ?>
<?php require APPROOT .'/views/inc/footer.php'; ?>