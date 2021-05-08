<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>

<div class="row mb-3">
  <div class="col-md-6">
  <h1>Students</h1>
  </div>
  <div class="col-md-6">
  <a href="<?php echo URLROOT; ?>/students/add" class="btn btn-primary pull-right">
  <i class="fa fa-pencil"></i> Add student
  </a>
  </div>
</div>
<?php foreach($data['students'] as $student) : ?>

<div class="card card-body mb-3">
<h5 class="card-tittle mb-4"><?php echo $student->first_name; ?></h5>
<p class="card-tittle">last name : <?php echo $student->last_name; ?></p>
<p class="card-tittle">Serial num : <?php echo $student->id; ?></p>
<p class="card-tittle">gender : <?php echo $student->gender; ?></p>
<p class="card-tittle">class : <?php echo $student->class; ?></p>
<p class="card-tittle">email : <?php echo $student->email; ?></p>
<p class="card-tittle">birthdate : <?php echo $student->date_of_birth; ?></p>




</div>

<?php endforeach; ?>
<?php require APPROOT .'/views/inc/footer.php'; ?>