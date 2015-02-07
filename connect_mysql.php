<?php
	// connect to database
	$con = mysql_connect("localhost", "root", "123456");
	if (!$con) {
		die("Could not connect: ".mysql_error());
	} else {
		print("connected!<br/>");
	}

	// create my database
	/*if (mysql_query("create database my_db", $con)) {
		echo "Database created<br/>";
	} else {
		echo "Error creating database: ".mysql_error();
	}*/

	// select database
	mysql_select_db("my_db", $con);

	// create table 
	$sql = "create table if not exists person
	(
		personID int not null auto_increment,
		primary key(personID),
		firstname varchar(20) not null,
		lastname varchar(20) not null,
		age int not null
	)";
	if (mysql_query($sql, $con)) {
		echo "Table created.<br/>";
	} else {
		die("Table created faithfully!<br/>");
	}

	// delete table
	/*$sql = "drop table if exists person";
	if (mysql_query($sql, $con)) {
		echo "Drop table successed!";
	} else {
		echo "Drop table faithfully!";
	}*/

	$sql_1 = "insert into person (firstname, lastname, age)
	 values ('Peter', 'Griffin', '35')";
	$sql_2 = "insert into person (firstname, lastname, age)
	 values ('Glenn', 'Quagmire', '33')";
	$sql_3 = "insert into person (firstname, lastname, age)
	 values ('士梁', '郑', '23')";
	// mysql_query($sql_1, $con);
	// mysql_query($sql_2, $con);
	// mysql_query($sql_3);
	$sql_3 = "select * from person";
	$row = mysql_query($sql_3, $con);

	/*while ($value = mysql_fetch_array($row)) {
		echo $value[0].'  '.$value[1].'  '.$value[2].'<br/>';
	}*/

	/*while ($value = mysql_fetch_array($row, MYSQL_ASSOC)) {
		echo $value[0].'  '.$value[1].'  '.$value[2].'<br/>';
		echo $value['personID'].'  '.$value['firstname'].'  '.$value['lastname'].'<br/>';
	}*/

	/*while ($value = mysql_fetch_assoc($row)) {
		echo $value['personID'].'  '.$value['firstname'].'  '.$value['lastname'].'<br/>';
	}*/

	while ($value = mysql_fetch_object($row)) {
		echo $value->personID.'  '.$value->firstname.'  '.$value->lastname.'<br/>';
	}

	// close database
	mysql_close($con);
?>