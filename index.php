<html>
    <head>
        <style>
            .container{
                background-color: mediumpurple;
                color: white;
                border: 5px solid fuchsia;
                font-size: 20px;
                text-align: center;
                border-radius: 33px;
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php
            //Hier word mijn array gemaakt
            $Meric = [
                'Meric',
                'Oktay',
                's1196735.student@windesheim.nl'
            ];

            //Hier word in een Multidimensionele array de namen, leeftijden en hobbys van mijn groep gezet
            $Students = [
                    ['name' => 'Tim' , 'age' => 19 , 'hobby' => 'gamen'],
                    ['name' => 'Jeroen' , 'age' => 20 , 'hobby' => 'gamen, voetbal'],
                    ['name' => 'Ashraf' , 'age' => 20 , 'hobby' => 'gamen'],
                    ['name' => 'Meric' , 'age' => 21 , 'hobby' => 'gamen, trainen']
            ];

            //Hier word alles getoond op het scherm door een for foreach
            foreach ($Students as $Student) {
                echo $Student['name'] . " " . $Student['age']. "<br>&nbsp" .  $Student['hobby'] . "<hr>";
            }

            //Hier word alles getoond op het scherm door een for loop
            for($student = 0; $student < count($Students); $student++){
                echo $Students[$student]['name'] . " " . $Students[$student]['hobby']."<br>" . "<hr>";
            }
            /**
             * Haal de presentatie van een variabele binnen
             */
            ?>
        </div>
    </body>
</html>
