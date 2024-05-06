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
    
    $hotel_count = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header> 
        <div class="page-title">
            <h1>Hotels</h1>
        </div>
    </header>
    <main>
        <div class="filter">
            <form action="" method="GET">
                <label for="vote"> Filtra per Voto</label>
                <input type="text" name="vote" id="vote">

                <label for="parking">Filtra per parcheggio</label>
                <select name="parking" id="parking">
                    <option value="">-</option>
                    <option value="yes">Sì</option>
                    <option value="no">No</option>
                </select>

                <button>Filtra</button>
            </form>
        </div>

        <div class="container">
            <div class="hotels">
                <?php
                foreach($hotels as $hotel){
                    
                    $hotel_count++;

                    $hotel_name = $hotel['name'];
                    $hotel_description = $hotel['description'];
                    $hotel_has_parking = $hotel['parking'] ? 'Ha il parcheggio' : 'Non ha il parcheggio';
                    $hotel_vote = $hotel['vote'];
                    $holel_distance = $hotel['distance_to_center'];
                
                    $hotel_text = 
                    "
                        <table class=\"table table-dark table-striped table-hover\">     
                            <tbody>
                                <tr>
                                    <th scope=\"row\">Nome:</th>
                                    <td>$hotel_name</td>                                    
                                </tr>
                                <tr>
                                    <th scope=\"row\">Descrizione</th>
                                    <td>$hotel_description</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Parcheggio</th>
                                    <td colspan=\"2\">$hotel_has_parking</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Voto</th>
                                    <td colspan=\"2\">$hotel_vote Stelle</td>
                                </tr>
                                <tr>
                                    <th scope=\"row\">Distanza dal Centro</th>
                                    <td colspan=\"2\">$holel_distance km </td>
                                </tr>
                            </tbody>
                        </table>
                    ";                    
                ?>
                    <div class="hotel-table">
                        <h2>Hotel #<?php echo $hotel_count ?></h2>
                        <?php echo $hotel_text ?>
                    </div>
                <?php
                };
                ?>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>




<style>
    .page-title{
        padding: 25px 0;
        color: white;
        background-color: coral;
        text-align: center;
    }

    .filter{
        height: 130px;
        background-color: rgb(211, 211, 211);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .filter button{
        display: block;
        margin: 0 auto;
        margin-top: 20px;
        background-color: coral;
        color: white;        
    }


    .filter label{
        font-size: 24px;
    }

    #vote{
        margin-right: 35px;
    }

    .hotel-table{
        margin: 50px 0;
    }
</style>
</html>