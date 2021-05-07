<h1 class="my-sm-5">Students</h1>

<!-- contact list -->
<h2 class="my-sm-4">Students list:</h2>
<?php
    if ($data) {
        foreach ($data as $value) {
?>
            <hr>
            <div class="row"> 
                <?php var_dump($data); ?>
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></php>
                <p class="col-lg-2"><?php echo  'last name <br>' . $value->last_name; ?></p>
                <p class="col-lg-2"><?php echo 'gender <br>' . $value->gender; ?></p>
                <p class="col-lg-6"><?php echo 'id <br>' . $value->class; ?></p>
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></p>
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></p>

                <div class="col-lg-1 d-flex flex-column">
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </div>
            </div>
<?php
        }
    }else{
        echo "<p>No Students.</p>";
    }
?>