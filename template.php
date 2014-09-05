<!DOCTYPE html>
<html lang="en">
  <head>
<?php
$head = file_get_contents('header.html');
echo $head;	
?>
<meta name="description" content="">
<title>Title - Emerald City Weightlifting</title>
</head>

<body>
<div class="container">

<?php
$navbar = file_get_contents('navbar.html');
echo $navbar;	
?>	
<div id="custom">
<h1>Title</h1>
<p>Paragraph</p>

</div> <!-- /container -->
</div> <!-- /wrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
