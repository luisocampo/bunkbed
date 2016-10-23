<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Shelter Sign Up</title>
  <meta name="description" content="">
  <?php include("header-html.php") ?>
  </head>
<body>

<div class="container">
  <h1>New Shelter Sign Up</h1>
  <p>Please enter the information below.</p> 
</div>

<div class="container">
	<form role="form">
 <div class="well">
 
 <div class="form-group">
    <label>Shelter Name</label>
    <input type="text" class="form-control" name="frm_last_name" value="">
  </div>	
 <div class="form-group">
    <label>Street Name</label>
    <input type="text" class="form-control" name="frm_first_name" value="">
  </div>	

  <div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" name="frm_last_name" value="">
  </div>	

   <div class="form-group">
	  <label>State</label>
	  <input type="text" class="form-control" name="frmUserName" value="">
	</div>

 <div class="form-group">
    <label>Zipcode</label>
    <input type="text" class="form-control" name="frmUserName" value="">
  </div>
  
   <div class="form-group">
	  <label>Beds Available</label>
	  <input type="text" class="form-control" name="frmUserName" value="">
	</div>
  
  
   <div class="form-group">
    <label>Gender</label>
<select class="form-control">
  <option value="Shelter">Select One</option>
  <option value="Employer" >Male</option>
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
  <option value="Homeless" >Black</option>
  <option value="Homeless">Pacific Islander</option>
  <option value="Homeless">White</option>
</select>
</div>

   <div class="form-group">
    <label>Are you a veteran?</label>
<select class="form-control">
  <option value="Shelter">No</option>
  <option value="Employer" >Yes</option>
</select>
</div>


    <div class="form-group">
    <label>Why do you need help?</label>
<select class="form-control">
  <option value="Employer">Select One</option>
  <option value="Employer">Loss of Job</option>
  <option value="Shelter">Sexual Abuse</option>
  <option value="Homeless">Physical Abuse</option>
  <option value="Homeless" >Addiction</option>
  <option value="Homeless">Medical Debt</option>
  <option value="Homeless">Mental Illness</option>
  <option value="Homeless">Unpaid Utility Bills</option>
  <option value="Homeless">Other - Explain Below</option>
</select>
</div>

<div class="form-group">
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
</div>
<hr>

<div class="well">

<h3>Create Login Info</h3>
 <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="frmUserName" placeholder="Username">
  </div>
  <div class="form-group">
	 <label>Password</label>
	 <input type="text" class="form-control" name="frmUserName" placeholder="Password">
   </div>
  <div class="form-group">
	 <label>Retype Password</label>
	 <input type="text" class="form-control" name="frmUserName" placeholder="Password">
   </div>
   
</div>

<a class="btn btn-primary" href="shelter-login.php"">Submit</a>
<a class="btn btn-danger" href="shelter-login.php">Cancel</a>
                                                  
  </form>
 </div>
 <br />
 <br />
 <br />
</body>
</html>