
<?php if($_SESSION['login'])
{
?> 
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">LOG OUT</a>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['login'])
{
?>    
<section class="menu-section">
       <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="dashboard.php" class="w3-bar-item w3-button w3-padding-large">DASHBOARD</a>


    <a href="issued-books.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ISSUED BOOKS</a>
    <a href="available-books.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BOOKS</a>
    <a href="my-profile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MY PROFILE</a>
        <a href="change-password.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CHANGE PASSWORD</a>
  
    <div class="right-div">
                <a href="logout.php" class="btn btn-danger pull-right">LOG OUT</a>
            </div>
      
    </div>
    
   
  </div>
</div>
    </section>
    <?php } else { ?>
       

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">LIBRARY MANAGEMENT SYSTEM </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
           

          </ul>
        </div>
      </div>
    </nav>

        
    </section>

    <?php } ?>