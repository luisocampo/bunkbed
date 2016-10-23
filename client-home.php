<!DOCTYPE html>
<html lang="en">
<head>
  <title>BunkBed Client Home</title>
  <meta name="description" content="">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php include("header-html.php") ?> 
 
  </head>
<body>
<?php include("header-client.php") ?>
<div class="container">
  <h1>Available Shelters</h1>
  <p>This is a list of shelters that are available based on your profile.</p> 
</div>

<div class="container">
<!-- -->
  <div class="row">
	<div class="col-md-4">
	<h3>Gateway 180</h3>
	<p>1000 19th St.<br>St. Louis, MO</p>
	<p>Phone: (314) 231-1515<br>Email: info@gateway180.org</p>
	<p><a class="btn btn-primary" href="javascript:applyForHousing();">Request a Bed</a></p>
	</div>
	<div class="col-md-4">
	<h3>St. Patrick Center</h3>
	<p>800 N Tucker Blvd.<br>St. Louis, MO</p>
	<p>Phone: (314) 802-0700<br>Email: kpeach@stpatrickcenter.org</p>
	<p><a class="btn btn-primary" href="javascript:applyForHousing();">Request a Bed</a></p>

	</div>
	<div class="col-md-4">
	<h3>The Haven of Grace</h3>
	<p>1225 Warren St.<br>St. Louis, MO</p>
	<p>Phone: (314) 621-6507<br>Email: contact@havenofgracestl.org </p>
	<p><a class="btn btn-primary" href="javascript:applyForHousing();">Request a Bed</a></p>

	</div>
  </div>
  <!-- End -->
 </div>

<?php include("footer.php") ?> 
</body>
</html>