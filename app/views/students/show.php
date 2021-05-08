<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>

<a href="<?php echo URLROOT; ?>/students" class="btn btn-primary"><i class="fa fa-backward"></i> back to students</a>
<br>
<h1>more details on student</h1>






<div class="card card-body mb-3">
<h5 class="card-tittle mb-4"><?php echo $data['students']->first_name; ?></h5>
<p class="card-tittle">last name : <?php echo $data['students']->last_name; ?></p>
<p class="card-tittle">Serial num : <?php  echo $data['students']->id; ?></p>
<p class="card-tittle">gender : <?php  echo $data['students']->gender; ?></p>
<p class="card-tittle">class : <?php echo $data['students']->class; ?></p>
<p class="card-tittle">parents : <?php echo $data['students']->parents; ?></p>
<p class="card-tittle">adrress : <?php echo $data['students']->adress; ?></p>
<p class="card-tittle">email : <?php echo $data['students']->email; ?></p>
<p class="card-tittle">birthdate : <?php echo $data['students']->date_of_birth; ?></p>
<div>
<a href="<?php echo URLROOT; ?>/students/edit/<?php echo $data['students']->id;?>" class="btn btn-primary pull-left">edit</a>
<a href="<?php echo URLROOT; ?>/students/delete/<?php echo $data['students']->id;?>" class="btn btn-primary pull-right">delete</a>
</div>




</div>

<?php require APPROOT .'/views/inc/footer.php'; ?>






