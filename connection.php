<?php
  define('DBHOST', 'localhost');
  define('DBUSER', 'root');
  define('DBPASS', '');
  define('DBNAME', 'snoking');

  $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
  

  if($conn->connect_error) {
      echo('Errpr: cannot connect to DB');
    die('1'); //1 = connection to DB failed
  }

  //Connection successful
  echo('Successfully connected to the DB <br />');
?>