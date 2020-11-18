<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <title>1</title>
    <style>
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
                $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
                $response = file_get_contents($url);
                $result = json_decode($response);

                $i = 0;
                $j = 0;
                for ($i; $i < sizeof($result->tracks->items); $i++) {
                    echo '<div class="col-4 card mt-3 p-0 " style="magin:3px; display:inline-block; float:left;">';
                        echo '<img class="card-img-top mx-auto" src="' . $result->tracks->items[$i]->album->images[0]->url . '">';
                        echo '<div class="card-body">';
                            echo '<h3>' . $result->tracks->items[$i]->album->name . '</h3>';
                            echo '<p>Artist: ' . $result->tracks->items[$i]->artists[0]->name . '</p>';
                            echo '<p>Relaese date: ' . $result->tracks->items[$i]->album->release_date . '</p>';
                            for ($j; $j < sizeof($result->tracks->items[$i]->album->available_markets); $j++) {}
                            echo '<p>Available: ' . $j . 'countries</p>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</body>
</html>