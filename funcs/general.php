<?php
session_start();

function login($u, $p)
{
	global $con;

	$hp = md5($p);
	$query = "SELECT username FROM users WHERE userpass = :pass";
	$sql = $con->prepare($query);
	$sql->bindValue(":pass", $hp);
	try
	{
		$sql->execute();
		if ($sql->rowCount() > 0)
		{
			$_SESSION['name'] = $u;
			return $u;
		} else {
			return 0;
		}
	} catch (PDOException $e) {
		return 0;
	}
}


function logout()
{
	if (isset($_SESSION['name']))
	{
		session_destroy();
		header('location: /');
		return 1;
	} else {
		return 0;
	}
}

?>
