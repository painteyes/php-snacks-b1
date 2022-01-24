<!-- Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    Stampiamo a schermo tutte le partite con questo schema. 
    Olimpia Milano - Cantù | 55-60
-->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $championship_13th = [
            [
                'home_team' => 'Milano',
                'away_team' => 'Sassari',
                'home_team_score' => 96,
                'away_team_score' => 101,
            ],
            [
                'home_team' => 'Capri',
                'away_team' => 'Genova',
                'home_team_score' => 87,
                'away_team_score' => 80,
            ],
            [
                'home_team' => 'Palermo',
                'away_team' => 'Roma',
                'home_team_score' => 110,
                'away_team_score' => 104,
            ],
            [
                'home_team' => 'Napoli',
                'away_team' => 'Verona',
                'home_team_score' => 90,
                'away_team_score' => 91,
            ],
            [
                'home_team' => 'Torino',
                'away_team' => 'Venezia',
                'home_team_score' => 89,
                'away_team_score' => 105,
            ],
            [
                'home_team' => 'Cagliari',
                'away_team' => 'Bologna',
                'home_team_score' => 97,
                'away_team_score' => 80,
            ],

        ];
    ?>

    <?php for ($i = 0; $i < count($championship_13th); $i++) { ?>

        <?php 
            $this_match = $championship_13th[$i]; 
            /*
            echo $this_match['home_team'] . ' - ' . $this_match['away_team'] . ' | ' . $this_match['home_team_score'] . '-' . $this_match['away_team_score']
            */
        ?>

        <div>
            <?php echo $this_match['home_team'] ?> - <?php echo  $this_match['away_team'] ?> 
            | 
            <?php echo $this_match['home_team_score'] ?>-<?php echo $this_match['away_team_score'] ?>
        </div> 

    <?php } ?>
      
</body>
</html>