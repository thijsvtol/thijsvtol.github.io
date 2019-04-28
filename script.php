<?php
//phpinfo();
/*
** Connect to database:
*/
 
// Connect to the database (host, username, password)
$con = mssql_connect('den1.mssql7.gear.host','klimaatadaptie1','Wx8xQ?LWv0!0') 
    or die('Could not connect to the server!');
 
// Select a database:
mssql_select_db('klimaatadaptie1') 
    or die('Could not select a database.');
 
// Example query: (TOP 10 equal LIMIT 0,10 in MSSQL)
$SQL = "SELECT * FROM Teams";
 
// Execute query:
$result = mssql_query($SQL) 
    or die('A error occured: ' . mssql_error());
 
// Get result count:
$Count = mssql_num_rows($result);
print "Showing $count rows:<hr/>\n\n";
 
// Fetch rows:
while ($Row = mssql_fetch_assoc($result)) {
 
    print $Row['teamNaam'] . "\n";
 
}
 
mssql_close($con);
?>
