<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>
<?php flash('prof_message'); ?>

<div class="row mb-3">
  <div class="col-md-6">
  <h1>parents</h1>
  </div>
  <div class="col-md-6">
  <a href="<?php echo URLROOT; ?>/parents/add" class="btn btn-primary pull-right">
  <i class="fa fa-pencil"></i> Add parent
  </a>
  </div>
</div>

<?php foreach($data['parents'] as $prof) : ?>


<div class="card card-body mb-3">
<h5 class="card-tittle mb-4 mx-auto"><?php echo $prof->first_name; ?></h5>
<hr>
<p class="card-tittle">last name : <?php echo $prof->last_name; ?></p>
<p class="card-tittle">Serial num : <?php echo $prof->id; ?></p>

<a href="<?php echo URLROOT; ?>/parents/show/<?php echo $parent->id;?>" class="btn btn-primary pull-right mx-auto">SHOW MORE</a>




</div>

<?php endforeach; ?>
<?php require APPROOT .'/views/inc/footer.php'; ?>