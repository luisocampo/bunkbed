<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Client Sign Up</title>
  <meta name="description" content="">
  <?php include("header-html.php") ?>
  </head>
<body>

<div class="container">
  <h1>New Client Sign Up</h1>
  <p>Please enter the information below. If you do not know, please fill in "N/A."</p> 
</div>

<div class="container">
	<form role="form">
 <div class="well">
 
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
  <option>Select One</option>
  <option selected>Male</option>
  <option>Female</option>
  <option>Transgender</option>
  <option>Prefer not to answer</option>
</select>
</div>

   <div class="form-group">
    <label>Ethnicity</label>
<select class="form-control">
  <option>Select One</option>
  <option>American Indian</option>
  <option>Asian</option>
  <option selected>Black</option>
  <option>Pacific Islander</option>
  <option>White</option>
</select>
</div>

   <div class="form-group">
    <label>Are you a veteran?</label>
<select class="form-control">
  <option>No</option>
  <option selected>Yes</option>
</select>
</div>

     <!-- help checkboxes -->
     
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

        <!-- login info-->
<div class="well">

<h3>Create Login Info</h3>
 <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="frmUserName" placeholder="shaunsmith">
  </div>
  <div class="form-group">
	 <label>Password</label>
	 <input type="text" class="form-control" name="frmUserName" placeholder="password1">
   </div>
  <div class="form-group">
	 <label>Retype Password</label>
	 <input type="text" class="form-control" name="frmUserName" placeholder="password1">
   </div>
   
</div>

<a class="btn btn-primary" href="javascript:clientSuccess();">Submit</a>
<a class="btn btn-primary" href="client-login.php">Return to Log-in</a>
<a class="btn btn-danger" href="client-login.php">Cancel</a>
  </form>
 </div>
 <br />
 <br />
 <br />
</body>
</html>