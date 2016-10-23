<!DOCTYPE html>
<html lang="en">
<head>
  <title>Client Profile</title>
  <meta name="description" content="">
  
  <?php include("header-html.php") ?>
  </head>
<body>

<?php include("header-client.php") ?>
<div class="container">

  <h1>Client Profile</h1>


	</div>
<br />
<div class="container">

  <div class="row">
	<div class="col-md-12">
	<form role="form">
 
 <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="frm_last_name" value="Smith">
  </div>	
 <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="frm_first_name" value="Shaun">
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
    <input type="text" class="form-control" name="frmUserName" value="shaun.smith@gmail.com">
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
     
    <div class="checkbox">
    <label><input type="checkbox" value="">Loss of Job</label>
     </div>
     
     <div class="checkbox">
    <label><input type="checkbox" value="">Sexual Abuse</label>
     </div>
     
     <div class="checkbox">
    <label><input type="checkbox" value="">Physical Abuse</label>
     </div>
     
     <div class="checkbox">
    <label><input type="checkbox" value="" checked>Drug/Alcohol Addiction</label>
     </div>
     
     <div class="checkbox">
    <label><input type="checkbox" value="">Medical Debt</label>
     </div>
     
     <div class="checkbox">
    <label><input type="checkbox" value="" checked>Mental Illness</label>
     </div>
     
     <div class="checkbox">
    <label><input type="checkbox" value="">Unpaid Utility Bills</label>
</div>
     
     <div class="checkbox">
    <label><input type="checkbox" value="">Other (explain below)</label>
</div>
     
<div class="form-group">
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
</div>

<hr>


  <hr>
  <h3>Change Password</h3>
  
  <div class="form-group">
	 <label>New Password</label>
	 <input type="text" class="form-control" name="frmUserName" >
   </div>
  
  <div class="form-group">
	 <label>Retype New Password</label>
	 <input type="text" class="form-control" name="frmUserName" >
   </div>
  
<a class="btn btn-primary" href="client-home.php">Save</a>
<a class="btn btn-danger" href="client-home.php">Cancel</a>

  </form>
  </div>
  
 </div>
 <?php include("footer.php") ?>
 <br />
 <br />

</body>
</html>