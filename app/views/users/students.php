<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>
<h1 class="my-sm-5">Students</h1>

<!-- contact list -->
<h2 class="my-sm-4">Students list:</h2>
<?php
    if ($data) {
        
        foreach ($data as $value) {
?>
            <hr>
            <table class="row table table-striped">

            <thead>
            <td>id</td>
            <td>first name</td>
            <td>last name</td>
            <td>gender</td>
            <td>class</td>
            </thead> 
            <tr><td><?php echo  $value->id; ?></php></td>
            <td><?php echo $value->student; ?></php></td>
            <td><?php echo  $value->student_last; ?></td>
            <td><?php echo  $value->gender; ?></td>
            <td><?php echo   $value->class; ?></td></tr>
                <p class="col-lg-1 font-weight-bold"><?php echo ' serial num <br>' . $value->id; ?></p>
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->student; ?></p>
                <p class="col-lg-2"><?php echo  'last name <br>' . $value->student_last; ?></p>
                <p class="col-lg-2"><?php echo 'gender <br>' . $value->gender; ?></p>
                <p class="col-lg-6"><?php echo 'class <br>' . $value->class; ?></p>
                <br>
                
                <h3>parents</h3>
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></p>
                <p class="col-lg-1 font-weight-bold"><?php echo ' last name <br>' . $value->last_name; ?></p>
                </div>

                <table class="col-lg-1 d-flex flex-column">
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </table>
            
<?php
        }
    }else{
        echo "<p>No Students.</p>";
    }
?>
<?php require APPROOT .'/views/inc/footer.php'; ?>