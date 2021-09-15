<?php

function delete_users()
{

	global $connection;

	if (isset($_GET['delete'])) {
		$the_users_id = $_GET['delete'];

		$query = "DELETE FROM users WHERE user_id = {$the_users_id} ";
		$delete_query = mysqli_query($connection, $query);

		header("Location: users.php");
	}
}
function confirmQuery($result)
{
	global $connection;

	if (!$result) {
		die("Query Failed " . mysqli_error($connection));
	}
}
