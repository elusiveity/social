<?php

function login($u, $p)
{
	global $con;

	$hp = md5($p);
	$query = "SELECT username FROM users WHERE password = :pass";
	$sql = $con->prepare($query);
	$sql->bindValue(":pass", $hp);
	try
	{
		$sql->execute();
		if ($sql->rowCount() > 0)
		{
			return $u;
		} else {
			return 0;
		}
	} catch (PDOException $e) {
		return 0;
	}
}

?>
