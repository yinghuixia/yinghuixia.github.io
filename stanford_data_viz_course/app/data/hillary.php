<?php
/*
* Code to query an SQLite database and return
* results as JSON.
*/
 
// Specify your sqlite database name and path //
$dir = 'sqlite:database.sqlite';
 
// Instantiate PDO connection object and failure msg //
$dbh = new PDO($dir) or die("cannot open database");
 
// Define your SQL statement //
$query = "SELECT * FROM Emails";
 
// Iterate through the results and pass into JSON encoder //
    $json = array(); 
    
    foreach ($dbh->query($query) as $row) {
        $item = array(
            'Id' => (string)$row[0],
            'DocNumber' => (string)$row[1],
            'MetadataSubject' => (string)$row[2]
        );
        $json[] = $item;
    }
        echo json_encode($json, JSON_UNESCAPED_SLASHES);
}
?>
