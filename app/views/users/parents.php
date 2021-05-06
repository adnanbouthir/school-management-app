<h1 class="my-sm-5">Parents</h1>

<!-- contact list -->
<h2 class="my-sm-4">Parents list:</h2>
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