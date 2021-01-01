<!-- Exercice 1
==========

Une évaluation sur javascript est donnée aux 11 élèves d'une classe de développeurs.
Les 11 élèves obtiennent des notes suivantes :

2 élèves obtiennent 7.5
1 élèves obtient 9
3 élèves 6
2 élèves 8
1 élève était absent
2 élèves obtiennent 6.5

Développer un outil permettant de calculer la moyenne de cette évaluation, la meilleure note, et la moins bonne -->

<?php
    $Student = array(7.5 , 7.5 , 9 , 6 , 6 , 6 , 8 , 8 , 6.5 , 6.5);
    $moyenne = floor(array_sum($Student)/count($Student));
    $bigNumber = max($Student);
    $litleNumber = min($Student);
    echo "La moyenne de la classe est " . $moyenne ." et la meilleure note est " . $bigNumber . " et la note la plus faible est " . $litleNumber;
?>