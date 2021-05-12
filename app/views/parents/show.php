<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>

<a href="<?php echo URLROOT; ?>/parents" class="btn btn-primary mt-3"><i class="fa fa-backward"></i>back to parents</a>
<br>
<h1 class="mt-4">more details on parents</h1>






<div class="card card-body mb-3">
<h5 class="card-tittle mb-4"><?php echo $data['parents']->first_name; ?></h5>
<hr>
<p class="card-tittle">last name : <?php echo $data['parents']->last_name; ?></p>
<p class="card-tittle">Serial num : <?php  echo $data['parents']->id; ?></p>
<p class="card-tittle">gender : <?php  echo $data['parents']->gender; ?></p>
<p class="card-tittle">job : <?php  echo $data['parents']->job; ?></p>
<p class="card-tittle">phone : <?php  echo $data['parents']->phone; ?></p>
<p class="card-tittle">adress : <?php echo $data['parents']->adress; ?></p>
<div>
<a href="<?php echo URLROOT; ?>/parents/edit/<?php echo $data['parents']->id;?>" class="btn btn-success pull-left">EDIT</a>
<form class="pull-right" action="<?php echo URLROOT;?>/parents/delete/<?php echo $data['parents']->id;?>" method="POST">
<input type="submit" value="DELETE" class="btn btn-danger">
</form>
</div>




</div>

<?php require APPROOT .'/views/inc/footer.php'; ?>






