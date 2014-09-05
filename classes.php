<!DOCTYPE html>
<html lang="en">
  <head>
<?php
$head = file_get_contents('header.html');
echo $head;	
?>
<meta name="description" content="">
<title>Classes - Emerald City Weightlifting</title>
</head>

<body>
<div class="container">

<?php
$navbar = file_get_contents('navbar.html');
echo $navbar;	
?>	
<div id="custom">
<h1>Classes</h1>
<h3>Open Gym</h3>
<p>Regular open group session. In the interest of safety, we recommend clients wishing to attend these class times demonstrate a working knowledge of the Olympic lifts or attend an introduction session before attending the open group sessions.</p>
<blockquote><strong>Tuesday / Wednesday / Friday 5p - 8p<br />Sunday 12p - 4p</strong></blockquote>

<h3>Introduction to Olympic Weightlifting</h3>
<p>We are currently creating a curriculum that will allow us to offer a safe, fun introduction to the sport of Olympic-weightlifting.  If you are interested in signing up for this course, please <a href="mailto:emeraldcityweightlifting@gmail.com">Contact Us</a>.  We will soon be offering this course on a regular basis.</p>

<h3>Private Sessions</h3>
<p>Private sessions are available via appointment only. Please <a href="mailto:emeraldcityweightlifting@gmail.com">Contact Us</a> and we can work with you to set up an appointment.</p>

</div> <!-- /container -->
</div> <!-- /wrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
