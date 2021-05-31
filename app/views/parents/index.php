<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>
<?php flash('parent_message'); ?>


<div class="title">
<div class="d-flex justify-content-between">

<div class="py-1 px-4">
<h1 class="titlejs">parents</h1>
</div>


  <div class="py-3 px-4">
    <a href="<?php echo URLROOT; ?>/parents/add" class="btn btn-primary pull-right">
      <i class="fa fa-pencil"></i> Add parent
    </a>
  </div>

</div>

</div>

<?php foreach($data['parents'] as $parent) : ?>

<div class="container">
<div class="card card-body mb-3">
<h5 class="card-tittle mb-4 mx-auto"><?php echo $parent->first_name; ?></h5>
<hr>
<p class="card-tittle">last name : <?php echo $parent->last_name; ?></p>
<p class="card-tittle">Serial num : <?php echo $parent->id; ?></p>

<a href="<?php echo URLROOT; ?>/parents/show/<?php echo $parent->id;?>" class="btn btn-primary pull-right mx-auto">SHOW MORE</a>




</div>
</div>


<?php endforeach; ?>
<?php require APPROOT .'/views/inc/footer.php'; ?>