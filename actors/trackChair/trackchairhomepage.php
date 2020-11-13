<?php
	session_start();
    if($_SESSION['login_s'] != '5'){
        header('location:../../login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Track chair Home</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../../css/nav_footer_styles.css">

    <style> 
input[type=button], input[type=submit] {
  background-color: #C39BD3;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<nav>
  <div class="logo">Web-COMS</div>
          <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                  <i class="fas fa-bars"></i>
                </label>
    <ul>
      <li><a class="active" href="trackchairhomepage.php">Home</a></li>
      <li><a href="#">Conference List</a></li>
      <li><a href="firstround.php">First-round paper evaluation</a></li>
      <li><a href="paperaccept.php">Paper acceptance</a></li>
      <!-- <li><a href="viewcamerareadycopies.php">View camera ready copies</a></li> -->


    </ul>
  </nav>

  <br><br>

    <p> Welcome Track-chair </p><br><br>

    <div>
        <form action="trackchairhomepage.php" method="post">
            <input type="submit" name="logout" value="Log out" />
        </form>

        <?php
            if(isset($_POST['logout'])){
                session_destroy();
                header('location:../../index.php');
            }
        ?>
    </div>  

            <!-- Footer section -->
         <div class="footer">
            <p>&copy;2020, All rights reserved by www.WebComs.lk</p>
         </div>
</body>

</html>
