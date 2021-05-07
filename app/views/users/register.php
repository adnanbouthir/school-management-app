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
</style>
<main class="form-signup">
  <div class="container-signup">
    <form name="myForm" onsubmit="return validateForm()" action="<?php echo URLROOT; ?>/users/login" method="POST">


      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address <sup>*</sup></label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password <sup>*</sup></label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

    </form>
  </div>
</main>

<?php require APPROOT . '/views/inc/footer.php' ?>