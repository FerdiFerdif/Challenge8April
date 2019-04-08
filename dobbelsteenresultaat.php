<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dobbelsteen Spel</title>
    <link type="text/css" rel="stylesheet" href="cssdubbelsteen.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet"> <!--Normale Variant  font-family: 'Baloo Chettan', cursive; -->
    <link rel="icon" href="https://i.ibb.co/0JK5N6W/FG6.png" sizes="">
</head>
<body>

<nav>
    <p id="xd"><a href="homepagina.php"><img src="https://i.ibb.co/BPsTzM8/Ferdi-Game.png">  </a> </li></p>
</nav>
</body>

<div class="home">
    <div class="mainbackscreen">

        <div class="textblock">
            <div class="text">
                <p id="Hoofdtitel">
                    DOBBELSTEEN SPEL
                </p>

                <p id="Hoofdtitel">
                    Gegokte getal: <?php
                    $gegoktgetal=0;
                    $dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');
                    $gokQRY = "SELECT gok FROM resultaat ORDER BY resultaat_ID DESC limit 1";
                    $result = mysqli_query($dbc, $gokQRY) or die ('Error querying.');
                    foreach($result as $row)
                    {
                        echo " ".$row['gok']."<br>";
                        $gegoktgetal = $row['gok'];
                    }

                    $worpvar = 0;
                    $dbc = mysqli_connect('localhost','root','root','ferdigames','8889') or die ('Error connecting.');
                    $gooiQRY = "SELECT gooi FROM resultaat ORDER BY resultaat_ID DESC limit 1";
                    $result = mysqli_query($dbc, $gooiQRY) or die ('Error querying.');
                    foreach($result as $row)
                    {
                        //echo " ".$row['gooi']."<br>";
                        $worpvar = $row['gooi'];
                    }


                    switch ($worpvar) {
                        case "1":
                            echo "Geworpen getal: 1";
                            echo "<img id='D1' src=https://i.ibb.co/nrQcSst/dice1.gif>";
                            break;
                        case "2":
                            echo "Geworpen getal: 2";
                            echo "<img src=https://i.ibb.co/3p9wsXX/dice2.gif>";
                            break;
                        case "3":
                            echo "Geworpen getal: 3";
                            echo "<img src=https://i.ibb.co/Ch1BxvV/dice3.gif>";
                            break;
                        case "4":
                            echo "Geworpen getal: 4";
                            echo "<img id='D4' src=https://i.ibb.co/MSnYqf0/dice4.gif>";
                            break;
                        case "5":
                            echo "Geworpen getal: 5";
                            echo "<img src=https://i.ibb.co/FmMLGC9/dice5.gif>";
                            break;
                        case "6":
                            echo "Geworpen getal: 6";
                            echo "<img src=https://i.ibb.co/Rp2SM7p/dice6.gif>";
                            break;
                        default:
                            echo "Jij bent niet van deze wereld";
                    }

                    if ($gegoktgetal == $worpvar) {
                        echo " <br> Je hebt het goed geraden!";

                    } else {
                        echo "<br> Jammer jongen!";
                    }
                    ?>
                </p>




            </div>

        </div>
    </div>
</div>

</html>