<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template for an interactive web page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="styleweb.css">
 
  
  
  </head>










<body>
<div class="container" style="margin-top:30px">
<!-- Header Section -->
<header class="jumbotron text-center row"
style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;"> 
  <?php include('header.php'); ?>
</header>

<nav>
<div class="menu"   style="text-align:center">
        <a onclick="location.href = 'index.php'">Trang chủ</a>
        <a onclick="location.href = 'Giới-thiệu.php'" >Giới thiệu</a>
        <a onclick="location.href = 'Nghiên-cứu-khoa-học.php'">Nghiên cứu khoa học</a>
        <a onclick="location.href = 'Đào-tạo.php'">Đào tạo</a>
        <a onclick="location.href = 'Bộ-môn-trung-tâm.php'">Bộ môn trung tâm</a>
        <a onclick="location.href = 'Liên-hệ'">Liên hệ</a>
       
    </div>
</nav>
<!-- Body Section -->
  <div class="row" style="padding-left: 0px;">
<!-- Left-side Column Menu Section -->
<nav class="col-sm-2">
      <ul class="nav nav-pills flex-column">
		<?php include('nav.php'); ?> 
      </ul>
  </nav>
<!--  -->

<div class="col-sm-8">






  </div>







<!-- Right-side Column Content Section -->
	<aside class="col-sm-2">
      <?php include('info-col.php'); ?> 
	</aside>
  </div>
<!-- Footer Content Section -->
<footer class="jumbotron text-center row"
style=" background-color:#d5f4e6;   padding-bottom:10px; padding-top:10px;>
  <?php include('footer.php'); ?>
</footer>
</div>
</body>
</html>