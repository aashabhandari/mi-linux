<?php
$mysqli = new mysqli("mi-linux.wlv.ac.uk","2458724","University2043","2458724");
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
exit();
}
?>