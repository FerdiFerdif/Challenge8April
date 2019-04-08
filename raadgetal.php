
<?php
$getal = filter_input(INPUT_POST,'raadgetal');


$dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');
//
$latestspeler = 0;
$spelernummerQRY = "SELECT speler_ID FROM speler ORDER BY speler_ID DESC limit 1";
$latestspelerRES = mysqli_query($dbc, $spelernummerQRY) or die ('Error querying.');

foreach($latestspelerRES as $row)
{
    $latestspeler = $row['speler_ID'];
}

//echo $latestspeler;
//

//$a = "0" + $spelernummerQRY;
//$latestspeler = +$a;

//echo $latestspeler;
$worp=rand(1,6);

echo $getal;
$momentdate=date('Y-m-d H:i:s');

$query = "INSERT INTO resultaat (speler_ID,moment_ID,gok,gooi,spel)
                    VALUES ('$latestspeler','$momentdate','$getal','$worp','DICE')";

$result = mysqli_query($dbc, $query) or die ('Error querying.');


header("Location:dobbelsteenresultaat.php");






?>