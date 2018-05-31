<HTML>
<HEAD>
<TITLE>{$title} - {$Name}</TITLE>
<link href='css/bootstrap.min.css' type='text/css' rel='stylesheet' />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link href='css/style.css' type='text/css' rel='stylesheet' />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src='js/custom.js'></script>
</HEAD>
<BODY bgcolor="#ffffff" onload='init();'>
<nav class="navbar fixed-top navbar-light bg-light">
	<div class='container'>
	<a class="navbar-brand" href="/">{$title}</a>
	{if isset($smarty.session.name)}
	<div class='navbar-right'>
<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
		<!-- a href='logout.php' class='btn btn-danger'><i class="fas fa-sign-out-alt"></i></a -->
	</div>
	{/if}
	</div>
</nav>
<div style='height: 70px'></div>
<div class='container' onload='setup()'>
