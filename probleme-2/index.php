<!-- Exercice 2
==========
Je dois carreler mon séjour qui mesure 6m*3m. Les dalles font 33cm*33cm. Les carrelages à acheter se vendent par 10.
Développer un outil permettant de me donner le nombre de paquets à acheter. -->
<?php 
    function slabCount($longSide , $smallOdds , $nbreOfSlab , $longSideSlabInMeter , $smallOddsSlabInMeter){
        $totalRoom = $longSide * $smallOdds;
        $totalPackInSlab = ($longSideSlabInMeter * $smallOddsSlabInMeter)*$nbreOfSlab;
        $nbreTotalPack = floor($totalRoom * $totalPackInSlab);
        return($nbreTotalPack);
    }
    echo slabCount(6 , 3 , 10 , 0.33 , 0.33);
?>