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
            <div class="card card-body-bg-light mt-5 mb-4">
                <?php flash('register_sucess'); ?>
                <h3 class="mx-auto" class="h3 mb-3 fw-normal"> Sign in</h3>
            </div>

        </div>
        <form name="myForm" onsubmit="return validateForm()" action="<?php echo URLROOT; ?>/users/login"
            method="POST">
           

           

            <div class="form-floating">
                <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['email_adress']; ?>" id="floatingInput" name="email"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['email_err'] ?> </span>
                <label for="email">Email address <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['password']; ?>" id="floatingInput" name="password"
                    placeholder="name@example.com">
                <span class="'invalid-feedback"><?php echo $data['password_err'] ?> </span>
                <label for="password">password  <sup>*</sup></label>
            </div>


            <div class="row">
            <div class="col mb-5">
            <a href="<?php echo URLROOT;?>/users/register" class="w-100 btn btn-lg btn-primary mb-3" type="submit">Sign up</a>
                
            </div>
            <div class="col mb-5">
                
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Sign in</button>
                
            </div>
            
            </div>
        </form>
        <div class="card card-body-bg-light mt-2 mb-4">
                <a href=""></a><h3 style="font-size: 18px;" class="mx-auto" class="h3 mb-3 fw-normal">not a member ? click on sign up</h3>
            </div>
    </div>
</main>

<?php require APPROOT . '/views/inc/footer.php' ?>