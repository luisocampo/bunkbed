<!DOCTYPE html>
<html lang="en">
<head>
  <title>List Shelters</title>
  <meta name="description" content="">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php include("header-html.php") ?> 
 
  </head>
<body>
<?php include("header.php") ?>
<div class="container">
  <h1>Select a Shelter</h1>
  <p>Please select a shelter to house this individual.</p> 
</div>

<div class="container">
 
   
 <br>
    <br>
   <div class="row">
	 <div class="col-md-12">
	 <h4>Shelter Requirements</h4>

	 <div class="well">
	 
<form class="form-inline">
	  <div class="form-group">
		 <label>Gender:</label>
	 <select class="form-control">
	   <option value="Employer" selected>None</option>
	   <option value="Shelter">Male</option>
	   <option value="Homeless">Female</option>
	 </select>
	 </div>
  <div class="form-group">
		 <label>Ethnicity:</label>
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
		 <label>Veteran:</label>
	 <select class="form-control">
	   <option value="Employer">No</option>
	   <option value="Shelter">Yes</option>
	 </select>
	 </div>
	 </div>
</form>
</div>
	 
	 
	  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Website</th>
        <th>Email</th>
        <th>Phone</th>
        <th># Beds</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

	 
    <tr>
        <td>Haven of Grace</td>
        <td>1225 Warren St</td>
        <td>http://havenofgracestl.org</td>
        <td>contact@havenofgracestl.org</td>
        <td>314.621.6507</td>
        <td>10</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>
      
	   <tr>
        <td>St. Patrick Center</td>
        <td>800 N Tucker Blvd</td>
        <td>http://www.stpatrickcenter.org/</td>
        <td>kpeach@stpatrickcenter.org</td>
        <td>314.802.0700</td>
        <td>27</td>
		<td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

	   <tr>
        <td>New Life Evangelistic Center</td>
        <td>1411 Locust Street</td>
        <td>http://www.newlifeevangelisticcenter.org</td>
        <td>newlifeevangelist@gmail.com</td>
        <td>314.421.3020</td>
		<td>22</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

      <tr>
        <td>Peter & Paul Community Service</td>
        <td>711 Allen Ave</td>
        <td>https://www.ppcsinc.org/</td>
        <td>ppcsinc@ppcsinc.org</td>
        <td>314.588.7111</td>
        <td>19</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

      <tr>
        <td>Gateway 180 Homeless Services</td>
        <td>1000 19th St</td>
        <td>www.gateway180.org</td>
        <td>info@gateway180.org</td>
        <td>314.231.1515</td>
        <td>2</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

      <tr>
        <td>Covenant House</td>
        <td>2727 N Kingshighway Blvd</td>
        <td>www.covenanthousemo.org</td>
        <td>support@covenanthousemo.org</td>
        <td>314.533.2241</td>
        <td>13</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

      <tr>
        <td>Stepping Into the Light Ministry</td>
        <td>1402 Hebert St</td>
        <td>http://www.sitlm.org</td>
        <td>contact@sitlm.org</td>
        <td>314.241.5562</td>
        <td>21</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

      <tr>
        <td>Almost Home</td>
        <td>3200 St Vincent Ave</td>
        <td>www.almosthomestl.org</td>
        <td>help@almosthomestl.org</td>
        <td>314.771.4663</td>
        <td>12</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

      <tr>
        <td>Karen House Catholic Worker</td>
        <td>1840 Hogan St</td>
        <td>http://newsite.karenhousecw.org/</td>
        <td>contact@karenhousecw.org</td>
        <td>314.621.4052</td>
        <td>5</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>

      <tr>
        <td>Call for Help</td>
        <td>4601 State St</td>
        <td>hhttp://callforhelpinc.org/</td>
        <td>info@callforhelpinc.org</td>
        <td>618.397.0968</td>
        <td>17</td>
        <td><a class="btn btn-primary" href="javascript:applicationSuccess();">Select</a></td>
      </tr>
    </tbody>
  </table>
	 </div>
   </div>
   
   
	 <div class="row">
	   <div class="col-md-12 text-right">
	   <ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>
	   </div>
	 </div>
	 
 </div> 

<?php include("footer.php") ?> 
</body>
</html>