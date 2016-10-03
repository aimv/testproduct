<?php

/**
 * Shows the orders history of the chosen customer
 */
require_once 'conf/config.php'; //for Smarty templates
require_once 'db_connect.php'; //creates connection with DB

$customer_id = (int)$_GET['id'];
if (!$customer_id) die("No id");

$query = "SELECT o.price, o.date_create, o.count, "
		. "p.name, p.price as new_price, "
		. "o.price*o.count as cost "
		. "FROM orders as o "
		. "LEFT JOIN products as p ON o.product_id=p.id "
		. "WHERE o.customer_id=$customer_id;";

$res = mysql_query($query) or die(mysql_error());

$total_sum = 0;
$rows = array();
while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
	$arr['name'] = $row['name'];
	$arr['price'] = $row['price'];
	$arr['count'] = $row['count'];
	$arr['cost'] = $row['cost'];
	$total_sum += $row['cost'];
	$rows[] = $arr;
}

mysql_close($conn);

$smarty->assign('total_sum', $total_sum);
$smarty->assign('user_id', $customer_id);
$smarty->assign('rows', $rows);

$smarty->display('index.tpl.htm');





