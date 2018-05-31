{include file="header.tpl"}

<form action='login.php' method='post' class='w-50 mt-2 mx-auto'>
	<div class='input-group mb-3'>
		<div class='input-group-prepend'>
			<span class='input-group-text'>Username</span>
		</div>
		<input type='text' id='username' name='username' class='form-control' />
	</div>
	<div class='input-group mb-3'>
		<div class='input-group-prepend'>
			<span class='input-group-text'>Password</span>
		</div>
		<input type='password' id='password' name='password' class='form-control' />
	</div>
	<div class='btn-group mb-3'>
		<button type='submit' class='btn btn-primary'>Login</button>
	</div>
</form>
{include file="footer.tpl"}
