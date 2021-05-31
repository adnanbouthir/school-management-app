<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>
<?php flash('prof_message'); ?>


<div class="title">
<div class="d-flex justify-content-between">

<div class="py-1 px-4">
<h1 class="titlejs">professors</h1>
</div>


  <div class="py-3 px-4">
    <a href="<?php echo URLROOT; ?>/profs/add" class="btn btn-primary pull-right">
      <i class="fa fa-pencil"></i> Add professor
    </a>
  </div>

</div>

</div>

<?php foreach($data['profs'] as $prof) : ?>

<div class="container">
<div class="card card-body mb-3">
<h5 class="card-tittle mb-4 mx-auto"><?php echo $prof->first_name; ?></h5>
<hr>
<p class="card-tittle">last name : <?php echo $prof->last_name; ?></p>
<p class="card-tittle">Serial num : <?php echo $prof->id; ?></p>

<a href="<?php echo URLROOT; ?>/profs/show/<?php echo $prof->id;?>" class="btn btn-primary pull-right mx-auto">SHOW MORE</a>




</div>
</div>


<?php endforeach; ?>
<?php require APPROOT .'/views/inc/footer.php'; ?>