<!DOCTYPE html>
<html lang="en">
  <head>
<?php
$head = file_get_contents('header.html');
echo $head;	
?>
<meta name="description" content="">
<title>Home - Emerald City Weightlifting</title>
</head>

<body>
<div class="container">

<?php
$navbar = file_get_contents('navbar.html');
echo $navbar;	
?>	
<div id="custom">
<div class="jumbotron">
<h1>Emerald City Weightlifting</h1>
        <p>Weightlifting, also known as Olympic weightlifting, tests athletes in two barbell lifts: the Snatch, and the Clean &amp; Jerk.</p>
        <p>We love lifting and having fun! Emerald City Weightlifting is a place to learn, hone and perfect your form, no matter what your level. 
        </p>

</div>
</div> <!-- /container -->
</div> <!-- /wrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
