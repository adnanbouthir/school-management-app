<?php require APPROOT .'/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/nav.php'; ?>
<h1 class="my-sm-5">admins</h1>

<!-- contact list -->
<h2 class="my-sm-4">admins list:</h2>
<?php
    if ($data) {
        foreach ($data as $value) {
?>
            <hr>
            <div class="row">
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></p>
                <p class="col-lg-2"><?php echo  'last name <br>' . $value->last_name; ?></p>
                <p class="col-lg-2"><?php echo 'email adress <br>' . $value->email_adress; ?></p>
                <p class="col-lg-6"><?php echo 'is admin <br>' . $value->is_admin; ?></p>
                <div class="col-lg-1 d-flex flex-column">
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </div>
            </div>
<?php
        }
    }else{
        echo "<p>No admins.</p>";
    }
?>
<h1 class="my-sm-5">professors</h1>

<!-- contact list -->
<h2 class="my-sm-4">professors list:</h2>
<?php
    if ($data) {
        foreach ($data as $value) {
?>
            <hr>
            <div class="row">
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></p>
                <p class="col-lg-2"><?php echo  'last name <br>' . $value->last_name; ?></p>
                <p class="col-lg-2"><?php echo 'email adress <br>' . $value->email_adress; ?></p>
                <p class="col-lg-6"><?php echo 'is admin <br>' . $value->is_admin; ?></p>
                <div class="col-lg-1 d-flex flex-column">
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </div>
            </div>
<?php
        }
    }else{
        echo "<p>No professors.</p>";
    }
?>
<h1 class="my-sm-5">Students</h1>

<!-- contact list -->
<h2 class="my-sm-4">Students list:</h2>
<?php
    if ($data) {
        foreach ($data as $value) {
?>
            <hr>
            <div class="row">
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></p>
                <p class="col-lg-2"><?php echo  'last name <br>' . $value->last_name; ?></p>
                <p class="col-lg-2"><?php echo 'email adress <br>' . $value->email_adress; ?></p>
                <p class="col-lg-6"><?php echo 'is admin <br>' . $value->is_admin; ?></p>
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
<h1 class="my-sm-5">parents</h1>

<!-- contact list -->
<h2 class="my-sm-4">parents list:</h2>
<?php
    if ($data) {
        foreach ($data as $value) {
?>
            <hr>
            <div class="row">
                <p class="col-lg-1 font-weight-bold"><?php echo ' first name <br>' . $value->first_name; ?></p>
                <p class="col-lg-2"><?php echo  'last name <br>' . $value->last_name; ?></p>
                <p class="col-lg-2"><?php echo 'email adress <br>' . $value->email_adress; ?></p>
                <p class="col-lg-6"><?php echo 'is admin <br>' . $value->is_admin; ?></p>
                <div class="col-lg-1 d-flex flex-column">
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </div>
            </div>
<?php
        }
    }else{
        echo "<p>No parents.</p>";
    }
?>
<?php require APPROOT .'/views/inc/footer.php'; ?>