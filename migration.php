<?php
//sqlite
    $myPDO = new PDO('sqlite:C:\path\to\sqlitefile.db');
    $sqliteResult = $myPDO->query("SELECT * FROM users");
//mysql
	$mysqlConnection = mysqli_connect('localhost','root','12345','db_name');
	if(mysqli_connect_errno())
	{
		echo 'Error: '.mysqli_connect_error() ;
	}


	 
	 foreach($sqliteResult as $row)
    {
		$id = $row['id'];
		$p1 = $row['user'];
		$p2 = $row['pass'];
		$p3 = $row['category'];

    $query = "insert into `users` (id,user,pass,category) values('$id','$p1','$p2','$p3')";
		mysqli_query($mysqlConnection,$query);
    }

mysqli_close($mysqlConnection);

?>
