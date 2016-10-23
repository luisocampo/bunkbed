<!DOCTYPE html>
<html lang="en">
<head>
  <title>Missing in Actipon Report</title>
  <meta name="description" content="">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php include("header-html.php") ?> 
 
  </head>
<body>

<?php include("header.php") ?>

<div class="container">
  <h1>Missing in Action Report</h1>
  <p>This report is a list of clients that are missing in action. If you have found one, please click the 'Found' button.</p> 
</div>
    

<div class="container">
 
   
    <div class="row">
	   <div class="col-md-12">
	   <a class="btn btn-danger" href="report-form.php">Report a Missing Person</a>
	   </div>
     <br>
        <br>
	 
 
   <div class="row">
	 <div class="col-md-12">
	 
	  <table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>DOB</th>
        <th>Ethnicity</th>
        <th>Details</th>
        <th>Update</th>
        
      </tr>
    </thead>
    <tbody>
 
     
	 <tr>
        <td>Anthony</td>
        <td>Martin</td>
        <td>1/1/2004</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="javascript:clientFound();">Details</a></td>
        <td><a class="btn btn-info" href="javascript:clientFound();">Found</a></td>
      </tr>
	 

	   <tr>
        <td>Leong</td>
        <td>Landis</td>
        <td>1/1/1951</td>
        <td>Asian</td>
        <td><a class="btn btn-primary" href="javascript:clientFound();">Details</a></td>
        <td><a class="btn btn-info" href="javascript:clientFound();">Found</a></td>
      </tr>

      <tr>
        <td>David</td>
        <td>Davis</td>
        <td>1/1/1997</td>
        <td>White</td>
        <td><a class="btn btn-primary" href="report-form.php">Details</a></td>
        <td><a class="btn btn-info" href="report-mia.php">Found</a></td>
      </tr>
        
    </tbody>
  </table>
	 </div>
   </div>
   
   
	 
 </div> 

<?php include("footer.php") ?> 
</body>
</html>