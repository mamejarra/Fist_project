<?php
try
{
	$conn = new PDO("sqlsrv:Server=127.0.0.1; Database=ECOLE", "MameDiarra", "pass");
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
die( print_r( $e->getMessage() ) ); 
}
/*
$tsql = "SELECT * FROM etudiant";
$getResults = $conn->prepare($tsql);
$getResults->execute();
$results = $getResults->fetchAll(PDO::FETCH_BOTH);

foreach($results as $row)
{
	echo $row['prenom'].' '.$row['classe'];
	echo '<br>';
}*/
?>