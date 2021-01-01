<?php
	session_start();
    if($_SESSION['login_s'] != '3'){
        header('location:../../login.php');
    }
	require '../../dbconfig/config.php';
?>
<?php include 'FileLogicForPublishCameraReadySubGuidelines.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title> Camer Ready Submission Guidelines</title>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../../css/reg_form_style.css">
    <link rel="stylesheet" href="../../css/nav_footer_styles.css">

    <style>
    /* Styles for two buttons inside the form*/
    .ABC {
      background-color: #E5E7E9 ;
      height: 70%;
      /* position: relative; */
      top: 100px;
      left: 0;
      width: 100%;
    }

  .button {
  background-color: #F4D03F  ;
  /* box-shadow: 0 5px 0 darkred; */
  margin-top:140px;
  /* margin-left:500px; */
  color: white;
  padding: 1em 1.5em;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  border-radius:5px;
}

.button:hover {
  background-color: #F1C40F;
  cursor: pointer;
}

.button:active {
  box-shadow: none;
  top: 5px;
}

 

  </style>
  </head>

  <body>

<!-- navbar -->
  <nav>
  <div class="logo">Web-COMS</div>
      <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
              <i class="fas fa-bars"></i>
            </label>
    <ul>
      <li><a href="submittedRPaperList.php">Back</a></li>
      <!--<li><a href="viewConferencesForCC.php">View Conf</a></li>-->
     
      <li style="float:right; margin-right:40px"><a href="../logout.php">Log Out</a></li>

    </ul>
  </nav>
  <br>
  <br>
  <h1 style="color:#7D3C98;text-align:center;">
  <?php 
    //c_name
      // echo "Conference Id :"." ". $_SESSION['c_id'];
      echo "Conference Name :"." ". $_SESSION['c_name'];
      //echo "Conference Name :";

      
?></h1>
<br><br><br>
	

  

    <!-- <h3 style="margin-left:25px;color:dodgerblue;">Conference Guidelines</h3><br> -->


<!-- <table class="content-table"> -->
<!-- <thead> -->
    <!-- <th>Conference ID</th> -->
    <!-- <th>Guidelines File </th> -->
    <!-- <th>File size (in KB)</th> -->
    <!-- <th>View</th> -->

<!-- </thead> -->
<!-- <tbody> -->
<!-- By following code inside php tag , I keep the particular conference Id -->

<section id="ABC" class="ABC">
  <br>
<p style="text-align:center;color:#5F6A6A ;margin-left:20px;margin-top:50px;font-size:35px;font-weight:600;">Camera Ready Submission Guidelines</p><br>

<p style="text-align:center;color:#1F618D ;margin-left:20px;margin-top:40px;font-size:30px;font-weight:500;">
 Camera-ready Submission Guidelines The paper must meet the submission
 guidelines and include the copyright notice provided below. The paper 
 must be submitted to the PDF eXpress site to produce an IEEE Xplore
 compliant file. The final Camera-Ready file from PDF eXpress 
 must be uploaded at the WebComs paper submission site

</p>
<br><br> 

<center>
  <?php foreach ($files as $file): ?>
    
      <!-- <td><?php// echo $file['conf_id']; ?></td>
      <td><?php 
      //echo $file['name'];
       ?></td>
      <td><?php 
      //echo floor($file['size'] / 1000) . ' KB'; 
      ?>
      </td> -->
      <a id="button" class="button"  href="../../uploads/cameraReadySubmissionGuidelines/<?php echo $file['name']; ?>" target="_blank"><i style="color:white;margin-right:10px;" class="fas fa-link" ></i>View Submission Guidelines</a></td>
    
  <?php endforeach;?>

<!-- </tbody>
</table> -->
</center>
<br><br><br><br>
</section>
    <!-- Footer section -->
	<div class="footer">
            <p>&copy;2020, All rights reserved by www.WebComs.lk</p>
        </div>





  </body>
</html>
