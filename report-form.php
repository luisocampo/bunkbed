<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Client Sign Up</title>
  <meta name="description" content="">
  <?php include("header-html.php") ?>
  </head>
<body>

<div class="container">
  <h1>Report Missing Person</h1>
  <p>Please enter the information below. If you do not know, please fill in "N/A."</p> 
</div>

<div class="container">
	<form role="form">
 <div class="well">
 
 <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="frm_last_name" value="Davis">
  </div>	
 <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="frm_first_name" value="David">
  </div>	

  <div class="form-group">
    <label>Date of Birth</label>
    <input type="text" class="form-control" name="frm_last_name" value="1/1/1997">
  </div>	

  
   <div class="form-group">
	  <label>Last Seen Location:</label>
	  <input type="text" class="form-control" name="frmUserName" value="Outside Chaefitz Arena">
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


<label>Necessary info about missing person:</label>
     
<div class="form-group">
  <textarea class="form-control" rows="5" id="comment">David was wearing a black coat and white shorts. He may have gone downtown to Union Station or is located on the street near Powell Hall.</textarea>
</div>
</div>
<hr>



<a class="btn btn-primary" href="report-success">Submit</a>
<a class="btn btn-danger" href="report-mia.php">Cancel</a>
  </form>
 </div>
 <br />
 <br />
 <br />
</body>
</html>