<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shelter Details</title>
  <meta name="description" content="">
  
  <?php include("header-html.php") ?>
  </head>
<body>

<?php include("header.php") ?>
<div class="container">

  <h1>Shelter Details</h1>


	</div>
<br />
<div class="container">

  <div class="row">
	<div class="col-md-12">
	<form role="form">
<div class="well">
 
 <div class="form-group">
    <label>Shelter Name</label>
    <input type="text" class="form-control" name="frm_last_name" value="St. Patrick Center">
  </div>	
  
 <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="frm_first_name" value="123 Anywhere Street">
  </div>	

  <div class="form-group">
    <label>Address 2</label>
    <input type="text" class="form-control" name="frm_last_name" value="">
  </div>	

   <div class="form-group">
	  <label>City</label>
	  <input type="text" class="form-control" name="frmUserName" value="St. Louis">
	</div>

	 <div class="form-group">
		<label>State</label>
	<select class="form-control">
	  <option value="Employer">MO</option>
	  <option value="Shelter">IL</option>
	 
	</select>
	</div>
	
   <div class="form-group">
	  <label>Contact Person</label>
	  <input type="text" class="form-control" name="frmUserName" value="Jane Doe">
	</div>
  
    <div class="form-group">
	  <label>Phone</label>
	  <input type="text" class="form-control" name="frmUserName" value="(555) 123-4567">
	</div>
  
    <div class="form-group">
	  <label>Email</label>
	  <input type="text" class="form-control" name="frmUserName" value="jane@google.com">
	</div>
  
  </div>
  <div class="well">
  <h4>Shelter Requirements</h4>	
   <div class="form-group">
		 <label>Gender</label>
	 <select class="form-control">
	   <option value="Employer">None</option>
	   <option value="Shelter">Male</option>
	   <option value="Homeless" selected>Female</option>
	 </select>
	 </div>
  <div class="form-group">
		 <label>Ethnicity</label>
	 <select class="form-control">
	   <option value="Employer">None</option>
  <option value="Employer">American Indian</option>
  <option value="Shelter">Asian</option>
  <option value="Homeless">Black</option>
  <option value="Homeless">Pacific Islander</option>
  <option value="Homeless">White</option>
	 </select>
	 </div>
  <div class="form-group">
		 <label>Veteran</label>
	 <select class="form-control">
	   <option value="Employer">No</option>
	   <option value="Shelter">Yes</option>
	 </select>
	 </div>
	 </div>
<hr>

<div class="well">

 <div class="form-group">
    <label >Available Beds</label>
    <div class="input-group">
      <p style="font-size:40px;font-weight:bold;color:green;" >21</p>
	  </div>
  </div>
</div>  
  
  
  
	

<a class="btn btn-primary" href="list-shelters.php">Save</a>
<a class="btn btn-danger" href="list-shelters.php">Cancel</a>

  </form>
  </div>
  
 </div>
 <?php include("footer.php") ?>
 <br />
 <br />

</body>
</html>