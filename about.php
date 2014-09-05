<!DOCTYPE html>
<html lang="en">
  <head>
<?php
$head = file_get_contents('header.html');
echo $head;	
?>
<meta name="description" content="">
<title>Coaches - Emerald City Weightlifting</title>
</head>

<body>
<div class="container">

<?php
$navbar = file_get_contents('navbar.html');
echo $navbar;	
?>	
<div id="custom">
<h1>Coaches</h1>
<h3>Michael Reams</h3>
<img class="left" alt="Coaches" src=”coaches.jpg”>
<p>Michael Reams is a former raw powerlifter, certified USAW Level 2 coach, National referee, and USAW Level 1 coaching course Lead Instructor. He earned a Sports Medicine and Human Performance Professional Certificate from the University of Washington. Michael is certified in Functional Movement Systems (FMS) and as a CrossFit kettlebell instructor. </p>
<p>Michael is a certified Advanced Rolfer; his rolfing office is in North Seattle.</p>

<h3>Donna Hughes</h3>
<p>Donna Hughes is a Master weightlifter. She is certified as a USAW Level 2 candidate coach and National referee. She holds a Russian Kettlebell Certification (RKC).</p>
<p>Donna is a registered critical care nurse in Seattle.</p>

</div> <!-- /container -->
</div> <!-- /wrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
