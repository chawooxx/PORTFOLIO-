<?php
$con = new mysqli("localhost", "root", "", "my-portfolio");
if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: "  . $mysqli -> connect_error;
    exit ();
}

$url="http://localhost/my-portfolio";

?>
