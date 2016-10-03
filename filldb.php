<?php

/**
 * Fills the database with random fake data for tests
 */

require_once 'db_connect.php';
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create("ru_RU"); //create a Russian faker

$cust_total = 1000; //количество покупателей
$prod_total = 2000; //количество продуктов 
$orders_total = 2500; //количество заказов

$customers_query = "INSERT INTO `customers` (`name`, `lastname`, `email`) VALUES ";
$products_query = "INSERT INTO `products` (`name`, `price`) VALUES ";
$orders_query = "INSERT INTO `orders` (`customer_id`, `product_id`, `count`, `price`) VALUES ";

for ($i=0; $i < $cust_total; $i++) {
	$customers_query .= "(\"$faker->firstName\", \"$faker->lastName\", \"$faker->email\"),";
}
$customers_query = substr($customers_query, 0, strlen($customers_query)-1) . ";";

for ($i=0; $i < $prod_total; $i++) {
	$products_query .= "(\"".htmlspecialchars($faker->realText(30))."\", ".$faker->numberBetween(50,5000)."),";
}
$products_query = substr($products_query, 0, strlen($products_query)-1) . ";";

for ($i=0; $i < $orders_total; $i++) {
	$orders_query .= "(".$faker->numberBetween(0, 999).", ".$faker->numberBetween(0,1999).", "
			. $faker->numberBetween(1, 15).", ".$faker->numberBetween(50,5000)."),";
}
$orders_query = substr($orders_query, 0, strlen($orders_query)-1) . ";";

//print_r($products_query); echo "<br>";
$res1 = mysql_query($customers_query) or die(mysql_error());
$res2 = mysql_query($products_query) or die(mysql_error());
$res3 = mysql_query($orders_query) or die(mysql_error());

mysql_close($conn);
echo "Complete";




