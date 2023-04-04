
<?php


include('connect.php');
?>
<style>
  /* PROFIL */

.dropdown-item {
  display: block;
  width: 100%;
  clear: both;
  font-weight: 400;
  color: #3a3b45;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
  padding: 0.5rem 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #2e2f37;
  text-decoration: none;
  background-color: #eaecf4;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #4e73df;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #b7b9cc;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #eaecf4;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #858796;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e3e6f0;
  border-radius: 0.35rem;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

.dropdown .dropdown-menu {
  font-size: 1.5rem;
}

.dropdown {
margin-left: 50px;
  
}
</style>

<header>
    <div style="display: flex;align-items: center;">
      &nbsp;&nbsp;&nbsp;<img width="110" height="110" src="images1/my_logo.png">
       <input id="rech" type="text" name="rech">

       
       <div class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name'];?></span>
                <img  style=" height: 8rem; width: 8rem; border-radius: 50% ;"
                src="avatars/<?=$_SESSION['profil']?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu  shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="mon_profil.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Mon Profile
                </a>
                <!-- <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" >
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
          </div>
    </div><br>
       <!--div de la 2eme ligne-->
       <div style="display: flex;align-items: center;">
  
  <div style="display: flex;align-items: center;">
  <nav>
  <a id="tout" href="acceuil.php">ACCEUIL</a>
  <a id="actu" href="publier.php">JE PUBLIE</a>
  <a id="actu" href="mespubli.php">MES PUBLICATIONS</a>
  </nav>
  </div>

  
  </div>
<!--fin div de la 2eme ligne-->

<!--trait de separation-->
 
 <div class="Trait">	 	
 </div>
  </header>

