<!-- ## Snack 3
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

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

        $new_array=[];
 
        while (count($new_array) < 15) {
            
            $random_number = rand(1,100);

            if (!in_array($random_number, $new_array)) {
                $new_array[] = $random_number;
            }

        };

        var_dump ($new_array);

    ?>

</body>
</html>