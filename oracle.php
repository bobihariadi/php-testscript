<?php


$conn = oci_connect("TPSONLINE", "TPSONLINE", "localhost/XE");

if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   print "Connected to Oracle!";
}

$query = 'select * from TEST_TABLE';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);

// Fetch each row in an associative array
//print '<table border="1">';
while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
  // print '<tr>';
	echo "Sasd";die();
   foreach ($row as $item) {
    //   print '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   //print '</tr>';
}
//print '</table>';

?>