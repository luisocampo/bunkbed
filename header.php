<!-- add padding-->
<style>
body{
	padding-top:50px;
}
</style>

<!-- making the navbar -->

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
      
<!-- bootstrap stuff to optimize mobile access -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="list-clients.php">BunkBed</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="list-clients.php">Clients</a></li>
        <li><a href="list-shelters.php">Shelters</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Reports<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="report-mia.php">Missing in Action Report</a></li>
          </ul>
        </li>
      </ul>
      
         <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Logout</a></li>
      
      </ul>
    </div>
  </div>
</nav>
