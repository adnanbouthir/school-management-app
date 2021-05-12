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
<a href="<?php echo URLROOT; ?>/parents" class="btn btn-primary"><i class="fa fa-backward"></i> back to parents</a>
<main class="form-signup">

    <div class="container-signup">
        <div class="col-md-6 mx-auto">
            <div class="card card-body-bg-light mt-5 mb-4">

                <h5 class="mx-auto" class="h3 mb-3 fw-normal">edit a parent</h5>
            </div>

        </div>
        <form name="myForm" onsubmit="return validateForm()" action="<?php echo URLROOT; ?>/parents/add" method="POST">




            <div class="form-floating">
                <input type="text"
                    class="form-control <?php echo (!empty($data['first_name_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['first_name']; ?>" id="floatingInput" name="first_name">
                <span class="'invalid-feedback"><?php echo $data['first_name_err'] ?> </span>
                <label for="first_name">first name <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="text"
                    class="form-control <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['last_name']; ?>" id="floatingInput" name="last_name">
                <span class="'invalid-feedback"><?php echo $data['last_name_err'] ?> </span>
                <label for="last_name">last name <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['job_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['job']; ?>" id="floatingInput" name="job">
                <span class="'invalid-feedback"><?php echo $data['job_err'] ?> </span>
                <label for="job">job <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['adress_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['adress']; ?>" id="floatingInput" name="adress">
                <span class="'invalid-feedback"><?php echo $data['adress_err'] ?> </span>
                <label for="adress">adress <sup>*</sup></label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : '';?>"
                    value="<?php echo $data['phone']; ?>" id="floatingInput" name="phone">
                <span class="'invalid-feedback"><?php echo $data['phone_err'] ?> </span>
                <label for="phone">phone <sup>*</sup></label>
            </div>

     

      

            <div class="form-floating">
                <select name="gender" id="" class="form-select"  required>
                    <option selected>Gender</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="other">other</option>
                </select>
            </div>

            <div class="form-floating">
                <select name="child" id="" class="form-select"  required>
                    <option selected>select child</option>
                    <?php foreach($data['childs'] as $child) : ?>
                    <option value="<?php echo $child->id;?>"><?php echo $child->first_name; ?></option>
                    <?php endforeach; ?>

                </select>
            </div>


            <button class="w-100 btn btn-lg btn-primary mb-3 mt-3" type="submit">edit parent</button>
        </form>

    </div>
</main>

