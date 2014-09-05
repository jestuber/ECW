<!DOCTYPE html>
<html lang="en">
  <head>
<?php
$head = file_get_contents('header.html');
echo $head;	
?>
<meta name="description" content="">
<title>Contact - Emerald City Weightlifting</title>
</head>

<body>
<div class="container">

<?php
$navbar = file_get_contents('navbar.html');
echo $navbar;	
?>	
<div id="custom">
<h1>Contact</h1>
<p>We’re located in the Maple Leaf neighborhood of Seattle.</p>
<h1><a href=”mailto:emeraldcityweightlifting@gmail.com”>Email Us</a></h1>
<p><a href="https://www.facebook.com/pages/Emerald-City-Weightlifting/336490713077800">Visit Us on Facebook</a></p>
</div> <!-- /container -->
</div> <!-- /wrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
