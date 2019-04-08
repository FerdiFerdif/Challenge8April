
<?php
$naam = filter_input(INPUT_POST,'naam');
$email = filter_input(INPUT_POST,'email');


$dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');

$query = "INSERT INTO speler (naam,email)
                    VALUES ('$naam','$email')";


$result = mysqli_query($dbc, $query) or die ('Error querying.');

header("Location: homepagina.php");



?>