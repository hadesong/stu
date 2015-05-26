<?php

@mysql_connect("127.0.0.1","root","") or die ("Mysql connect fill");
@mysql_select_db("test");
mysql_query("set names 'utf8'");
date_default_timezone_set('PRC');


?>