<?php
    session_start();
    if($_SESSION['login_s'] != '2'){
        header('location:../../login.php');
    }
?>
<!-- Accessing the FilesLogic.php -->
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/nav_footer_styles.css">

  <title>Uploaded reseach papers</title>

<!-- Added css to style tag to style table -->
  <style>
#papersDownloads {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#papersDownloads td, #papersDownloads th {
  border: 1px solid #ddd;
  padding: 8px;
}

#papersDownloads tr:nth-child(even){background-color: #f2f2f2;}

#papersDownloads tr:hover {background-color: #ddd;}

#papersDownloads th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: dodgerblue;
  color: white;
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
        <li><a class="active" href="paperlist.php">Uploaded Papers</a></li>
        <li><a href="../../About.php">About</a></li>
        <li><a href="../../help.php">Help</a></li>
        <li><a href="reviewerhomepagenew.php">Back</a></li>

      </ul>
</nav>
<br>
<h1 style="color:#283747 ;margin-left:20px;">Uploaded All Research Papers</h1>


<table id="papersDownloads">
<thead>
    <!-- file id -->
    <th>ID </th> 
    <th>Author's name</th>
    <th>File name</th>
    <th>Conference name</th>
    <th>University(Author)</th>
    <th>File size (in KB)</th>
    <th>Contact details</th>
    <th>Other links</th>
    <th>Downloads</th>
    <th>Action</th>

</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['full_name'];?></td>
      <td><?php echo $file['name']; ?></td>
  
  
      <!-- show conference name here in below php tag -->
      <td><?php ?></td>


      <td><?php echo $file['university'];?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['contact_details'];?></td>
      <td><?php echo $file['other_links'];?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><i class="fas fa-file-download" style="color:#1A5276;"></i><a style="text-decoration:none;color:dodgerblue;" href="paperslist.php?file_id=<?php echo $file['id'] ?>"> Download </a></td>
      

    
    
    </tr>
  <?php endforeach;?>

</tbody>
</table>
<!-- Footer section -->
<div class="footer">
            <p>&copy;2020, All rights reserved by www.WebComs.lk</p>
         </div>
</body>
</html>
