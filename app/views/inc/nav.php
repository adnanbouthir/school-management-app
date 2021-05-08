<style>
  * {
    overflow: hidden;
  }
</style>
<nav class="navbar navbar-expand navbar-dark bg-dark d-flex p-2 bd-highlight" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo URLROOT;?>/Pages/index">PRIVATE SCHOOL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExample02">
        <ul class="navbar-nav me-auto d-flex flex-row bd-highlight">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo URLROOT;?>/Pages/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT;?>/Pages/about">about us</a>
          </li>
        </ul>
        
        <ul class="d-flex flex-row-reverse bd-highlight mt-3">
          <?php if(isset($_SESSION['admin_id'])) :  ?>
            <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="<?php echo URLROOT;?>/users/logout">logout</a>
          </li>
            <?php else : ?>
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="<?php echo URLROOT;?>/users/register">sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT;?>/users/login">sign in</a>
          </li>
          <?php endif; ?>
        </ul>
       
      </div>
    </div>
  </nav>