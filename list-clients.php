<!DOCTYPE html>
<html lang="en">
<head>
  <title>Potential Clients Inbox</title>
  <meta name="description" content="">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php include("header-html.php") ?> 
 
  </head>
<body>

<?php include("header.php") ?>

<div class="container">
  <h1>Client List</h1>
  <p>This is a list of clients already registered.</p> 
</div>

<div class="container">
 
   
   
	 <div class="row">
	   <div class="col-md-12">
	   <a class="btn btn-danger" href="client-new.php">Add New Client</a> <a class="btn btn-warning" href="client-requests.php">View Requests</a>
           <br>
           <br>
	   </div>
	 </div>
	 
 
   <div class="row">
	 <div class="col-md-12">
	 
	  <table class="table table-striped">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>SSN</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Veteran</th>
        <th>Ethnicity</th>
        <th>Action</th>
        <th>Refer</th>
      </tr>
    </thead>

     
	 <tr>
        <td>Robert</td>
        <td>Hanks</td>
        <td>*****0077</td>
        <td>1/1/1953</td>
        <td>M</td>
        <td>Y</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
         <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
	 <tr>
        <td>George</td>
        <td>Wickstrom</td>
        <td>*****0739</td>
        <td>1/1/1971</td>
        <td>M</td>
        <td>N</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
         
      </tr>
 <tr>
        <td>Douglas</td>
        <td>Andersen</td>
        <td>*****1161</td>
        <td>1/1/1952</td>
        <td>M</td>
        <td>Y</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Raz</td>
        <td>Antonson</td>
        <td>NULL</td>
        <td>NULL</td>
        <td>M</td>
        <td>Y</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Patricia</td>
        <td>Benson</td>
        <td>*****5126</td>
        <td>1/1/1980</td>
        <td>F</td>
        <td>Y</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Clifford</td>
        <td>Milligan</td>
        <td>*****8250</td>
        <td>1/1/1961</td>
        <td>M</td>
        <td>Y</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Karen</td>
        <td>Benes</td>
        <td>*****1863</td>
        <td>1/1/1960</td>
        <td>F</td>
        <td>Y</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Andy</td>
        <td>Flindt</td>
        <td>*****2242</td>
        <td>NULL</td>
        <td>M</td>
        <td>N</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Melvin</td>
        <td>Garthwaite</td>
        <td>*****5511</td>
        <td>1/1/1962</td>
        <td>M</td>
        <td>N</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Michael</td>
        <td>Philipp</td>
        <td>*****6089</td>
        <td>1/1/1959</td>
        <td>M</td>
        <td>N</td>
        <td>Black</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
      </tr>
 <tr>
        <td>Timothy</td>
        <td>Vaughn</td>
        <td>*****6452</td>
        <td>1/1/1949</td>
        <td>M</td>
        <td>N</td>
        <td>White</td>
        <td><a class="btn btn-primary" href="details-client.php">Details</a></td>
 <td><a class="btn btn-success" href="refer-client.php">Refer</a></td>
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