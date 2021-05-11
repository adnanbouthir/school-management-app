<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>

<a href="<?php echo URLROOT; ?>/profs" class="btn btn-primary mt-3"><i class="fa fa-backward"></i>back to proffesors</a>
<br>
<h1 class="mt-4">more details on profs</h1>






<div class="card card-body mb-3">
<h5 class="card-tittle mb-4"><?php echo $data['profs']->first_name; ?></h5>
<hr>
<p class="card-tittle">last name : <?php echo $data['profs']->last_name; ?></p>
<p class="card-tittle">Serial num : <?php  echo $data['profs']->id; ?></p>
<p class="card-tittle">gender : <?php  echo $data['profs']->gender; ?></p>
<p class="card-tittle">subject : <?php  echo $data['profs']->subject; ?></p>
<p class="card-tittle">phone : <?php  echo $data['profs']->phone; ?></p>
<p class="card-tittle">class : <?php echo $data['profs']->Class; ?></p>
<div>
<a href="<?php echo URLROOT; ?>/profs/edit/<?php echo $data['profs']->id;?>" class="btn btn-success pull-left">EDIT</a>
<form class="pull-right" action="<?php echo URLROOT;?>/profs/delete/<?php echo $data['profs']->id;?>" method="POST">
<input type="submit" value="DELETE" class="btn btn-danger">
</form>
</div>




</div>

<?php require APPROOT .'/views/inc/footer.php'; ?>






