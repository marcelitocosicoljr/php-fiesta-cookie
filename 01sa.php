<?php

echo "<div style='padding:20px; box-shadow: 0px 0px 5px grey; border-radius:8px; margin:20px; '> ";
echo "<h3 style='text-align:center; '>Practice 4-01</h3>";
$valhalla = array (
        array(1, "Bulbasaur", "Grass", "Poison", "Overgrow", 45, 49, 49),
        array(2, "Ivysaur", "Grass", "Poison", "Overgrow", 60, 62, 63),
        array(3, "Venusaur", "Grass", "Poison", "Overgrow", 80, 82, 83),
        array(4, "Charmander", "Fire", "N/A", "Blaze", 39, 52, 43),
        array(5, "Charmeleon", "Fire", "N/A", "Blaze", 58, 64, 58),
        array(6, "Charizard", "Fire", "Flying", "Blaze", 78, 84, 78),
        array(7, "Squirtle", "Water", "N/A", "Torrent", 44, 48, 65),
        array(8, "Wartortle", "Water", "N/A", "Torrent", 69, 63, 80),
        array(9, "Blastoise", "Water", "N/A", "Torrent", 79, 83, 100),
        array(10, "Caterpie", "Bug", "N/A", "Shield Dust", 50, 20, 55),
    );

//Print the array
print_r($valhalla);

echo "<br><br>";

//Echo the number of elements in an array.
echo count($valhalla);

echo "<br><br>";

//Declare variable $favorite and assign your favorite specie (use array notation).
$favorite =$valhalla[0][1];
echo "</div>";

echo "<br>";

echo "<div style='padding:20px; box-shadow: 0px 0px 5px grey; border-radius:8px; margin:20px; '> ";
echo "<h3 style='text-align:center; '>Practice 4-02</h3>";

//Using foreach display all the species in a list.
foreach ($valhalla as $specie) {
        echo "<div>";
                echo "<div style='padding:20px 30px; margin: 10px 0; box-shadow: 0px 0px 3px grey;'>";
                        echo $specie[1];
                echo "</div>";
        echo "</div>";
}

echo "</div>";

?>