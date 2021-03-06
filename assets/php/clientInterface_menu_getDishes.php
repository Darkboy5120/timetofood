<?php
require_once('../php/global_cookieInterface.php');
require_once('../php/global_mysqlInterface.php');
require_once('../php/users/root.php');

if ($ci0->getCookie('client_id')
		&& $ci0->getCookie('restaurant_id')
		&& $ci0->getCookie('table_id')
	) {

	$restaurant_id = $ci0->getCookie('restaurant_id');
	
	$mi0->query('
		SELECT
			id, name, description, price, available, url, date
		FROM
			Dishes
		WHERE
			provider_id = ?',
		$restaurant_id
		);
	if ($mi0->result->num_rows > 0) {
		echo json_encode($mi0->result->fetch_all(MYSQLI_ASSOC));
	} else {
		echo 0;//generic error
	}
	$mi0->close();
}