<?php

echo "<pre>";
echo $_SERVER ['DOCUMENT_ROOT'];
echo '<br>';
echo '<br>';
echo $_SERVER ['SERVER_NAME'];
echo '<br>';
echo '<br>';
echo dirname(__FILE__);
echo '<br>';
echo '<br>';
echo openssl_get_cert_locations()["default_cert_file"];
echo "</pre>";


//
//"C:/xampp/htdocs"
//"localhost"
//"C:\WINDOWS"
//"C:/xampp/apache/bin/openssl.cnf"





?>