<?php
$db = mysqli_connect("localhost", "root", "“, “lab");
if (!$db) {
print "Error - Could not connect to MySQL";
exit;
}
else{
echo  "ddd";
}
?>