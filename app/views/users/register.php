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

<main class="form-signup row">
    <div class="container-signup">
        <div class="col-md-6 mx-auto">
            <div class="card card-body-bg-light mt-3 mb-4">
                <h3 class="mx-auto" class="h3 mb-3 fw-normal"> Sign up</h3>
            </div>

        </div>
        <div id="error"></div>
        <form name="myForm" id="form" onsubmit="return validateForm()" action="<?php echo URLROOT; ?>/users/register"
            method="POST">
            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['first_name']; ?>" id="floatingInput" name="fname"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['fname_err'] ?> </span>
                <label for="fname">first name <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['last_name']; ?>" id="floatingInput" name="lname"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['lname_err'] ?> </span>
                <label for="lname">Last name <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['email_adress']; ?>" id="email" name="email"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['email_err'] ?> </span>
                <label for="email">Email address <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['password']; ?>" id="password" name="password"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['password_err'] ?> </span>
                <label for="password">password  <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control <?php echo (!empty($data['confirmp_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['confirm_pass']; ?>" id="floatingInput" name="confirm_pass"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['confirmp_err'] ?> </span>
                <label for="floatingInput">confirm password <sup>*</sup></label>
            </div>
            <div class="row">
            <div class="col mb-5">
                <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Sign up</button>
            </div>
            <div class="col mb-5">
                
            <a href="<?php echo URLROOT;?>/users/login" class="w-100 btn btn-lg btn-primary mb-3" type="submit">Sign in</a>
                
            </div>
            
            </div>
        </form>
    </div>
</main>

<?php require APPROOT . '/views/inc/footer.php' ?>