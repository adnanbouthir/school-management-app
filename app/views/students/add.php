<?php require APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/inc/nav.php' ?>


<style>
    .form-signup {
        width: 100%;
        height: 80vh;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signup .checkbox {
        font-weight: 400;
    }

    .form-signup .form-floating:focus-within {
        z-index: 2;
    }

    .form-signup input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signup input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .card {
        background-color: #F7F7F7 !important;
        color: #FF6E6C !important;
    }

    .card:hover {
        background-color: #FF6E6C !important;
        color: #F7F7F7 !important;
    }
</style>
<main class="form-signup">
    <div class="container-signup">
        <div class="col-md-6 mx-auto">
            <div class="card card-body-bg-light mt-5 mb-4">
                
                <h5 class="mx-auto" class="h3 mb-3 fw-normal">Add a student</h5>
            </div>

        </div>
        <form name="myForm" onsubmit="return validateForm()" action="<?php echo URLROOT; ?>/students/add"
            method="POST">
           

           

            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['first_name_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['first_name']; ?>" id="floatingInput" name="first_name"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['first_name_err'] ?> </span>
                <label for="first_name">first name <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['last_name']; ?>" id="floatingInput" name="last_name"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['last_name_err'] ?> </span>
                <label for="last_name">last name <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['class_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['class']; ?>" id="floatingInput" name="class"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['class_err'] ?> </span>
                <label for="class">class <sup>*</sup></label>
            </div>
            
            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['adress_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['adress']; ?>" id="floatingInput" name="adress"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['adress_err'] ?> </span>
                <label for="class">address <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['email']; ?>" id="floatingInput" name="email"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['email_err'] ?> </span>
                <label for="class">email <sup>*</sup></label>
            </div> 



         
        </form>
        
    </div>
</main>

<?php require APPROOT . '/views/inc/footer.php' ?>