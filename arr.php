<?php

$movies[] = array(

        "title" => "Star Wars",

        "year" => 1977

    );

$movies[] = array(

        "title" => "The Empire Strikes Back",

        "year" => 1980

    );

$movies[] = array(

        "title" => "Return of the Jedi",

        "year" => 1983

    );

echo $movies[0]["year"];
 

    // $movie["title"] = "Star Wars";

    // echo "<h1 class=\"title\">" . $movie["title"] . "</h1>";

$movie["title"] = "Star Wars";

    echo '<h1 class="title">' . $movie["title"] . '</h1>';

 

?>