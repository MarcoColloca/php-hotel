<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <main>
        <div class="hotels">
            <?php
            foreach($hotels as $hotel){

                $hotel_name = $hotel['name'];
                $hotel_description = $hotel['description'];
                $hotel_has_parking = $hotel['parking'] ? 'Ha il parcheggio' : 'Non ha il parcheggio';
                $hotel_vote = $hotel['vote'];
                $holel_distance = $hotel['distance_to_center'];
            
                $hotel_text = 
                "               
                    <h3> Nome: $hotel_name </h3>
                    <P> Descrizione: $hotel_description</p>
                    <p> $hotel_has_parking </p>
                    <p> Hotel $hotel_vote stelle </p>
                    <p> $holel_distance km dal centro</p>
                ";
            ?>
                <div class="hotel">
                    <?php echo $hotel_text ?>
                </div>
            <?php        
            };
            ?>
        </div>
    </main>
    
</body>
</html>