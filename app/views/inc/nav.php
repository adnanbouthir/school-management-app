
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
          <?php if(isset($_SESSION['admin_id'])) :  ?>
          <a class="nav-link" href="<?php echo URLROOT;?>/students">students</a>
          <?php endif; ?>
          </li>
          <li class="nav-item">
          <?php if(isset($_SESSION['admin_id'])) :  ?>
          <a class="nav-link proof-link" id="prof-link" href="<?php echo URLROOT;?>/profs">proffesors</a>
          <?php endif; ?>
          </li>
          <li>
          <?php if(isset($_SESSION['admin_id'])) :  ?>
          <a class="nav-link" href="<?php echo URLROOT;?>/parents">parents</a>
          <?php endif; ?>
          </li>
          <li>
          <?php if(isset($_SESSION['admin_id'])) :  ?>
          <a class="nav-link" href="<?php echo URLROOT;?>/statistics">statistics</a>
          <?php endif; ?>
          </li>
        </ul>
        
        <ul class="d-flex flex-row-reverse bd-highlight mt-3">
          <?php if(isset($_SESSION['admin_id'])) :  ?>
            <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="<?php echo URLROOT;?>/users/logout">logout</a>
          </li>
          <form action="" method="POST" class="d-flex search-form" >
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
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