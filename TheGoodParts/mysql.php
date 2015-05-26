<?php
	mysql_query("set names 'utf8'");
	@mysql_connect("127.0.0.1","root","") or die("MySQL connnect fill!");
	@mysql_select_db(ttt) or die("select db fill");

	$sql="select * from class";
	$query=mysql_query($sql);
    // while($rs=mysql_fetch_row($query))
    // {
    // 	print_r($rs);
    // 	echo "<br>";
    // 	echo "<br>";
    // }
    echo $query;
    echo "<br>";
    	print_r(mysql_fetch_array($query));
    	echo "<br>";
    	echo "<br>";
    while($rs=mysql_fetch_assoc($query))
    {
    	print_r($rs);
    	echo "<br>";
    	echo "<br>";
    }
    while($rs=mysql_fetch_object($query))
    {
    	echo "<br>";
    	echo "<br>";
    }
    echo "ddddd";

?> 
