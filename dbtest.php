<?php
  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("MYSQL_USER");
  $dbpwd  = getenv("MYSQL_PASSWORD");
  $dbname = getenv("MYSQL_DATABASE");
  
  $dbconn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
  if (!dbconn) {
    echo "Error Connetion Database !<br/>\n";
    echo "Environment:<br/>\n";
    echo "- Host: ".$dbhost."<br/>\n";
    echo "- Port: ".$dbport."<br/>\n";
    echo "- User: ".$dbuser."<br/>\n";
    echo "- Pass: ".$dbpass."<br/>\n";
    echo "- Name: ".$dbname."<br/>\n";
  }
?>