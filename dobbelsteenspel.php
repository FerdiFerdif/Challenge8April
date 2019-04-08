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

                <div class="helekleinetext"> <p id="hele" >Uitleg: <br> - Je gaat straks met een dobbelsteen gooien.
                        <br> - Eerst raad je het getal wat je gaat gooien. (1 t/m 6)
                        <br> - Vervolgens gooi je de dobbelsteen.
                        <br> - Hopelijk raad je het goed!
                    </p>
                </div>

                <p id="Hoofdtitel">
                    Raad het getal <br>dat je gaat gooien:

                </p>

                <form action="raadgetal.php" method="post">
                    <label for="raadgetal"><b>Getal: </b></label>
                    <input type="number" placeholder="" name="raadgetal" required max="6" min="1">
                </form>


            </div>

        </div>
    </div>
</div>

</html>