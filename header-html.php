  <!-- Bootstrap -->

  <!-- Latest CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Latest JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- Font Toolkit (incase symbols are needed) --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <!-- Create css sheet / scrapped --> 
  <link rel="stylesheet" href="style.css">
 
 
<!-- Create client side script without making .js files -->
<!-- The different functions are below: -->

 <script>
    
function goBack() 
     {
         window.history.back();
     }
     
function applyForHousing() 
     {
         alert("Thank you, your request has been submitted. We will contact you within 1 day via your provided e-mail or phone number to schedule your appointment.");
     }
     
function applicationSuccess()
     {
         alert("Congratulations, the client has been successfully referred.");
     }

function clientSuccess()
     {
         alert("Account succesfully created. Please click the 'Return'' button to log-in.")
     }

function clientAccept()
     {
         alert("Client accepted.")
     }
     
function clientDeny()
     {
         alert("Client denied.")
     }
     
function clientFound()
     {
         alert("Your report has been submitted!")
     }
     
</script>
