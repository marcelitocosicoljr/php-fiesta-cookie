<style>
    <?php include "main.css"; ?>
</style>

<?php 

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

    function hp_sum($array, $sum_array = 0){
        foreach ($array as $key => $sum) {
            $sum_array += $sum[5];
        }
        return $sum_array;
    }

    function ave_attack($array, $sum_array = 0){
        foreach ($array as $key => $sum) {
            $sum_array += $sum[6];
        }
        return $sum_array/count($array);
    }
    echo'
    <div class="container">
        <h1 class="title">Practice 4-03 - Functions</h1>
        <div class="sub-container">
            <h2 class="sub-title">HP SUM</h2>
            <span class="content">Sum of HP Column : '.hp_sum($valhalla).'</span>
        </div>
        <div class="sub-container">
            <h2 class="sub-title">ATTACK AVERAGE</h2>
            <span class="content">Average of the Attack Column : '.ave_attack($valhalla).'</span>
        </div>
    </div>'

?>
