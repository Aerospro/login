<?php
  define('DB_SERVER','eoicornella.cat');
  define('DB_NAME','profesores');
  define('DB_USER','myeoicorne');
  define('DB_PASS','eoicn750');
  $con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
  mysql_select_db(DB_NAME,$con);
?>
