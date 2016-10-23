<!DOCTYPE html>
<html lang="en">
<head>
  <title>Potential Client Details</title>
  <meta name="description" content="">
  
  <?php include("header-html.php") ?>
  </head>
<body>

<?php include("header.php") ?>
<div class="container">

  <h1>Potential Client Details</h1>


	</div>
<br />
<div class="container">

  <div class="row">
	<div class="col-md-12">
	<form role="form">
 <div class="well">
 
 <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="frm_last_name" value="Doe">
  </div>	
 <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="frm_first_name" value="John">
  </div>	

  <div class="form-group">
    <label>Date of Birth</label>
    <input type="text" class="form-control" name="frm_last_name" value="10/21/1973">
  </div>	

   <div class="form-group">
	  <label>Phone Number</label>
	  <input type="text" class="form-control" name="frmUserName" value="(555) 123-4567">
	</div>

 <div class="form-group">
    <label>Email address</label>
    <input type="text" class="form-control" name="frmUserName" value="john.doe@gmail.com">
  </div>
  
   <div class="form-group">
	  <label>Current City/State</label>
	  <input type="text" class="form-control" name="frmUserName" value="St. Louis, MO">
	</div>
  
  
   <div class="form-group">
    <label>Gender</label>
<select class="form-control">
  <option value="Shelter">Select One</option>
  <option value="Employer" selected>Male</option>
  <option value="Employer">Female</option>
  <option value="Employer">Transgender</option>
</select>
</div>

   <div class="form-group">
    <label>Ethnicity</label>
<select class="form-control">
  <option value="Employer">Select One</option>
  <option value="Employer">American Indian</option>
  <option value="Shelter">Asian</option>
  <option value="Homeless" selected>Black</option>
  <option value="Homeless">Pacific Islander</option>
  <option value="Homeless">White</option>
</select>
</div>

   <div class="form-group">
    <label>Are you a veteran?</label>
<select class="form-control">
  <option value="Shelter">No</option>
  <option value="Employer" selected>Yes</option>
</select>
</div>


    <div class="form-group">
    <label>Why do you need help?</label>
<select class="form-control">
  <option value="Employer">Loss of Job</option>
  <option value="Shelter">Sexual Abuse</option>
  <option value="Homeless">Physical Abuse</option>
  <option value="Homeless" selected>Addiction</option>
  <option value="Homeless">Medical Debt</option>
  <option value="Homeless">Mental Illness</option>
  <option value="Homeless">Unpaid Utility Bills</option>
  <option value="Homeless">Other - Explain Below</option>
</select>
</div>

<div class="form-group">
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
<hr>


 <div class="form-group">
    <label>Decision</label>
<select class="form-control">
  <option value="Employer">Select One</option>
  <option value="Employer">Emergency Shelter</option>
  <option value="Shelter">Rapid Rehousing</option>
  <option value="Homeless">Send Monetary Help</option>
</select>
</div>


 <div class="form-group">
    <label >Assigned Emergency Shelter / Rapid Rehousing</label>
    <div class="input-group">
      
      <input type="text" class="form-control" value="St. Patrick Center">
<a class="btn btn-warning" href="select-shelter.php" style="margin-top:10px;" >Lookup Shelter</a>
	  </div>
  </div>
  
  
	
	
<div class="form-group">
  <label for="comment">Notes</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
</div>
<a class="btn btn-primary" href="list-potential-client.php">Save</a>
<a class="btn btn-danger" href="list-potential-client.php">Cancel</a>
  </form>
  </div>
  
 </div>
 <?php include("footer.php") ?>
 <br />
 <br />

</body>
</html>